<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailTabungansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_tabungans', function (Blueprint $table) {
            $table->increments('detail_id');
            $table->bigInteger('jlh_setoran');
            $table->date('tgl_setoran');
            $table->string('payment')->nullable();
            $table->integer('no_rekening')->nullable();
            $table->char('NISN');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('tabungan_id');
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
        Schema::dropIfExists('detail_tabungans');
    }
}
