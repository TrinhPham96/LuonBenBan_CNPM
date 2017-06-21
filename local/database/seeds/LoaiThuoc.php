<?php

use Illuminate\Database\Seeder;

class LoaiThuoc extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
    	DB::table('loai_thuoc')->insert([
            'ma_loai_thuoc' => '1',
            'ten_loai_thuoc' => 'Loại Một',
        ]);
        DB::table('loai_thuoc')->insert([
            'ma_loai_thuoc' => '2',
            'ten_loai_thuoc' => 'Loại Hai',
        ]);
        DB::table('loai_thuoc')->insert([
            'ma_loai_thuoc' => '3',
            'ten_loai_thuoc' => 'Loại Ba',
        ]);
        DB::table('loai_thuoc')->insert([
            'ma_loai_thuoc' => '4',
            'ten_loai_thuoc' => 'Loại Bốn',
        ]);
        DB::table('loai_thuoc')->insert([
            'ma_loai_thuoc' => '5',
            'ten_loai_thuoc' => 'Loại Năm',
        ]);
    }
}
