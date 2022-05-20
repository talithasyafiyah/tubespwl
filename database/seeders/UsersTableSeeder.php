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
        \DB::table('users')->truncate();
        \DB::table('users')->insert([
            [
                'username' => "talitha",
                'email'=> "talithasyafiyah@gmail.com",
                'password' => bcrypt('talitha'),
                
            ],
            [
                'username' => "murni",
                'email'=> "murniwati@gmail.com",
                'password' => bcrypt('murni'),
                
            ],
            [
                'username' => "agnes",
                'email'=> "tryani@gmail.com",
                'password' => bcrypt('agnes'),
                
            ],
            [
                'username' => "dhani",
                'email'=> "dhanidwi@gmail.com",
                'password' => bcrypt('dhani'),
                
            ],
            [
                'username' => "rahman",
                'email'=> "rahman@gmail.com",
                'password' => bcrypt('rahman'),
                
            ],
            [
                'username' => "john",
                'email'=> "john@gmail.com",
                'password' => bcrypt('john'),
                
            ],
            [
                'username' => "jane",
                'email'=> "jane@gmail.com",
                'password' => bcrypt('jane'),
                
            ],
            [
                'username' => "doe",
                'email'=> "doe@gmail.com",
                'password' => bcrypt('doe'),
                
            ],
        ]);
    }
}
