<?php

use Illuminate\Database\Seeder;

class TinTuc extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tin_tuc')->insert([
            'ma_tin_tuc' => '1',
            'ten_tin_tuc' => 'Tin Tức Một',
            'noi_dung' => 'Đây là tin tức thứ nhất!',
            'ma_hinh_anh' => '11',
        ]);
        DB::table('tin_tuc')->insert([
            'ma_tin_tuc' => '2',
            'ten_tin_tuc' => 'Tin Tức Hai',
            'noi_dung' => 'Đây là tin tức thứ hai!',
            'ma_hinh_anh' => '12',
        ]);
        DB::table('tin_tuc')->insert([
            'ma_tin_tuc' => '3',
            'ten_tin_tuc' => 'Tin Tức Ba',
            'noi_dung' => 'Đây là tin tức thứ ba!',
            'ma_hinh_anh' => '13',
        ]);
        DB::table('tin_tuc')->insert([
            'ma_tin_tuc' => '4',
            'ten_tin_tuc' => 'tTn Tức Bốn',
            'noi_dung' => 'Đây là tin tức thứ bốn!',
            'ma_hinh_anh' => '14',
        ]);
        DB::table('tin_tuc')->insert([
            'ma_tin_tuc' => '5',
            'ten_tin_tuc' => 'Tin Tức Năm',
            'noi_dung' => 'Đây là tin tức thứ năm!',
            'ma_hinh_anh' => '15',
        ]);

    }
}
