<?php

use Illuminate\Database\Seeder;

class TracNghiem extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
    	DB::table('trac_nghiem')->insert([
            'ma_cau' => '1',
            'noi_dung' => 'Trắc Nghiệm 1',
            'ma_dap_an' => '1',
            'dap_an' => 'Đáp Án 1',
            'ma_benh' => '1',
            'ma_hinh_anh' => '31',
        ]);
        DB::table('trac_nghiem')->insert([
            'ma_cau' => '2',
            'noi_dung' => 'Trắc Nghiệm 2',
            'ma_dap_an' => '2',
            'dap_an' => 'Đáp Án 2',
            'ma_benh' => '2',
            'ma_hinh_anh' => '32',
        ]);
        DB::table('trac_nghiem')->insert([
            'ma_cau' => '3',
            'noi_dung' => 'Trắc Nghiệm 3',
            'ma_dap_an' => '3',
            'dap_an' => 'Đáp Án 3',
            'ma_benh' => '3',
            'ma_hinh_anh' => '33',
        ]);
        DB::table('trac_nghiem')->insert([
            'ma_cau' => '4',
            'noi_dung' => 'Trắc Nghiệm 4',
            'ma_dap_an' => '4',
            'dap_an' => 'Đáp Án 4',
            'ma_benh' => '4',
            'ma_hinh_anh' => '34',
        ]);
        DB::table('trac_nghiem')->insert([
            'ma_cau' => '5',
            'noi_dung' => 'Trắc Nghiệm 5',
            'ma_dap_an' => '5',
            'dap_an' => 'Đáp Án 5',
            'ma_benh' => '5',
            'ma_hinh_anh' => '35',
        ]);
    }
}
