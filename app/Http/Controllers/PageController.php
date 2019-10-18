<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function getIndex(){
        return view('page.home');
    }
    public function getAbout(){
        return view('page.about');
    }
    public function getCategory(){
        return view('page.categories');
    }
    public function getContact(){
        return view('page.contact');
    }
    public function getNew(){
        return view('page.news');
    }
}
