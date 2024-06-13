<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;
use App\Models\cart;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\order;
use Session;
use Stripe;


class ShopController extends Controller
{
    public function singleProduct($id)
    {
        $data = Product::find($id);
        if(Auth::id()) {
            $user = Auth::user();
            $userid = $user->id;
            $count = cart::where('user_id', $userid)->count();
        }
        else
        {
            $count ='';
        }
        return view('site.single_product', compact('data','count'));
    }
    public function addToCart($id)
    {
        $product_id=$id;
        $user=Auth::user();
        $user_id=$user->id;
        $data =new cart;
        $data->user_id=$user_id;
        $data->product_id=$product_id;
        $data->save();
        toastr()->closeButton()->addSuccess('Product Added Successfully');
        return redirect()->back();
    }
    public function viewCart()
    {
        $user=Auth::user();
        $user_id=$user->id;
        $count=cart::where('user_id',$user_id)->count();
        $cart=cart::where('user_id',$user_id)->get();


        return view('site.cart', compact('count','cart'));

    }
    public function deleteCart($id)
    {
        $data=cart::find($id);
        $data->delete();
        toastr()->closeButton()->addSuccess('Product Deleted Successfully');
        return redirect()->back();
    }
    public function viewCheckout()
    {
        $user=Auth::user();
        $user_id=$user->id;
        $count=cart::where('user_id',$user_id)->count();
        $cart=cart::where('user_id',$user_id)->get();

        return view('site.checkout', compact('count','cart'));
    }
    public function makeOrder(Request $request)
    {
        $name=$request->name;
        $address=$request->address;
        $phone=$request->phone;
        $userid=Auth::user()->id ;
        $cart=cart::where('user_id',$userid)->get();
        foreach($cart as $carts)
        {
            $order=new order;
            $order->name=$name;
            $order->rec_address=$address;
            $order->phone=$phone;
            $order->user_id=$userid;
            $order->product_id=$carts->product_id;
            $order->save();

        }
        $cart_remove=cart::where('user_id',$userid)->get();
        foreach ($cart_remove as $remove)
        {
            $data = cart::find($remove->id);
            $data->delete();
        }
        toastr()->success('Order Completed Successfully');
        return redirect()->back();
    }
    public function stripe($total)
    {
        return view('site.stripe',compact('total'));
    }
    public function stripePost(Request $request,$total)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        Stripe\Charge::create ([
            "amount" => $total * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Test payment from complete."
        ]);
        $name=Auth::user()->name;
        $address=Auth::user()->address;
        $phone=Auth::user()->phone;
        $userid=Auth::user()->id ;
        $cart=cart::where('user_id',$userid)->get();
        foreach($cart as $carts)
        {
            $order=new order;
            $order->name=$name;
            $order->rec_address=$address;
            $order->phone=$phone;
            $order->user_id=$userid;
            $order->product_id=$carts->product_id;
            $order->payment_status ='paid';
            $order->save();

        }
        $cart_remove=cart::where('user_id',$userid)->get();
        foreach ($cart_remove as $remove)
        {
            $data = cart::find($remove->id);
            $data->delete();
        }
        toastr()->success('Order Completed Successfully');
        return redirect('site.cart');
    }

}
