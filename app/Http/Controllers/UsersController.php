<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Models\Users;
use App\Http\Requests\UserAddRequest;
use App\Http\Requests\UserEditRequest;
use Illuminate\Support\Facades\Auth;
use DateTime;
use File;
use Image;

class UsersController extends Controller
{
    public function getListUsers()
    {
        if (Auth::user()->level > 1)
        {
            return redirect('dashboard');
        }
        $users = new Users;
        $data = $users->getUserList();
        return view('dashboard.modules.users.list', array('data' => $data));
    }

    public function getAddUser()
    {
        if (Auth::user()->level > 1)
        {
            return redirect('dashboard');
        }
        return view('dashboard.modules.users.add');
    }

    public function postAddUser(UserAddRequest $request)
    {
        if (Auth::user()->level > 1)
        {
            return redirect('dashboard');
        }
        $user = new Users;
        $user->name = $request->username;
        $user->email = $request->useremail;
        $user->password = bcrypt($request->userpassword2);
        $user->level = $request->userlevel;
        $user->created_at = new DateTime;


        //Tạo thư mục riêng cho mỗi user
        $user_folder_name = $request->useremail;
        $user_path = public_path().'/users/'.$user_folder_name;
        if (!File::exists($user_path)) {
            File::makeDirectory($user_path, 0775, true, true);
        }

        $image = $request->userAvatar;
        if (strlen($image > 0))
        {
            $image_name = time().'-'.$image->getClientOriginalName();
            $image_path = $user_path.'/'.$image_name;
            Image::make($image->getRealPath())->resize(150, 150)->save($image_path);
            $info = array(
                'avatar'    => '/users/'.$user_folder_name.'/'.$image_name
            );
            $user->info = json_encode($info);
        }

        $user->save();

        return redirect()->route('getListUsers')->with(
            array('flash_message' => 'Bạn đã tạo thành công một tài khoản mới')
        );
    }

    public function getDeleteUser($id)
    {
        if (Auth::user()->level > 1)
        {
            return redirect('dashboard');
        }
        $user = new Users;
        $user_id = $user->find($id);

        $user_folder_name = $user_id->toArray()['email'];
        $user_path = public_path().'/users/'.$user_folder_name;
        if (File::exists($user_path)) {
            File::deleteDirectory($user_path);
        }

        $user_id->delete($id);

        return redirect()->route('getListUsers')->with(
            array('flash_message' => 'Xóa tài khoản thành công')
        );
    }
    
    public function getEditUser($id)
    {
        if (Auth::user()->level > 1)
        {
            return redirect('dashboard');
        }
        $user = new Users;
        $selected_user = $user->find($id)->toArray();
        return view('dashboard.modules.users.edit')->with(
            array('user' => $selected_user)
        );
    }

    public function postEditUser($id, UserEditRequest $request)
    {
        $user = new Users;
        $current_user = $user->find($id);

        $current_user->name = $request->username;
        
        if (Auth::id() != $id) {
            $current_user->level = $request->userlevel;
        }

        if (!empty($request->userpassword2)) {
            $current_user->password = bcrypt($request->userpassword2);
        }

        if (($request->userstatus == 'on') && (Auth::id() != $id)) {
            $current_user->status = true;
        } elseif (($request->userstatus == null) && (Auth::id() != $id)) {
            $current_user->status = false;
        }

        $user_folder_name = $current_user->email;
        $user_path = public_path().'/users/'.$user_folder_name;
        if (!File::exists($user_path)) {
            File::makeDirectory($user_path, 0775, true, true);
        }

        $image = $request->userAvatar;

        if (strlen($image) > 0)
        {
            $image_name = time().'-'.$image->getClientOriginalName();
            $image_path = $user_path.'/'.$image_name;
            Image::make($image->getRealPath())->resize(150, 150)->save($image_path);
            $info = array(
                'avatar'    => '/users/'.$user_folder_name.'/'.$image_name
            );
            $current_user->info = json_encode($info);
        }

        $current_user->updated_at = new DateTime;

        $current_user->save();

        return redirect()->route('getListUsers')->with([
            'flash_message' => 'Bạn đã cập nhật tài khoản thành công',
        ]);
    }
}
