<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyFirstController extends Controller
{
    
  
    public function getIndex(){
    	return  view('pages.index');
    }

<<<<<<< HEAD
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

=======
    public function getListDoctor(){
    	return view('pages.listDoctor');
    }

>>>>>>> beo
    public function getHelp(){
    	return view('pages.help');
    }

<<<<<<< HEAD
    public function getLogin(){
        return view('pages.login');
    }

    public function getContact(){
        return view('pages.contact');
    }

    public function getQuiz(){
        return view('pages.quiz');
    }
=======
    public function getDetailsDoctor(){
    	return view ('pages.detailsDoctor');


    }
      public function getConfirmRequest(){
        return view ('pages.confirmRequest');


    }
    public function getSearch(){
        return view('pages.search');
    }
    public function getSick(){

        return view('pages.sick');
    }
    

>>>>>>> beo
}
