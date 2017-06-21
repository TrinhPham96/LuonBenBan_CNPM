<?php

use Illuminate\Database\Seeder;

class Khoa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
    	DB::table('khoa')->insert([
            'ma_khoa' => '1',
            'ten_khoa' => 'Khoa Một',
            'ma_hinh_anh' => '1',
        ]);
        DB::table('khoa')->insert([
            'ma_khoa' => '2',
            'ten_khoa' => 'Khoa Hai',
            'ma_hinh_anh' => '2',
        ]);
        DB::table('khoa')->insert([
            'ma_khoa' => '3',
            'ten_khoa' => 'Khoa Ba',
            'ma_hinh_anh' => '3',
        ]);
        DB::table('khoa')->insert([
            'ma_khoa' => '4',
            'ten_khoa' => 'Khoa Bốn',
            'ma_hinh_anh' => '4',
        ]);
        DB::table('khoa')->insert([
            'ma_khoa' => '5',
            'ten_khoa' => 'Khoa Năm',
            'ma_hinh_anh' => '5',
        ]);
    }
}
