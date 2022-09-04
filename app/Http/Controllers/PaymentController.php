<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Session;
use Redirect;
use Illuminate\Support\Facades\Auth;
class PaymentController extends Controller
{
function razorpaycheck(Request $request){
    $cartItems = Cart::where('user_id',   Auth::guard('web')->user()->id)->get();
    $total_price = 0;
    foreach($cartItems  as $item){
        $total_price  += $item->products->offer_price * $item->product_quantity;
    }
    $first_name = $request->input('first_name');
     $last_name =$request->input('last_name');
     $country=$request->input('country');
     $address=$request->input('address');
     $contact=$request->input('contact');
     $city=$request->input('city');
     $postal_code=$request->input('postal_code');
     return response()->json([
        'first_name' => $first_name,
        'last_name' =>$last_name,
        'country'=>$country,
        'address'=>$address,
        'contact'=>$contact,
        'city'=>$city,
        'postal_code'=>$postal_code,
        'total_price'=>$total_price,
     ]);
}
    // public function razorpay()
    // {
    //     return view('dashboard.user.payment.index');
    // }

    // public function payment(Request $request)
    // {
    //     $input = $request->all();
    //     $api = new Api(env('rzp_test_uPYoLKAtPRXOxz'), env('cpGrrupQLUNbRi1CLAXIr2dF'));
    //     $payment = $api->payment->fetch($input['razorpay_payment_id']);

    //     if(count($input)  && !empty($input['razorpay_payment_id']))
    //     {
    //         try
    //         {
    //             $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount']));

    //         }
    //         catch (\Exception $e)
    //         {
    //             return  $e->getMessage();
    //             SessionSession::put('error',$e->getMessage());
    //             return redirect()->back();
    //         }
    //     }

    //     SessionSession::put('success', 'Payment successful, your order will be despatched in the next 48 hours.');
    //     return redirect()->back();
    // }
}
