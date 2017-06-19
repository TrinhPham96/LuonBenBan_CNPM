<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyFirstController extends Controller
{
    
  
    public function getIndex(){
    	return  view('pages.index');
    }
<<<<<<< HEAD
    public function getListDoctor(){
    	return view('pages.listDoctor');
    }
    public function getDetailsDoctor(){
    	return view ('pages.detailsDoctor');
=======
    public function getSearch(){
    	return view('pages.search');
>>>>>>> master
    }
}
