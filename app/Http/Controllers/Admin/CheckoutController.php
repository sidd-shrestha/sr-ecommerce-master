<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Groups;
use App\Models\Order;
use App\Models\OrderItems;
use App\Models\Product;
use App\Models\UserDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = Groups::all();
        $user_details = UserDetails::all();
        $old_cartItems = Cart::where(
            'user_id',
            Auth::guard('web')->user()->id
        )->get();
        foreach ($old_cartItems as $old_cartItems) {
            if (
                !Product::where('id', $old_cartItems->product_id)
                    ->where(
                        'product_quantity',
                        '>=',
                        $old_cartItems->product_quantity
                    )
                    ->exists()
            ) {
                $removeItem = Cart::where(
                    'user_id',
                    Auth::guard('web')->user()->id
                )
                    ->where('product_id', $old_cartItems->product_id)
                    ->first();
                $removeItem->delete();
            }
        }
        $cartItems = Cart::where(
            'user_id',
            Auth::guard('web')->user()->id
        )->get();

        return view(
            'dashboard.user.checkout.index',
            compact('groups', 'cartItems', 'user_details')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    function placeOrder(Request $request)
    {
        $order = new Order();
        $order->user_id = Auth::guard('web')->user()->id;
        $order->first_name = $request->input('first_name');
        $order->last_name = $request->input('last_name');
        $order->country = $request->input('country');
        $order->contact = $request->input('contact');
        $order->city = $request->input('city');
        $order->postal_code = $request->input('postal_code');
        // $order->payment_id= $request->input('payment_id');
        // $order->payment_mode= $request->input('payment_mode');
        // $order->status= $request->input('status');
        // $order->message= $request->input('message');
        $total = 0;
        $cartItems_total = Cart::where(
            'user_id',
            Auth::guard('web')->user()->id
        )->get();
        foreach ($cartItems_total as $product) {
            $total += $product->products->product_price;
        }
        $order->total_price = $total;
        $order->tracking_no = 'sharma' . rand(1111, 9999);
        $order->save();
        $cartItems = Cart::where(
            'user_id',
            Auth::guard('web')->user()->id
        )->get();

        foreach ($cartItems as $cartItems) {
            OrderItems::create([
                'order_id' => $order->id,
                'product_id' => $cartItems->product_id,
                'product_quantity' => $cartItems->product_quantity,
                'product_price' => $cartItems->products->product_price,
            ]);
        }
        $cartItems = Cart::where('user_id',  Auth::guard('web')->user()->id)->get();
        Cart::destroy($cartItems);
        if ($request->input('payment_mode') == "Paid by Razorpay") {
            return response()->json(['status', 'Order Placed Successfully']);
        }
        return redirect('user/view_cart')->with('status', 'Order Placed Successfully');
    }
}
