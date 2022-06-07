<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_siswa', function (Blueprint $table) {
            $table->char('NISN')->primary();
            $table->string('nama');
            $table->string('alamat');
            $table->char('no_hp',12);
            $table->bigInteger('saldo');
            $table->bigInteger('kelas_id')->unsigned();
            $table->unsignedBigInteger('user_id');
            $table->foreign('kelas_id',20)->references('kelas_id')->on('kelas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_siswa');
    }
}
