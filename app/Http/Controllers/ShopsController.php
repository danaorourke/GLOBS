<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Shop;

class ShopsController extends Controller
{
    // list all shops
    public function index() {
      $shops = Shop::all();
      return view('shops/list',compact('shops'));
    }
    
    // list individual shop
    public function shop($id) {
      $shop = Shop::findOrFail($id);
      return view('shops/shop',compact('shop'));
    }
    
    // confirm order
    public function order($id) {
      $shop = Shop::findOrFail($id);
      return view('shops/order',compact('shop'));
    }
}
