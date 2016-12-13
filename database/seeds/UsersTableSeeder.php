<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_users')->insert([
            [
                'name' => 'Train Heartnet',
                'email' => 'lelong310590@gmail.com',
                'password' => bcrypt('123456'),
                'info' => '',
                'level' => 1,
                'created_at' => new DateTime()
            ],
            [
                'name' => 'abc',
                'email' => 'abc@gmail.com',
                'password' => bcrypt('123456'),
                'info' => '',
                'level' => 2,
                'created_at' => new DateTime()
            ],
            [
                'name' => 'def',
                'email' => 'def@gmail.com',
                'password' => bcrypt('123456'),
                'info' => '',
                'level' => 3,
                'created_at' => new DateTime()
            ],
        ]);
    }
}
