<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TransaksisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('transaksis')->truncate();
        \DB::table('transaksis')->insert([
            [   
                'jlh_penarikan' => 20000,
                'tgl_penarikan' => '2022-05-10',
                'tabungan_id' => 1,
                'user_id' => 6,
                'NISN' => '0040256174',
            ],
            [
                'jlh_penarikan' => 30000,
                'tgl_penarikan' => '2022-05-15',
                'tabungan_id' => 2,
                'user_id' => 7,
                'NISN' => '0040234566',
            ],
            [
                'jlh_penarikan' => 25000,
                'tgl_penarikan' => '2022-05-2',
                'tabungan_id' => 3,  
                'user_id' => 8, 
                'NISN' => '0040278968',
            ],
            [
                'jlh_penarikan' => 18000,
                'tgl_penarikan' => '2022-05-1',
                'tabungan_id' => 4,
                'user_id' => 6,
                'NISN' => '0040234567',
            ],
            [
                'jlh_penarikan' => 50000,
                'tgl_penarikan' => '2022-05-19',
                'tabungan_id' => 5,
                'user_id' => 7,
                'NISN' => '0040292345',
            ],
        ]);
    }
}
