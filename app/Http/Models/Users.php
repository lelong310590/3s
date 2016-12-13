<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'tbl_users';
    protected $guarded = [];

    public function getUserList()
    {
        $user = $this->where('id', '!=', 1)->paginate(20)->toArray();
        return $user;
    }
}
