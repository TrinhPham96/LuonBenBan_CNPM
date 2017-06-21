<?php

use Illuminate\Database\Seeder;

class Thuoc extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
    	DB::table('thuoc')->insert([
            'ma_thuoc' => '1',
            'ten_thuoc' => 'Thuốc 1',
            'ma_loai_thuoc' => '1',
            'dac_tri' => 'Đặc Trị 1',
            'cach_su_dung' => 'Đốt uống',
            'ma_benh' => '1',
            'ma_hinh_anh' => '26',
        ]);
        DB::table('thuoc')->insert([
            'ma_thuoc' => '2',
            'ten_thuoc' => 'Thuốc 2',
            'ma_loai_thuoc' => '2',
            'dac_tri' => 'Đặc Trị 2',
            'cach_su_dung' => 'Đốt uống',
            'ma_benh' => '2',
            'ma_hinh_anh' => '27',
        ]);
        DB::table('thuoc')->insert([
            'ma_thuoc' => '3',
            'ten_thuoc' => 'Thuốc 3',
            'ma_loai_thuoc' => '3',
            'dac_tri' => 'Đặc Trị 3',
            'cach_su_dung' => 'Đốt uống',
            'ma_benh' => '3',
            'ma_hinh_anh' => '28',
        ]);
        DB::table('thuoc')->insert([
            'ma_thuoc' => '4',
            'ten_thuoc' => 'Thuốc 4',
            'ma_loai_thuoc' => '4',
            'dac_tri' => 'Đặc Trị 4',
            'cach_su_dung' => 'Đốt uống',
            'ma_benh' => '4',
            'ma_hinh_anh' => '29',
        ]);
        DB::table('thuoc')->insert([
            'ma_thuoc' => '5',
            'ten_thuoc' => 'Thuốc 5',
            'ma_loai_thuoc' => '5',
            'dac_tri' => 'Đặc Trị 5',
            'cach_su_dung' => 'Đốt uống',
            'ma_benh' => '5',
            'ma_hinh_anh' => '30',
        ]);

    }
}
