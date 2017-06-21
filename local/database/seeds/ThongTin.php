<?php

use Illuminate\Database\Seeder;

class ThongTin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
    	DB::table('thong_tin')->insert([
            'ma_benh_vien' => '1',
            'ten_bv' => 'Bệnh Viện Một',
            'dia_chi' => 'Địa chỉ 1',
            'duong_dan' => 'Team_Pic/Khoa/Rang_Ham_Mat.png',
            'gioi_thieu' => '0989999999',
            // 'ma_hinh_anh' => '41',
        ]);
        DB::table('thong_tin')->insert([
            'ma_benh_vien' => '2',
            'ten_bv' => 'Bệnh Viện 2',
            'dia_chi' => 'Địa chỉ 2',
            'duong_dan' => 'Team_Pic/Khoa/Rang_Ham_Mat.png',
            'gioi_thieu' => '0989999999',
            // 'ma_hinh_anh' => '42',
        ]);
        DB::table('thong_tin')->insert([
            'ma_benh_vien' => '3'
            'ten_bv' => 'Bệnh Viện 3',
            'dia_chi' => 'Địa chỉ 3',
            'duong_dan' => 'Team_Pic/Khoa/Rang_Ham_Mat.png',
            'gioi_thieu' => '0989999999',
            // 'ma_hinh_anh' => '43',
        ]);
        DB::table('thong_tin')->insert([
            'ma_benh_vien' => '4',
            'ten_bv' => 'Bệnh Viện 4',
            'dia_chi' => 'Địa chỉ 4',
            'duong_dan' => 'Team_Pic/Khoa/Rang_Ham_Mat.png',
            'gioi_thieu' => '0989999999',
            // 'ma_hinh_anh' => '44',
        ]);
        DB::table('thong_tin')->insert([
            'ma_benh_vien' => '5',
            'ten_bv' => 'Bệnh Viện 5',
            'dia_chi' => 'Địa chỉ 5',
            'duong_dan' => 'Team_Pic/Khoa/Rang_Ham_Mat.png',
            'gioi_thieu' => '0989999999',
            // 'ma_hinh_anh' => '45',
        ]);
    }
}
