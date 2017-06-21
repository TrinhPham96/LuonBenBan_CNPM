<?php

use Illuminate\Database\Seeder;

class Meo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
 		DB::table('meo')->insert([
            'ma_meo' => '1',
            'ten_meo' => 'Mẹo Một',
            'noi_dung' => 'Đây là mẹo thứ nhất!',
            'ma_hinh_anh' => '6',
        ]);
       	DB::table('meo')->insert([
            'ma_meo' => '2',
            'ten_meo' => 'Mẹo Hai',
            'noi_dung' => 'Đây là mẹo thứ hai!',
            'ma_hinh_anh' => '7',
        ]);
        DB::table('meo')->insert([
            'ma_meo' => '3',
            'ten_meo' => 'Mẹo Ba',
            'noi_dung' => 'Đây là mẹo thứ ba!',
            'ma_hinh_anh' => '8',
        ]);
        DB::table('meo')->insert([
            'ma_meo' => '4',
            'ten_meo' => 'Mẹo Bốn',
            'noi_dung' => 'Đây là mẹo thứ bốn!',
            'ma_hinh_anh' => '9',
        ]);
        DB::table('meo')->insert([
            'ma_meo' => '5',
            'ten_meo' => 'Mẹo Năm',
            'noi_dung' => 'Đây là mẹo thứ năm!',
            'ma_hinh_anh' => '10',
        ]);
    }
}
