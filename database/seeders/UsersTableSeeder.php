<?php

namespace Database\Seeders;

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
        \DB::table('users')->insert([
            [
                'username' => "talitha",
                'email'=> "talithasyafiyah@gmail.com",
                'password' => bcrypt('talitha'),
                'level' => 'Admin'
            ],
            [
                'username' => "murni",
                'email'=> "murniwati@gmail.com",
                'password' => bcrypt('murni'),
                'level' => 'Admin'
            ],
            [
                'username' => "agnes",
                'email'=> "tryani@gmail.com",
                'password' => bcrypt('agnes'),
                'level' => 'User'
            ],
            [
                'username' => "dhani",
                'email'=> "dhanidwi@gmail.com",
                'password' => bcrypt('dhani'),
                'level' => 'User'
            ],
            [
                'username' => "rahman",
                'email'=> "rahman@gmail.com",
                'password' => bcrypt('rahman'),
                'level' => 'User'
            ],
        ]);
    }
}
