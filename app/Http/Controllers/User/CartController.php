<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Groups;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPUnit\TextUI\XmlConfiguration\Group;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $cartItem= Cart::where('user_id',Auth::guard('web')->user()->id)->get();
        $groups=Groups::all();
        return view('dashboard.user.cart.index',compact('cartItem','groups'));
    }
function addProduct(Request $request){
    $product_id = $request->input('product_id');
    $product_quantity = $request->input('product_quantity');

    $product_check = Product::where('id',$product_id)->first();
    if($product_check){
        if(Cart::where('product_id',$product_id)->where('user_id',Auth::guard('web')->user()->id)->exists()){
            return response()->json(['status'=> $product_check->name." Already added to cart"]);
        }
        else{
            $cartItem = new Cart();
            $cartItem->product_id= $product_id;

            $cartItem->user_id = Auth::guard('web')->user()->id;
            $cartItem->product_quantity= $product_quantity;
            $cartItem->save();
            return response()->json(['status'=> $product_check->product_name." Added to cart"]);
            // return response()->json(['status'=>200,'message'=> 'Added to cart']);
        }

    }
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
    public function update(Request $request)

    {
      $product_id= $request->input('product_id');
      $product_quantity= $request->input('product_quantity');
      if(Cart::where('product_id',$product_id)->where('user_id',Auth::guard('web')->user()->id)->first()){
        $cartItem= Cart::where('product_id',$product_id)->where('user_id',Auth::guard('web')->user()->id)->first();
        $cartItem->product_quantity = $product_quantity;
        $cartItem->update();

        return response()->json(['status'=>" Item Updated Succesfully"]);
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $product_id= $request->input('product_id');
        if(Cart::where('product_id',$product_id)->where('user_id',Auth::guard('web')->user()->id)->first()){
            $cartItem= Cart::where('product_id',$product_id)->where('user_id',Auth::guard('web')->user()->id)->first();
            $cartItem->delete();
            return response()->json(['status'=>" Item Deleted Succesfully"]);
        }


    }
    function cartcount(){
        $cartcount = Cart::where('user_id',Auth::guard('web')->user()->id)->count();
        return response()->json(['count'=>$cartcount]);
    }
}
