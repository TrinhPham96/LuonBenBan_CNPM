<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyFirstController extends Controller
{
    
  
    public function getIndex(){
    	return  view('pages.index');
    }

    public function getSearch(){
    	return view('pages.search');
    }

    public function getSpecialList(){
    	return view('pages.specialList');
    }

    public function getSpecialDetail($tenKhoa){
    	$data['tenKhoa'] = $tenKhoa;
    	return view('pages.specialDetail', $data);
    }
    public function getHelp(){
    	return view('pages.help');
    }
   public function getLogin(){
   	return view('pages.login');
   }
}
