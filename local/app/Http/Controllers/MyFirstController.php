<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyFirstController extends Controller
{
    
  
    public function getIndex(){
    	return  view('pages.index');
    }

    public function getListDoctor(){
    	return view('pages.listDoctor');
    }
// <<<<<<< HEAD
    public function getDetailsDoctor(){
    	return view ('pages.detailsDoctor');


    }
      public function getConfirmRequest(){
        return view ('pages.confirmRequest');


    }
    

// =======
    public function getHelp(){
    	return view('pages.help');
    }
   public function getLogin(){
   	return view('pages.login');
   }
// >>>>>>> beo
}
