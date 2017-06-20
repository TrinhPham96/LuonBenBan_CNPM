<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatedBenh extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('benh', function (Blueprint $table) {
            $table->increments('ma_benh');
            $table->string('ten_benh');
            $table->string('chuan_doan');
            $table->string('cach_phong');
            $table->string('nguyen_nhan');
            $table->string('dieu_tri');
            $table->integer('ma_khoa')->unsigned();
            $table->integer('ma_hinh_anh')->unsigned();
            $table->integer('ma_bac_si')->unsigned();
            $table->foreign('ma_khoa')->references('ma_khoa')->on('khoa');
            $table->foreign('ma_hinh_anh')->references('ma_hinh_anh')->on('hinh_anh');
            $table->foreign('ma_bac_si')->references('ma_bac_si')->on('bac_si');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('benh');
    }
}
