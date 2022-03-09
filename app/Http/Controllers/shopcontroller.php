<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class shopcontroller extends Controller
{
    public function ss(){
        return view ('shop');
    }

    public function sd(){
        return view('shopdetail');
    }

    public function c(){
        return view ('cart');
    }

    public function co(){
        return view('checkout');
    }

    public function ma(){
        return view ('myaccount');
    }

    public function w(){
        return view('wishlist');
    }
}
