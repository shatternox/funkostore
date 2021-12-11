<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function view(){

        $cart_item = Cart::where('user_id',auth()->user()->id)->get();
        
        return view('shop.cart',compact('cart_item'));
    }
    public function addToCart(Request $request){

        $product = Product::findOrFail($request->pid);

        if ($request->quantity <= 0){
            return redirect('/');
        }

        if(($product->product_qty - $request->quantity) < 0){
            return redirect('/');
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

        return redirect('/');
    }

    public function deleteCartItem(Request $request){
        $userid = auth()->user()->id;

        $exist = Cart::where('user_id',$userid)->where('id',$request->cid)->first();
        if ($exist){
            $exist->delete();

            $product = Product::findOrFail($exist->product_id);

            $new_qty = $product->product_qty + $exist->quantity;

            $product->update([
                'product_qty' => $new_qty,
            ]);

        }
        return redirect('/mycart');
    }
}
