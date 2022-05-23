<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class CustomerController extends Controller
{
    public function index()
    {
        $roles = Role::all()->pluck('name')->toArray();

        $users = array();
        if(in_array('Customer', $roles)) {
            $users = User::role('Customer')->get();
        }

        return view('admin.customers.index', compact('users'));
    }
}
