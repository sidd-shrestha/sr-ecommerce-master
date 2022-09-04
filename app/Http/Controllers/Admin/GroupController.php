<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Groups;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    function index(){
        return view('dashboard.admin.groups.index');
    }

    function create_groups(Request $request,)
    {
        $category = new Groups();
        $category->category_name = $request->category_name;
        $category->slug = $request->slug;
        $category->status = $request->input('status') == TRUE ? '1' : '0';

        if ($request->hasfile('category_image')) {
            $file = $request->file('category_image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/groups/', $filename);
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
}
