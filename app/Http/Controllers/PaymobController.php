<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use PayMob\Facades\PayMob;

class PaymobController extends Controller
{
    public function pay($total ,$cart_id)
    {
        $auth = PayMob::AuthenticationRequest();
        $order = PayMob::OrderRegistrationAPI([
            'auth_token' => $auth->token,
            'amount_cents' => $total * 100, //put your price
            'currency' => 'EGP',
            'delivery_needed' => false, // another option true
            'merchant_order_id' => $cart_id, //put order id from your database must be unique id
            'items' => [] // all items information or leave it empty
        ]);

        $PaymentKey = PayMob::PaymentKeyRequest([
            'auth_token' => $auth->token,
            'amount_cents' => 150 * 100, //put your price
            'currency' => 'EGP',
            'order_id' =>  $order-> id,
            "billing_data" => [ // put your client information
                "apartment" => "803",
                "email" => "",
                "floor" => "42",
                "first_name" => "",
                "street" => "Ethan Land",
                "building" => "8028",
                "phone_number" => "01061600404",
                "shipping_method" => "PKG",
                "postal_code" => "01898",
                "city" => "Jaskolskiburgh",
                "country" => "CR",
                "last_name" => "Nicolas",
                "state" => "Utah"
            ]
        ]);

        return $PaymentKey->token;

    } 
}
