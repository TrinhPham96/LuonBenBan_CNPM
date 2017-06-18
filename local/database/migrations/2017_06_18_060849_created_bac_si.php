<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatedBacSi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bac_si', function (Blueprint $table) {
            $table->increments('ma_bac_si');
            $table->string('ten_bac_si');
            $table->date('ngay_sinh');
            $table->integer('ma_khoa')->unsigned();
            $table->integer('ma_hinh_anh')->unsigned();
            $table->string('hoc_vi');
            $table->foreign('ma_khoa')->references('ma_khoa')->on('khoa');
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
        Schema::dropIfExists('bac_si');
    }
}
