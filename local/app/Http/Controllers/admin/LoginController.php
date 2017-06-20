<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use DB;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    //
	public function getLogin(){
		return view('pages.login');
	}
	public function postLogin(Request $request){
		$rules=[
		'user'=>'required',
		'pass'=>'required',
		];

		$messages=[
		'user.required'=>'Vui lòng nhập tên đăng nhập',
		'pass.required'=>'Vui lòng nhập mật khẩu',
		];

		$validation = Validator::make($request->all(),$rules,$messages);

		if($validation->fails()){
			return redirect()->back()->withErrors($validation)->withInput();
		}
		else{
			$info_user= DB::table("nguoi_dung")->where("ten_nguoi_dung",$request->get('user'))->first();

			$arr=['ten_nguoi_dung'=>$request->get('user'),'mat_khau'=>$request->get('pass')];
			if(DB::table('nguoi_dung')->where($arr)->count()==1){
				Session::put('nguoi_dung', $info_user->ten_nguoi_dung);

				return view('pages.index')->with("info_user",Session::get('nguoi_dung'));
			}
			else{
				$errorlogin = new MessageBag(['errorlogin'=>'Tên đăng nhập hoặc mật khẩu không đúng']);
				return redirect()->back()->withErrors($errorlogin)->withInput();

			}
		}
	}
	public function getLogout(){
		Session::forget('nguoi_dung');
		return redirect()->back();

	}
	public function postRegister(Request $request){
		$rules=[
		'username'=>'required',
		'psw'=>'required|min:8',
		'phone'=>'required',
		'email'=>'required|email',

		];

		$messages=[
		'username.required'=>'Vui lòng nhập tên của bạn',
		'psw.required'=>'Vui lòng nhập mật khẩu',
		'psw.min'=>'Mật khẩu phải trên 8 kí tự',
		'phone.required'=>'Vui lòng nhập số điện thoại',
		'email.required'=>'Vui lòng nhập email',
		'email.email'=>'Email không hợp lệ'
		];
		$validation = Validator::make($request->all(),$rules,$messages);
		if($validation->fails()){
			return redirect()->back()->withErrors($validation)->withInput();
		}
		else{
			dd('đăng kí thành công');
		}
	}
}