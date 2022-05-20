<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TabungansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tabungans')->truncate();
        \DB::table('tabungans')->insert([
            [   
                'saldo' => 200000,
                'NISN' => '0040256174',
            ],
            [
                'saldo' => 100000,
                'NISN' => '0040234566',
            ],
            [
                'saldo' => 150000,
                'NISN' => '0040278968',    
            ],
            [
                'saldo' => 160000,
                'NISN' => '0040234567',
            ],
            [
                'saldo' => 250000,
                'NISN' => '0040292345',
            ],
        ]);
    }
}
