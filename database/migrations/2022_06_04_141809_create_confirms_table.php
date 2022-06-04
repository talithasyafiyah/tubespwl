<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfirmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confirms', function (Blueprint $table) {
            $table->id('confirm_id');
            $table->unsignedBigInteger('tabungan_id');
            $table->unsignedBigInteger('transaksi_id');
            $table->foreign('tabungan_id')->references('tabungan_id')->on('tabungans')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('transaksi_id')->references('transaksi_id')->on('transaksis')->onUpdate('CASCADE')->onDelete('CASCADE');
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
        Schema::dropIfExists('confirms');
    }
}
