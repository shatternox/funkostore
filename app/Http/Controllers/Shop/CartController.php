<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function view(){

        $cart_item = Cart::where('user_id',auth()->user()->id)->get();
        
        return view('shop.cart',compact('cart_item'));
    }

    public function checkout(){
        $cart_item = Cart::where('user_id',auth()->user()->id)->get();
        if (!$cart_item->first()){
            return redirect('/');
        }
        return view('shop.checkout',compact('cart_item'));
    }
    public function addToCart(Request $request){

        $product = Product::findOrFail($request->pid);

        if ($request->quantity <= 0){
            return redirect()->back();
        }

        if(($product->product_qty - $request->quantity) < 0){
            return redirect()->back();
        }
        
        $userid = auth()->user()->id;
        $exist = Cart::where('user_id',$userid)->where('product_id',$request->pid)->first();
        if ($exist){
            $exist->update([
                'quantity'=>$request->quantity + $exist->quantity
            ]);

            $new_qty = $product->product_qty - $request->quantity;
            $product->update([
                'product_qty' => $new_qty,
            ]);


        }
        else{
            Cart::insert([
                'user_id' => $userid,
                'product_id'=>$request->pid,
                'quantity'=>$request->quantity
            ]);
        }

        $notification = array(
            'message' => 'Item successfully added to cart',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function deleteCartItem($cid){
        $userid = auth()->user()->id;

        $exist = Cart::where('user_id',$userid)->where('id',$cid)->first();
        if ($exist){
            $exist->delete();

            $product = Product::findOrFail($exist->product_id);

            $new_qty = $product->product_qty + $exist->quantity;

            $product->update([
                'product_qty' => $new_qty,
            ]);

        }

        $notification = array(
            'message' => 'Item successfully deleted from cart',
            'alert-type' => 'warning'
        );

        return redirect()->back()->with($notification);
    }
}
