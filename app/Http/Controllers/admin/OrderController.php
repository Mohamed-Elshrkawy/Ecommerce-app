<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\order;
use Illuminate\Http\Request;


class OrderController extends Controller
{
    public function viewOrder()
    {
        $data=Order::all();
        return view('admin.order',compact('data'));

    }
    public function onTheWay($id)
    {
        $data=order::find($id);
        $data->status='On the way';
        $data-> save();
        return redirect('viewOrder');
    }
    public function Delivered($id)
    {
        $data=order::find($id);
        $data->status='Delivered';
        $data->save();
        return redirect('viewOrder');
    }
}
