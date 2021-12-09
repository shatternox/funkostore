<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request){
        $exist = Cart::where('user_id',1)->where('product_id',$request->pid)->first();
        if ($exist){
            $exist->update([
                'quantity'=>$request->quantity
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
}
