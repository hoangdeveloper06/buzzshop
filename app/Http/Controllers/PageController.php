<?php

namespace App\Http\Controllers;
use App\Slide;
use App\Product;
use App\Category;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function getIndex(){
        $slide = Slide::all();
        $banner_category = Category::where('hot','=','1')->take(3)->get();
        $top_sale = Product::all();
        $home_new = Product::where('new','=','1')->get();
        return view('page.home',['slide'=>$slide, 'banner_category' => $banner_category, 'top_sale'=>$top_sale, 'home_new'=>$home_new]);
    }
    public function getAbout(){
        
        return view('page.about');
    }
    
    public function getProduct(){
        $product = Product::all();
        return view('page.products',['product'=>$product]);
    }

    public function getProductDetail(Request $request){
        $productbyid = Product::where('id', $request->id)->first();
        return view('page.productdetail',['productbyid'=>$productbyid]);
    }
    
    public function getCategory($type){
        $category_shop = Product::where('category_id', $type)->get();
        $category_product = Category::all();
        $category_type = Category::where('id',$type)->first();
        $product_feature = Product::where('new','=','1')->get();
        return view('page.category-product', ['category_product'=>$category_product, 'category_type'=>$category_type, 'category_shop'=>$category_shop,'product_feature'=>$product_feature]);
    }

    public function getContact(){
        return view('page.contact');
    }
    public function getNew(){
        return view('page.news');
    }
}
