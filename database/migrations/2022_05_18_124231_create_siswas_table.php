<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->char('NISN')->primary();
            $table->string('nama');
            $table->string('kelas');
            $table->string('alamat');
            $table->char('no_hp', 12)->unique();
            $table->bigInteger('kelas_id')->unsigned();
            $table->foreign('kelas_id')->references('kelas_id')->on('kelas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswas');
    }
}
