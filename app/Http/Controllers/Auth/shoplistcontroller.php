<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoplistController extends Controller
{
    public function wishlist(){
        $data = Shoplist::all();
        return view('wishlist', ['Shoplist' => $data]);
    }
}