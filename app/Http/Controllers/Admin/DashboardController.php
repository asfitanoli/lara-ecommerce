<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $roles = Auth::user()->getRoleNames()->toArray();

        if(in_array('Customer', $roles))
        {
            $userId = auth()->user()->id;

            $orders = Order::where('user_id','=', $userId)->get();

            return view('admin.customer_dashboard', compact('orders'));
        } else {

            return view('admin.dashboard');
        }
    }
}
