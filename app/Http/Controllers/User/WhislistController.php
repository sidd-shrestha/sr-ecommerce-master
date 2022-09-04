<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Whishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class WhislistController extends Controller
{
    function index(){
        $category = Category::all();
        $whishlist = Whishlist::where('user_id',Auth::guard('web')->user()->id)->get();
        return view('dashboard.user.whishlist.index',compact('category','whishlist'));
    }
    function add_to_whislist(Request $request){
        $product_id = $request->input('product_id');
        $product_check = Product::where('id',$product_id)->first();
        if(Whishlist::where('product_id',$product_id)->where('user_id',Auth::guard('web')->user()->id)->exists()){
            return response()->json(['status'=> $product_check->name." Already added to cart"]);
        }
        elseif(Product::find($product_id)){
            $whish = new Whishlist();
            $whish->product_id = $product_id;
            $whish->user_id= Auth::guard('web')->user()->id;
            $whish->save();
            return response()->json(['status'=>"Product added to whishlist"]);
        }
        else{
            return response()->json(['status'=>"Product Doesnot exists"]);
        }
    }
    function delete_wishlist(Request $request){
        $product_id= $request->input('product_id');
        if(Whishlist::where('product_id',$product_id)->where('user_id',Auth::guard('web')->user()->id)->first()){
            $whishlist= Whishlist::where('product_id',$product_id)->where('user_id',Auth::guard('web')->user()->id)->first();
            $whishlist->delete();
            return response()->json(['status'=>" Item Deleted Succesfully"]);
        }

    }
    function whislist_count(){
        $whislist_count = Whishlist::where('user_id',Auth::guard('web')->user()->id)->count();
        return response()->json(['success'=>$whislist_count]);
        return Response::make("status", 204);
    }
}
