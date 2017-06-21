<?php

use Illuminate\Database\Seeder;

class HoTro extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
    	DB::table('ho_tro')->insert([
            'ma_ho_tro' => '1',
            'noi_dung'=> 'Nội dung 1'
            'ma_hinh_anh' => '36',
        ]);
        DB::table('ho_tro')->insert([
            'ma_ho_tro' => '2',
            'noi_dung'=> 'Nội dung 2'
            'ma_hinh_anh' => '37',
        ]);
        DB::table('ho_tro')->insert([
            'ma_ho_tro' => '3',
            'noi_dung'=> 'Nội dung 3'
            'ma_hinh_anh' => '38',
        ]);
        DB::table('ho_tro')->insert([
            'ma_ho_tro' => '4',
            'noi_dung'=> 'Nội dung 4'
            'ma_hinh_anh' => '39',
        ]);
        DB::table('ho_tro')->insert([
            'ma_ho_tro' => '5',
            'noi_dung'=> 'Nội dung 5'
            'ma_hinh_anh' => '40',
        ]);
    }
}
