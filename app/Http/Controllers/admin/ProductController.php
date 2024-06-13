<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\product;

use App\Models\category;

class ProductController extends Controller
{
    public function addProduct()
    {
        $categories = category::all();
        return view('admin.add_product',compact('categories'));
    }
    public function uploadProduct(Request $request)
    {
        $data = new product;
        $data->name =$request->title;
        $data->description =$request->description;
        $data->price =$request->price;
        $data->quantity =$request->quantity;
        $data->category =$request->category;

        if ($request->file('image')) {
            $image = $request->file('image');
            $new_image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('products'), $new_image_name);
            $data->image = 'products/' . $new_image_name;
        }

        $data->save();
        toastr()->closeButton()->addSuccess('Product Added Successfully');

        return redirect()->back();
    }
    public function viewProduct()
    {
        $product=product::paginate(3);
        return view('admin.product',compact('product'));
    }
    public function deleteProduct($id)
    {
        $data = product::find($id);
        $image_path = public_path($data->image);
        if (file_exists($image_path)) {
            unlink($image_path);
        }
        $data->delete();
        toastr()->closeButton()->addSuccess('Product Deleted Successfully');
        return redirect()->back();
    }
    public function editProduct($id)
    {
        $data=product::find($id);
        $categories = category::all();
        return view('admin.edit_product',compact('data','categories'));
    }
    public function updateProduct(Request $request,$id)
    {
        $data =product::find($id);
        $data->name =$request->title;
        $data->description =$request->description;
        $data->price =$request->price;
        $data->quantity =$request->quantity;
        $data->category =$request->category;
        if ($request->file('image')) {
            $image = $request->file('image');
            $new_image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('products'), $new_image_name);
            $data->image = 'products/' . $new_image_name;
        }
        $data->save();
        toastr()->closeButton()->addSuccess('Product Updated Successfully');
        return redirect('/viewProduct');

    }
    public function itemSearch(Request $request)
    {
        $search =$request->search;

        $product=product::where('name','like','%'.$search.'%')->paginate(3);

        return view('admin.product',compact('product'));
    }
}
