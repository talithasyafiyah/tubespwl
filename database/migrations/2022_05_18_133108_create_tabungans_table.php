<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabungansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabungans', function (Blueprint $table) {
            $table->id('tabungan_id');
            $table->bigInteger('jlh_setoran');
            $table->date('tgl_setoran');
            $table->string('payment')->nullable();
            $table->integer('no_rekening')->nullable();
            $table->enum('status', ['accepted', 'pending', 'rejected'])->default('pending');
            $table->char('NISN');
            $table->foreign('NISN')->references('NISN')->on('siswas')->onUpdate('CASCADE')->onDelete('CASCADE');
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
        Schema::dropIfExists('tabungans');
    }
}
