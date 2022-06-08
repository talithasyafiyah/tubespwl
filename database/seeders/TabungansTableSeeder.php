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
                'tgl_setoran' => '2022-05-10',
                'jlh_setoran' => 20000,
                'payment' => 'OVO',
                'status'  => 'accepted',
                'NISN' => '0040256174',
            ],
            [
                'tgl_setoran' => '2022-05-10',
                'jlh_setoran' => 15000,
                'payment' => 'Gopay',
                'status'  => 'accepted',
                'NISN' => '0040234566',
            ],
            [
                'tgl_setoran' => '2022-05-10',
                'jlh_setoran' => 18000,
                'payment' => 'DANA',
                'status'  => 'rejected',
                'NISN' => '0040278968',
            ],
            [
                'tgl_setoran' => '2022-05-10',
                'jlh_setoran' => 25000,
                'payment' => 'DANA',
                'status'  => 'pending',
                'NISN' => '0040234567',
            ],
            [
                'tgl_setoran' => '2022-05-10',
                'jlh_setoran' => 20000,
                'payment' => 'Gopay',
                'status'  => 'pending',
                'NISN' => '0040292345',
            ],
        ]);
    }
}
