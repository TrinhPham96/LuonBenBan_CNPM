<?php

use Illuminate\Database\Seeder;

class Benh extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('benh')->insert([
            'ma_benh' => '1',
            'ten_benh' => 'Bệnh Một',
            'chuan_doan' => 'Chẩn Đoán Một',
            'cach_phong' => 'Cách Phòng Một',
            'nguyen_nhan' => 'Nguyên Nhân Một',
            'dieu_tri' => 'Điều Trị Một',
            'ma_khoa' => '1',
            'ma_hinh_anh' => '21',
            'ma_bac_si' => '1',
        ]);
        DB::table('benh')->insert([
            'ma_benh' => '2',
            'ten_benh' => 'Bệnh Hai',
            'chuan_doan' => 'Chẩn Đoán Hai',
            'cach_phong' => 'Cách Phòng Hai',
            'nguyen_nhan' => 'Nguyên Nhân Hai',
            'dieu_tri' => 'Điều Trị Hai',
            'ma_khoa' => '2',
            'ma_hinh_anh' => '22',
            'ma_bac_si' => '2',
        ]);
        DB::table('benh')->insert([
            'ma_benh' => '3',
            'ten_benh' => 'Bệnh Ba',
            'chuan_doan' => 'Chẩn Đoán Ba',
            'cach_phong' => 'Cách Phòng Bốn',
            'nguyen_nhan' => 'Nguyên Nhân Bốn',
            'dieu_tri' => 'Điều Trị Bốn',
            'ma_khoa' => '3',
            'ma_hinh_anh' => '23',
            'ma_bac_si' => '3',
        ]);
        DB::table('benh')->insert([
            'ma_benh' => '4',
            'ten_benh' => 'Bệnh Bốn',
            'chuan_doan' => 'Chẩn Đoán Bốn',
            'cach_phong' => 'Cách Phòng Bốn',
            'nguyen_nhan' => 'Nguyên Nhân Bốn',
            'dieu_tri' => 'Điều Trị Bốn',
            'ma_khoa' => '4',
            'ma_hinh_anh' => '24',
            'ma_bac_si' => '4',
        ]);
        DB::table('benh')->insert([
            'ma_benh' => '5',
            'ten_benh' => 'Bệnh Năm',
            'chuan_doan' => 'Chẩn Đoán Năm',
            'cach_phong' => 'Cách Phòng Năm',
            'nguyen_nhan' => 'Nguyên Nhân Năm',
            'dieu_tri' => 'Điều Trị Năm',
            'ma_khoa' => '5',
            'ma_hinh_anh' => '25',
            'ma_bac_si' => '5',
        ]);
    }
}
