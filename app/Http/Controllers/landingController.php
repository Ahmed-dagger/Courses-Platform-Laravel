<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;

class landingController extends Controller
{
 

    public function Landing(){


        //$cartcount = Cart::where('user_id' ,auth()->user()->id)->count();

        return view('home');
    }
}
