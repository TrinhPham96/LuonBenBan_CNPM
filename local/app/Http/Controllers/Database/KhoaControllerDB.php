<?php

namespace App\Http\Controllers\Database;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class KhoaControllerDB extends Controller
{
    //
    public function insertData(){
    	DB::table('khoa')->insert
    	(['ma_khoa' => '1', 'ten_khoa' => 'Khoa sản', 'ma_hinh_anh' => 'wallhaven-12018.jpg']);
    }
	

}
