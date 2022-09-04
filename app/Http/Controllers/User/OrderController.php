<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Groups;
use App\Models\Order;
use App\Models\OrderItems;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
class OrderController extends Controller
{
  function viewOrders(){
    $groups=Groups::all();
      $order  = Order::where('user_id',  Auth::guard('web')->user()->id)->get();
      // $orderItems  = OrderItems::all();
      return view('dashboard.user.order.index',compact('groups','order',));
  }
}
