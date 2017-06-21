<?php

use Illuminate\Database\Seeder;

class NguoiDung extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('nguoi_dung')->insert([
            'ma_nguoi_dung' => 1,
            'ten_nguoi_dung' => 'Nguyễn Văn Một',
            'phan_quyen' => 1,
            'ngay_sinh' => '1996-12-4',
            'sodienthoai' => '0989999999',
            'mat_khau' => 'nguyenvanmot',
        ]);
        DB::table('nguoi_dung')->insert([
            'ma_nguoi_dung' => '6',
            'ten_nguoi_dung' => 'Nguyễn Văn Hai',
            'phan_quyen' => '1',
            'ngay_sinh' => '1992-12-4',
            'sodienthoai' => '0989999999',
            'mat_khau' => 'nguyenvanhai',
        ]);
        DB::table('nguoi_dung')->insert([
            'ma_nguoi_dung' => '3',
            'ten_nguoi_dung' => 'Nguyễn Văn Ba',
            'phan_quyen' => '1',
            'ngay_sinh' => '1995-2-2',
            'sodienthoai' => '0989999999',
            'mat_khau' => 'nguyenvanba',
        ]);
        DB::table('nguoi_dung')->insert([
            'ma_nguoi_dung' => '4',
            'ten_nguoi_dung' => 'Nguyễn Văn Bốn',
            'phan_quyen' => '1',
            'ngay_sinh' => '1996-12-5',
            'sodienthoai' => '0989999999',
            'mat_khau' => 'nguyenvanbon',
        ]);
        DB::table('nguoi_dung')->insert([
            'ma_nguoi_dung' => '5',
            'ten_nguoi_dung' => 'Nguyễn Văn Năm',
            'phan_quyen' => '1',
            'ngay_sinh' => '1996-12-4',
            'sodienthoai' => '0989999999',
            'mat_khau' => 'nguyenvannam',
        ]);
    }
}
