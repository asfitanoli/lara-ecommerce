<?php

namespace App\Http\Controllers;

use App\Mail\OrderPlaced;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    public function index()
    {
        $cartItems = \Cart::getContent();
        return view('checkout.index', compact('cartItems'));
    }

    public function store(Request $request)
    {
        $order = Order::saveOrders($request);
        Mail::send(new OrderPlaced($order));

        return redirect()->route('thankyou.index');
    }
}
