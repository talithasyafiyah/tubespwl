<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('siswas')->truncate();
        \DB::table('siswas')->insert([
            [
                'NISN' => '0040256174',
                'nama'=> "Talitha Syafiyah",
                'alamat'=> "Jl. Dara",
                'no_hp'=> '081260152610',
                'saldo' => 150000,
                'kelas_id'=> 11,
                'user_id' => 1,
            ],
            [
                'NISN' => '0040234566',
                'nama'=> "Murniwati Siahaan",
                'alamat'=> "Jl. Beo",
                'no_hp'=> '081260155678',
                'saldo' => 150000,
                'kelas_id'=> 10,
                'user_id' => 2,
                
            ],
            [
                'NISN' => '0040278968',
                'nama'=> "Agnes Tryani Simbolon",
                'alamat'=> "Jl. Merak",
                'no_hp'=> '081260167548',
                'saldo' => 150000,
                'kelas_id'=> 8,
                'user_id' => 3,
                
            ],
            [
                'NISN' => '0040234567',
                'nama'=> "Dhani Dwi Septian",
                'alamat'=> "Jl. Merpati",
                'no_hp'=> '081260934567',
                'saldo' => 150000,
                'kelas_id'=> 7,
                'user_id' => 4,
                
            ],
            [
                'NISN' => '0040292345',
                'nama'=> "Muhammad Nurahman",
                'alamat'=> "Jl. Rajawali",
                'no_hp'=> '081263459023',
                'saldo' => 150000,
                'kelas_id'=> 5,
                'user_id' => 5,
                
            ],
        ]);
    }
}
