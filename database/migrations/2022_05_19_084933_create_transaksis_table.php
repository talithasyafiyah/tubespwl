<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id('transaksi_id');
            $table->integer('jlh_penarikan');
            $table->date('tgl_penarikan');
            $table->unsignedBigInteger('tabungan_id');
            $table->unsignedBigInteger('user_id');
            $table->char('NISN');
            $table->foreign('tabungan_id')->references('tabungan_id')->on('tabungans')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('NISN')->references('NISN')->on('siswas')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}
