<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategories;
use Illuminate\Http\Request;

class SubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategory = SubCategories::all();
        return view('dashboard.admin.sub_category.index',compact('subcategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('dashboard.admin.sub_category.add_subcategory',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $subcategory = new SubCategories();

        $subcategory->category_type = $request->category_type;
        $subcategory->category_id = $request->category_id;
        $subcategory->slug = $request->slug;
        $subcategory->status = $request->input('status') == TRUE ? '1' : '0';
        $subcategory->popular = $request->input('popular') == TRUE ? '1' : '0';

        if ($request->hasfile('brand_image')) {
            $file = $request->file('brand_image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/brands/', $filename);
            $subcategory->brand_image = $filename;
        }
        $save = $subcategory->save();
        if ($save) {
            return redirect()
                ->back()
                ->with('success', 'Sub Category added successfully');
        } else {
            return redirect()
                ->back()
                ->with('fail', 'Something went wrong, failed to add sub category');
        }
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
}
