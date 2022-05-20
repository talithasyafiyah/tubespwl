<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BeritasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('beritas')->truncate();
        \DB::table('beritas')->insert([
            [
                'user_id' => 6,
                'judul'=> "SD Pelita Harapan Menjadi Sekolah Adiwiyata",
                'konten'=> "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
                'tanggal'=> '2021-04-25',
            ],
            [
                'user_id' => 7,
                'judul'=> "Prestasi Bulanan Siswa SD Pelita Harapan",
                'konten'=> "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
                'tanggal'=> '2021-06-15',
            ],
            [
                'user_id' => 8,
                'judul'=> "Vaksin Massal untuk Guru, Siswa, dan Staff SD Pelita Harapan",
                'konten'=> "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
                'tanggal'=> '2021-09-02',
            ],
            [
                'user_id' => 6,
                'judul'=> "SD Pelita Harapan sebagai Tuan Rumah Olimpiade Matematika",
                'konten'=> "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
                'tanggal'=> '2022-03-25',
            ],
        ]);
    }
}
