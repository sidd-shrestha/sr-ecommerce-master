<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Groups;
use App\Models\Product;
use App\Models\SubCategories;
use Illuminate\Http\Request;
use Image;

class ProductController extends Controller
{
    function index()
    {
        $product = Product::all();
        // $product = response()->json(['products' => $res], 200);
        // return view('dashboard.admin.product.index', ['products' => $res], compact('product'));
        return view('dashboard.admin.product.index', compact('product'));
    }
    function indexes()
    {
        $product = Product::all();
        return response()->json(['product' => $product], 200);
    }

    function add_product()
    {
        $sub_category = SubCategories::all();
        $sub_category_brand = SubCategories::all();

        return view(
            'dashboard.admin.product.add_product',
            compact('sub_category', 'sub_category_brand')
        );
    }
    function create_product(Request $request)
    {
        //Validate Inputs
        // $request->validate([
        //     'product_code' => 'required',
        //     'product_name' => 'required',
        //     'product_quantity' => 'required',
        //     'product_price' => 'required',
        //     'product_description' => 'required',
        //     'product_image' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',

        // ]);

        $product = new Product();
        $product->subcategory_id = $request->subcategory_id;
        $product->product_code = $request->product_code;
        // $product->brand_type = $request->brand_type;
        $product->product_name = $request->product_name;
        $product->sale_tag = $request->sale_tag;
        $product->offer_price = $request->offer_price;
        $product->meta_title = $request->meta_title;
        $product->meta_description = $request->meta_description;
        $product->meta_keyword = $request->meta_keyword;
        $product->slug = $request->slug;
        $product->product_quantity = $request->product_quantity;
        $product->product_price = $request->product_price;
        $product->product_description = $request->product_description;
        $product->status = $request->input('status') == TRUE ? '1' : '0';
        $product->trending = $request->input('trending') == TRUE ? '1' : '0';
        $product->new_arrival_products = $request->input('new_arrival_products') == TRUE ? '1' : '0';
        $product->featured_products = $request->input('featured_products') == TRUE ? '1' : '0';
        $product->offer_products = $request->input('offer_products') == TRUE ? '1' : '0';
        if ($request->hasfile('product_image')) {
            $file = $request->file('product_image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/product/', $filename);
            $product->product_image = $filename;
        }
        $save = $product->save();

        if ($save) {
            return redirect()
                ->route('admin.product')
                ->with('success', 'Product has been added successfully');
        } else {
            return redirect()
                ->back()
                ->with('fail', 'Something went wrong, failed to add product');
        }
    }
    function edit($id)
    {
        $product = Product::find($id);
        $sub_category = SubCategories::all();
        return view('dashboard.admin.product.edit_product', compact('product', 'sub_category'));
    }
    function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->subcategory_id = $request->subcategory_id;
        $product->product_code = $request->product_code;
        // $product->brand_type = $request->brand_type;
        $product->product_name = $request->product_name;
        $product->category_id = $request->category_id;
        $product->sale_tag = $request->sale_tag;
        $product->offer_price = $request->offer_price;
        $product->meta_title = $request->meta_title;
        $product->meta_description = $request->meta_description;
        $product->meta_keyword = $request->meta_keyword;
        $product->slug = $request->slug;
        $product->product_quantity = $request->product_quantity;
        $product->product_price = $request->product_price;
        $product->product_description = $request->product_description;
        $product->status = $request->input('status') == TRUE ? '1' : '0';
        $product->trending = $request->input('trending') == TRUE ? '1' : '0';
        $product->new_arrival_products = $request->input('new_arrival_products') == TRUE ? '1' : '0';
        $product->featured_products = $request->input('featured_products') == TRUE ? '1' : '0';
        if ($request->hasfile('product_image')) {
            $file = $request->file('product_image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/product/', $filename);
            $product->product_image = $filename;
        }
        $update = $product->update();

        if ($update) {
            return redirect()
                ->route('admin.product')
                ->with('success', 'Product has been updated successfully');
        } else {
            return redirect()
                ->back()
                ->with('fail', 'Something went wrong, failed to add product');
        }
    }
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back()->with('success', 'Product Deleted Successfully');
    }
    function viewProduct()
    {
        $groups = Groups::all();
        $product = Product::all();
        return response()->json(['group' => $groups, 'products' => $product], 200);
        return view('dashboard.user.products.view', compact('product', 'groups'));
    }
}


// function viewProduct($sub_category_slug){
//     $category = Category::all();
//     $product= Product::all();
//     $sub_category= SubCategories::where('slug',$sub_category_slug)->first();
//     $sub_category_id =$sub_category->id;
//     if(Request::get('sort') == 'price_asc'){
//         $products = Product::where('subcategory_id',$sub_category_id)
//         ->orderBy('offer_price','asc')
//         // ->where('status','!=','2') 2 means deleted
//         ->where('status','0')->get();
//     }
//     elseif(Request::get('sort') == 'price_desc'){
//         $products = Product::where('subcategory_id',$sub_category_id)
//         ->orderBy('offer_price','desc')
//       // ->where('status','!=','2') 2 means deleted
//         ->where('status','0')->get();
//     }
//     elseif(Request::get('sort') == 'newest'){
//         $products = Product::where('subcategory_id',$sub_category_id)
//         ->orderBy('created_at','desc')
//       // ->where('status','!=','2') 2 means deleted
//         ->where('status','0')->get();
//     }
//     elseif(Request::get('sort') == 'popularity'){
//         $products = Product::where('subcategory_id',$sub_category_id)
//         ->orderBy('popular','1')
//       // ->where('status','!=','2') 2 means deleted
//         ->where('status','0')->get();
//     }
// else{
// $products = Product::where('status','!=','2')->where('status','0')->get();
// }
//     return view('dashboard.user.products.view',compact('product','category'));
// }
