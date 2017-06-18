<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatedMeo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meo', function (Blueprint $table) {
            $table->increments('ma_meo');
            $table->string('ten_meo');
            $table->string('noi_dung');
            $table->integer('ma_hinh_anh')->unsigned();
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
        Schema::dropIfExists('meo');
    }
}
