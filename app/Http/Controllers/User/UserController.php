<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Groups;
use App\Models\Product;
use App\Models\SubCategories;
use App\Models\User;
use App\Models\UserDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use PHPUnit\TextUI\XmlConfiguration\Group;

class UserController extends Controller
{
    function create(Request $request)
    {
        //Validate Inputs
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:5|max:30',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $save = $user->save();

        if ($save) {
            return redirect()
                ->back()
                ->with('success', 'You are now registered successfully');
        } else {
            return redirect()
                ->back()
                ->with('fail', 'Something went wrong, failed to register');
        }
    }
    function check(Request $request)
    {
        //Validate inputs
        $request->validate(
            [
                'email' => 'required|email|exists:users,email',
                'password' => 'required|min:5|max:30',
            ],
            [
                'email.exists' => 'This email is not exists on users table',
            ]
        );

        $creds = $request->only('email', 'password');
        if (Auth::guard('web')->attempt($creds)) {
            return redirect()->route('user.home');
        } else {
            return redirect()
                ->route('user.login')
                ->with('fail', 'Incorrect credentials');
        }
    }
    function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('user.login');
    }
    function home()
    {
        // $category = Category::all();
        $products = Product::all();
        $subcategory = SubCategories::all();
        $groups = Groups::all();
        $trending = Product::where('trending', '1')
            ->take(15)
            ->get();

        return view(
            'dashboard.user.home',
            compact('products', 'trending', 'subcategory', 'groups')
        );
    }

    function view_category($slug)
    {
        if (Groups::where('slug', $slug)->exists()) {
            $groups = Groups::where('slug', $slug)->first();
            $category = Category::where('groups_id', $groups->id)
                ->where('status', '1')
                ->get();

            return view(
                'dashboard.user.group.index',
                compact('category', 'groups'),
            );
        }
    }
    function viewcategory($slug, $categories_slug)
    {
        if (Groups::where('slug', $slug)->exists()) {
            if (Category::where('slug', $categories_slug)->exists()) {

                $categories = Category::where('slug', $categories_slug)->first();
                $subcategory = SubCategories::where('category_id', $categories->id)
                    ->where('status', '1')
                    ->get();

                $groups = Groups::all();
                return view('dashboard.user.subcategory.view', compact('categories', 'groups', 'subcategory'));
            } else {
                return redirect('/')->with('fail', 'Unable to redirect');
            }
        } else {
            return redirect('/')->with('fail', 'Unable to redirect');
        }
    }

    function view_subcategory($categories_slug, $sub_category_slug)
    {

        if (Category::where('slug', $categories_slug)->exists()) {
            if (SubCategories::where('slug', $sub_category_slug)->exists()) {

                $subcategory = SubCategories::where('slug', $sub_category_slug)->first();
                $products = Product::where('subcategory_id', $subcategory->id)
                    ->where('status', '1')
                    ->get();
                $category = Category::all();
                $groups = Groups::all();
                return view('dashboard.user.subcategory.index', compact('products', 'category', 'subcategory', 'groups'));
            } else {
                return redirect('/')->with('fail', 'Unable to redirect');
            }
        }
    }
    function display_product($subcategory_slug, $product_slug)
    {
        if (SubCategories::where('slug', $subcategory_slug)->exists()) {
            if (Product::where('slug', $product_slug)->exists()) {

                $products = Product::where('slug', $product_slug)->first();
                $groups = Groups::all();
                return view('dashboard.user.products.index', compact('products', 'groups'));
            } else {
                return redirect('/')->with('fail', 'Unable to redirect');
            }
        }
    }
    function userindex()
    {
        $groups = Groups::all();
        return view('dashboard.user.user_details.index', compact('groups'));
    }
    function add_details()
    {
        $groups = Groups::all();
        $user = User::all();
        $userdetail = UserDetails::all();
        return view('dashboard.user.user_details.add_details', compact('groups', 'user', 'userdetail'));
    }
    function product_details($slug)
    {
        if (Product::where('slug', $slug)->exists()) {
            $groups = Groups::all();
            $products = Product::where('slug', $slug)->first();


            return view('dashboard.user.products.index', compact('products', 'groups'));
        }
    }

    function details($slug)
    {
        $products = Product::where('slug', $slug)->first();
        $groups = Groups::all();
        return view('dashboard.user.products.index', compact('products', 'groups'));
    }
    function add_user_details(Request $request)
    {

        //Validate Inputs

        $userdetails = new UserDetails();
        $userdetails->user_id =  $request->user_id;
        $userdetails->first_name = $request->first_name;
        $userdetails->last_name = $request->last_name;
        $userdetails->contact = $request->contact;
        $userdetails->country = $request->country;
        $userdetails->address = $request->address;
        $userdetails->city = $request->city;
        if ($request->hasfile('profile_image')) {
            $file = $request->file('profile_image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/profile/', $filename);
            $userdetails->profile_image = $filename;
        }
        $userdetails->postal_code = $request->postal_code;
        $save = $userdetails->save();

        if ($save) {
            return redirect()
                ->back()
                ->with('success', 'You are now registered successfully');
        } else {
            return redirect()
                ->back()
                ->with('fail', 'Something went wrong, failed to register');
        }
    }
}
