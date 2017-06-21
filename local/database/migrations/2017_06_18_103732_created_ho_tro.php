<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatedHoTro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ho_tro', function (Blueprint $table) {
            $table->increments('ma_ho_tro');
            $table->string('noi_dung');
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
        Schema::dropIfExists('ho_tro');
    }
}
