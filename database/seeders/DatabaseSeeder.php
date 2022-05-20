<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   \DB::statement('SET FOREIGN_KEY_CHECKS=0;');

       $this->call(UsersTableSeeder::class);
       $this->call(SiswasTableSeeder::class);
       $this->call(KelassTableSeeder::class);
       $this->call(TabungansTableSeeder::class);
       $this->call(TransaksisTableSeeder::class);
       $this->call(BeritasTableSeeder::class);

       \DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
