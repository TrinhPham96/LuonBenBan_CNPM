<?php

use Illuminate\Database\Seeder;

class BacSi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
    	DB::table('bac_si')->insert([
            'ma_bac_si' => '1',
            'ten_bac_si' => 'Nguyễn Văn Bác Sĩ Một',
            'ngay_sinh' => '1989-3-3',
            'ma_khoa' => '1',
            'ma_hinh_anh' => '16',
            'hoc_vi' => 'Tiến Sĩ',
        ]);
        DB::table('bac_si')->insert([
            'ma_bac_si' => '2',
            'ten_bac_si' => 'Nguyễn Văn Bác Sĩ Một',
            'ngay_sinh' => '1989-3-3',
            'ma_khoa' => '1',
            'ma_hinh_anh' => '17',
            'hoc_vi' => 'Tiến Sĩ',
        ]);
        DB::table('bac_si')->insert([
            'ma_bac_si' => '3',
            'ten_bac_si' => 'Nguyễn Văn Bác Sĩ Một',
            'ngay_sinh' => '1989-3-3',
            'ma_khoa' => '3',
            'ma_hinh_anh' => '18',
            'hoc_vi' => 'Tiến Sĩ',
        ]);
        DB::table('bac_si')->insert([
            'ma_bac_si' => '4',
            'ten_bac_si' => 'Nguyễn Văn Bác Sĩ Bốn',
            'ngay_sinh' => '1989-3-3',
            'ma_khoa' => '4',
            'ma_hinh_anh' => '19',
            'hoc_vi' => 'Tiến Sĩ',
        ]);
        DB::table('bac_si')->insert([
            'ma_bac_si' => '5',
            'ten_bac_si' => 'Nguyễn Văn Bác Sĩ Năm',
            'ngay_sinh' => '1989-3-3',
            'ma_khoa' => '5',
            'ma_hinh_anh' => '20',
            'hoc_vi' => 'Tiến Sĩ',
        ]);
        
    }
}
