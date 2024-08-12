<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request, Course $course)
    {
        $cart = Cart::where('user_id', auth()->user()->id)
            ->where('course_id', $course->id)
            ->first();

            if (!$cart) {

                Cart::create([
                    'user_id' => auth()->user()->id,
                    'course_id' => $course->id,
                ]);
            }


       

        return redirect()->route('courses')->with('success','Item Added successfully');

       
    }

    public function index(Course $course)
    {

        $course = Course::all();

        $cartItems = Cart::where('user_id', auth()->user()->id)
            ->with('course')
            ->get();

        $cartcount = Cart::count();
        return view('Cart', compact('cartItems','course','cartcount'));
    }

    public function remove(Cart $cart)
    {
        $cart->delete();
        return redirect()->route('cart.index');
    }
}
