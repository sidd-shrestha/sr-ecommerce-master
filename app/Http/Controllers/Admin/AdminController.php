<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function check(Request $request)
    {
        //Validate Inputs
        $request->validate(
            [
                'email' => 'required|email|exists:admins,email',
                'password' => 'required|min:5|max:30',
            ],
            [
                'email.exists' => 'This email is not exists in admins table',
            ]
        );

        $creds = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($creds)) {
            return redirect()->route('admin.home');
        } else {
            return redirect()
                ->route('admin.login')
                ->with('fail', 'Incorrect credentials');
        }
    }

    function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
    function order()
    {
        $order = Order::all();
        $orderItems = OrderItems::all();
        return view('dashboard.admin.order.index', compact('orderItems', 'order'));
    }
}
