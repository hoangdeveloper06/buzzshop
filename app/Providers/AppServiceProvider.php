<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Category;
use App\Cart;
use Illuminate\Support\Facades\Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer('header',function($view){
            $category_type = Category::all();
            
            $view -> with(['category_type'=>$category_type]);  
        });
        view()->composer('header',function($view){
            if(Session::has('cart')){
                $oldCart = Session::get('cart');
                $cart = new Cart($oldCart);
                $view->with(['cart' => Session::get('cart'),
                'CartItem'=>$cart->items, 'totalPrice'=>$cart->totalPrice,
                'totalQty'=>$cart->totalQty,
                ]);
            }
        });
    }
}
