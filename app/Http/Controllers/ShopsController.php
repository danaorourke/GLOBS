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
    public function order(Request $request, $id) {
      $shop = Shop::findOrFail($id);
      
      $itemCount = $shop->items->count();
      $rules = [];
      for ($i = 0; $i <= $itemCount; $i++) {
        $rules[$i+1] = 'numeric';
      }
      $validatedData = $request->validate($rules);
      
      return view('shops/order',compact('shop', 'validatedData'));
    }
}
