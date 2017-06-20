<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatedTracNghiem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trac_nghiem', function (Blueprint $table) {
            $table->increments('ma_cau');
            $table->string('noi_dung');
            $table->integer('ma_dap_an');
            $table->string('dan_an');
            $table->integer('ma_benh')->unsigned();
            $table->integer('ma_hinh_anh')->unsigned();
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
        Schema::dropIfExists('trac_nghiem');
    }
}
