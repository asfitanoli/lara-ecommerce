<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\OrderApproved;
use App\Mail\OrderPlaced;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $orders = Order::all();

        return view('admin.orders.index', compact('orders'));
    }

    public function view($id)
    {
        $roles = Auth::user()->getRoleNames()->toArray();

        if (in_array('Customer', $roles)) {
            $userId = auth()->user()->id;

            $order = Order::where('user_id', '=', $userId)->where('id', '=', $id)->first();

        } else {

            $order = Order::findOrFail($id);
        }

        return view('admin.orders.view', compact('order'));
    }

    public function orderApprove($id)
    {
        $order = Order::find($id);
        if($order->shipped) {
            return response()->json(['status'=>'ALREADY_APPROVED']);
        }
        $order->shipped = true;
        $order->save();

        Mail::send(new OrderApproved($order));

        return response()->json(['status'=>'SUCCESS']);
    }
}
