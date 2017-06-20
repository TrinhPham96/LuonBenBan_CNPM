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
    public function getHelp(){
    	return view('pages.help');
    }
   public function getLogin(){
   	return view('pages.login');
   }
}
