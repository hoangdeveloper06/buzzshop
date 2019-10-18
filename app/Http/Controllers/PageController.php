<?php

namespace App\Http\Controllers;
use App\Slide;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function getIndex(){
        $slide = Slide::all();
        return view('page.home',compact('slide'));
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
