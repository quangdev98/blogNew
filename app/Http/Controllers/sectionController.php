<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sectionController extends Controller
{
    public function getIndex(){
    	return view('index');
    }
    public function getContact(){
    	return view('contact');
    }
    public function getAboutUs(){
    	return view('about-us');
    }
    public function getPostLayout(){
    	return view('post-layout-five');
    }
    public function getPostFormat(){
    	return view('post-format');
    }
    public function getAuthor(){
    	return view('author');
    }
    public function getBusiness(){
    	return view('business');
    }
    public function getLifeStyle(){
    	return view('lifestyle');
    }
    public function getTechnology(){
    	return view('technology');
    }
     public function getSports(){
    	return view('sports');
    }
     public function getTeam(){
    	return view('team');
    }
    public function getPostFormatStandard(){
    	return view('post-format-standard');
    }
     public function getPostFormatVideo(){
    	return view('post-format-video');
    }
     public function getError(){
    	return view('errors.404');
    }
     public function getConstruction(){
    	return view('under-construction');
    }
    
}