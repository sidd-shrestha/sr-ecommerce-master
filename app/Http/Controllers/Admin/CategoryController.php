<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Groups;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use PHPUnit\TextUI\XmlConfiguration\Group;

class CategoryController extends Controller
{
    function index(){
         $category = Category::all();
         return view('dashboard.admin.category.index',compact('category'));
    }
    function trending(){
        $category= Category::where('status','1')->take(15)->get();
        $products= Product::where('trending','1')->take(15)->get();
        return view('dashboard.admin.trending.index',compact('category','products'));
    }
function viewcat(){
    $groups = Groups::all();
    return view('dashboard.admin.category.add_category',compact('groups'));
}
    function create_category(Request $request,)
    {
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->groups_id = $request->groups_id;
        $category->slug = $request->slug;
        $category->status = $request->input('status') == TRUE ? '1' : '0';
        $category->popular = $request->input('popular') == TRUE ? '1' : '0';
        // $category->meta_title = $request->meta_title;
        $category->meta_description = $request->meta_description;
        $category->meta_keywords = $request->meta_keywords;
        if ($request->hasfile('category_image')) {
            $file = $request->file('category_image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/category/', $filename);
            $category->category_image = $filename;
        }
        $save = $category->save();
        if ($save) {
            return redirect()
                ->back()
                ->with('success', 'Category added successfully');
        } else {
            return redirect()
                ->back()
                ->with('fail', 'Something went wrong, failed to add category');
        }
    }
    function edit($id){
        $category = Category::find($id);
        return view('dashboard.admin.category.edit_category',compact('category'));
    }
    function update(Request $request,$id){
        $category = Category::find($id);

        $category->category_name = $request->category_name;
        $category->slug = $request->slug;
        $category->status = $request->input('status') == TRUE ? '1' : '0';
        $category->popular = $request->input('popular') == TRUE ? '1' : '0';
        // $category->meta_title = $request->meta_title;
        $category->meta_description = $request->meta_description;
        $category->meta_keywords = $request->meta_keywords;
        if ($request->hasfile('category_image')) {
            $file = $request->file('category_image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/category/', $filename);
            $category->category_image = $filename;
        }
        $category->update();
        return redirect('admin/category')->with('success','Updated');
        // $update = $category->update();
        // if ($update) {
        //     return redirect()
        //         ->back()
        //         ->with('success', 'Category added successfully');
        // } else {
        //     return redirect()
        //         ->back()
        //         ->with('fail', 'Something went wrong, failed to add category');
        // }
    }
    public function destroy($id)
    {
        $category = Category::find($id);
        if($category->category_image){
            $path = 'assets/uploads/category/'.$category->category_image;
            if(File::exists($path))
        {
            File::delete('path');
        }
        }
        $category->delete();
        return redirect('admin/category')->with('success','Deleted');
    }
}
