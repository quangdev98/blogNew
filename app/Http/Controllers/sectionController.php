<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sectionController extends Controller
{
    public function getIndex(){
    	return view('view_web/index');
    }
    public function getContact(){
    	return view('view_web/contact');
    }
    public function getAboutUs(){
    	return view('view_web/about-us');
    }
    public function getPostLayout(){
    	return view('view_web/post-layout-five');
    }
    public function getPostFormat(){
    	return view('view_web/post-format');
    }
    public function getAuthor(){
    	return view('view_web/author');
    }
    public function getBusiness(){
    	return view('view_web/business');
    }
    public function getLifeStyle(){
    	return view('view_web/lifestyle');
    }
    public function getTechnology(){
    	return view('view_web/technology');
    }
     public function getSports(){
    	return view('view_web/sports');
    }
     public function getTeam(){
    	return view('view_web/team');
    }
    public function getPostFormatStandard(){
    	return view('view_web/post-format-standard');
    }
     public function getPostFormatVideo(){
    	return view('view_web/post-format-video');
    }
     public function getError(){
    	return view('view_web/errors.404');
    }
     public function getConstruction(){
    	return view('view_web/under-construction');
    }
    
}