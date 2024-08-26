<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use PayMob\Facades\PayMob;

class CheckoutController extends Controller
{
    protected $paymobController;

    public function __construct(PaymobController $paymobController)
    {
        $this->paymobController = $paymobController;
    }
    public function index(Request $request)
    {

        $order = Order::latest()->first();

        $order_price = $order->total_price;
        $order_id =$order -> id; 
        
        
        $PaymentKey = $this->paymobController->pay($order_price ,$order_id );

        return view('paymob')->with('token' , $PaymentKey);
    }

    public function ProcessCheckout(Request $request)
    {
        $request_hmac = $request->hmac;
        $calc_hmac = PayMob::calcHMAC($request);

    if ($request_hmac == $calc_hmac) {
        $order_id = $request->obj['order']['merchant_order_id'];
        $amount_cents = $request->obj['amount_cents'];
        $transaction_id = $request->obj['id'];

        $order = Order::find($order_id)->last();

        if ($request->obj['success'] == true && ($order->total_price * 100) == $amount_cents) {
            $order->update([
                'transaction_status' => 'finished',
                'transaction_id' => $transaction_id
            ]);
        } else {
            $order->update([
                'payment_status' => "failed",
                'transaction_id' => $transaction_id
            ]);
        }
    }
}

}
