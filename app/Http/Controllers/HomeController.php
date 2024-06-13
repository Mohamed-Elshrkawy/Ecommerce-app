<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\product;
use Illuminate\Support\Facades\Auth;
use App\Models\cart;
use App\Models\User;
use App\Models\order;

class HomeController extends Controller
{
    public function index()
    {
        $user = User::where ('usertype','user')->get()->count();
        $product= product::all()->count();
        $order= order::all()->count();
        $count = order::where('status','Delivered')->get()->count();

        return view('admin.index',compact('user','product','order','count'));
    }
    public function home()
    {

        $product = product::all();
        if(Auth::id()) {
            $user = Auth::user();
            $userid = $user->id;
            $count = cart::where('user_id', $userid)->count();
        }
        else
        {
            $count ='';
        }
        return view('site.index', compact('product','count'));
    }

    public function login_home()
    {
        $product = product::all();
        $user = Auth::user();
        $userid=$user->id;
        $count = cart::where('user_id',$userid)->count();
        return view('site.index', compact('product','count'));
    }
}
