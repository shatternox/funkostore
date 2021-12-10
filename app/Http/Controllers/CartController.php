<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request){
        $userid = auth()->user()->id;
        $exist = Cart::where('user_id',$userid)->where('product_id',$request->pid)->first();
        if ($exist){
            $exist->update([
                'quantity'=>$request->quantity + $exist->quantity
            ]);
        }
        else{
            Cart::insert([
                'user_id' => 1,
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
        }
        return redirect('/');
    }
}
