<?php

namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index(){
        $events=DB::table('events')->get();
        return view('index',['events'=>$events]);
    }
    public function save_cart(Request $request){
        
        $eventId=$request->eventid_hidden;
        $ngay=$request->ngay;
        $quantity=$request->quantity;
        $hoten=$request->ho_ten;
        $sodienthoai=$request->so_dien_thoai;
        $email=$request->email;
        
        
        $event_info=DB::table('events')->where('id',$eventId)->first();
        $data['id']=$event_info->id;
        $data['qty']=$quantity;
        $data['name']=$event_info->title;
        $data['price']=$event_info->price;
        $data['weight']=$event_info->price;
        $data['options']['date']=$ngay;
        $data['options']['ho_ten']=$hoten;
        $data['options']['so_dien_thoai']=$sodienthoai;
        $data['options']['email']=$email;
        Cart::add($data);
        
        // $cart=Cart::content();
        // foreach($cart as $c){

        // }
        // dd($c);
        return Redirect::to('/thanh-toan');
    }
    public function thanh_toan(){
        return view('thanhtoan');
    }
}
