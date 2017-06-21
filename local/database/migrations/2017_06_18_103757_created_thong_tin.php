<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatedThongTin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thong_tin', function (Blueprint $table) {
            $table->increments('ma_benh_vien');
            $table->string('ten_bv');
            $table->string('dia_chi');
            $table->string('duong_dan');
            $table->string('gioi_thieu');
            // $table->integer('ma_hinh_anh')->unsigned();
            // $table->foreign('ma_hinh_anh')->references('ma_hinh_anh')->on('hinh_anh');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thong_tin');
    }
}
