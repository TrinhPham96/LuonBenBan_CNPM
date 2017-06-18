<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatedNguoiDung extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nguoi_dung', function (Blueprint $table) {
            $table->increments('ma_nguoi_dung');
            $table->string('ten_nguoi_dung');
            $table->integer('phan_quyen');
            $table->date('ngay_sinh');
            $table->string('sodienthoai',20);
            $table->string('mat_khau',20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nguoi_dung');
    }
}
