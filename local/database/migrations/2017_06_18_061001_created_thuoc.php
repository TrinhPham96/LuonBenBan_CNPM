<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatedThuoc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thuoc', function (Blueprint $table) {
            $table->increments('ma_thuoc');
            $table->string('ten_thuoc');
            $table->integer('ma_loai_thuoc')->unsigned();
            $table->string('dac_tri');
            $table->string('cach_su_dung');
            $table->integer('ma_benh')->unsigned();
            $table->integer('ma_hinh_anh')->unsigned(); 
            $table->foreign('ma_loai_thuoc')->references('ma_loai_thuoc')->on('loai_thuoc');
            $table->foreign('ma_benh')->references('ma_benh')->on('benh');
            $table->foreign('ma_hinh_anh')->references('ma_hinh_anh')->on('hinh_anh');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thuoc');
    }
}
