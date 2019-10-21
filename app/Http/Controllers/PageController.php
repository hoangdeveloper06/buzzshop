<?php

namespace App\Http\Controllers;
use App\Slide;
use App\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function getIndex(){
        $slide = Slide::all();
        $top_sale = Product::all();
        return view('page.home',['slide'=>$slide, 'top_sale'=>$top_sale]);
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
