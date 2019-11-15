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
}
