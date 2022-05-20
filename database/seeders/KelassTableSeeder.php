<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KelassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('kelas')->truncate();
        \DB::table('kelas')->insert([
            [
                'nama_kelas' => "I-A"
                
            ],
            [
                'nama_kelas' => "II-A"
                
            ],
            [
                'nama_kelas' => "III-A"
            ],
            [
                'nama_kelas' => "IV-A"
                
            ],
            [
                'nama_kelas' => "V-A"
                
            ],
            [
                'nama_kelas' => "VI-A"
                
            ],
            [
                'nama_kelas' => "I-B"
                
            ],
            [
                'nama_kelas' => "II-B"
                
            ],
            [
                'nama_kelas' => "III-B"
                
            ],
            [
                'nama_kelas' => "IV-B"
                
            ],
            [
                'nama_kelas' => "V-B"
                
            ],
            [
                'nama_kelas' => "VI-B"
                
            ],
        ]);
    }
}
