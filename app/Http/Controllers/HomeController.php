<?php

namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function save_cart(Request $request){
        Cart::add('293ad', 'Product 1', 1, 9.99, 550, ['size' => 'large']);
        $cart=Cart::content();
        foreach($cart as $c){

        }
        // dd($c);
        return Redirect::to('/thanh-toan');
    }
    public function thanh_toan(){
        return view('thanhtoan');
    }
}
