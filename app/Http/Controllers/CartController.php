<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
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


                    return redirect()->route('courses')->with('success','Course added to cart successfully');
                }

                else
                {
                    return redirect()->route('courses')->with('error','Course already added and there');

                }
            }

    
    public function index(Course $course)
    {

        $course = Course::all();

        $cartItems = Cart::where('user_id', auth()->user()->id)
            ->with('course')
            ->get();

        $cartcount = Cart::count();


        
        $sum_total = $cartItems->sum(function ($cartItem) {
            return $cartItem->course-> Price;  
        });

        $total_price = Order::create([
            'total_price' => $sum_total
        ]);

        $final_total = $total_price ->total_price;


        return view('Cart', compact('cartItems','course','cartcount','sum_total'));
    }

    public function remove(Cart $cart)
    {
        $cart->delete();
        return redirect()->route('cart.index')->with('success','Item deleted successfully');
    }
}
