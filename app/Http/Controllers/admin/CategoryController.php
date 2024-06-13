<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\category;


class CategoryController extends Controller
{
    public function viewCategory()
    {
        $data=category::all();
        return view('admin.category',compact('data'));
    }
    public function createCategory()
    {
        return view('admin.add_category');
    }
    public function addCategory(Request $request)
    {
        $category = new category;
        $category-> name = $request -> category;

        $category->save();

        toastr()->closeButton()->addSuccess('Category Added Successfully');

        return redirect()->back();
    }
    public function deleteCategory($id)
    {
        $data = category::find($id);
        $data->delete();
        toastr()->closeButton()->addSuccess('Category Deleted Successfully');
        return redirect()->back();
    }
    public function editCategory($id)
    {
        $data =category::find($id);
        return view('admin.edit_category',compact('data'));
    }
    public function updateCategory(Request $request,$id)
    {
        $data = category::find($id);
        $data -> name = $request->category;
        $data -> save();
        toastr()->closeButton()->addSuccess('Category Updated Successfully');
        return redirect('/view_category');

    }
}
