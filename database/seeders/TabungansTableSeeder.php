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
                'NISN' => '0040256174',
                'kelas_id' => 11
            ],
            [
                'tgl_setoran' => '2022-05-10',
                'jlh_setoran' => 15000,
                'payment' => 'Gopay',
                'NISN' => '0040234566',
                'kelas_id' => 10
            ],
            [
                'tgl_setoran' => '2022-05-10',
                'jlh_setoran' => 18000,
                'payment' => 'DANA',
                'NISN' => '0040278968',
                'kelas_id' => 8   
            ],
            [
                'tgl_setoran' => '2022-05-10',
                'jlh_setoran' => 25000,
                'payment' => 'DANA',
                'NISN' => '0040234567',
                'kelas_id' => 7
            ],
            [
                'tgl_setoran' => '2022-05-10',
                'jlh_setoran' => 20000,
                'payment' => 'Gopay',
                'NISN' => '0040292345',
                'kelas_id' => 5
            ],
        ]);
    }
}
