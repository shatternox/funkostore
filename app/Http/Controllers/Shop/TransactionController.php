<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TransactionController extends Controller
{
    public function order(){
        $trList = Transaction::select('invoice','payment_type','date_purchased','total_price','order_status')->where('user_id',auth()->user()->id)->groupBy('invoice','payment_type','date_purchased','total_price','order_status')->get();
        
        return view('shop.order',compact('trList'));
    }

    public function addOrder(Request $request){
        $cart_item = Cart::where('user_id',auth()->user()->id)->get();
        if (!$cart_item->first()){
            return redirect('/');
        }
        $totalIn_cart = 0;
        $invoice = strtoupper(uniqid('FNK'));
        $date_time = Carbon::now();
        foreach($cart_item as $cart){
            $discounted_price = $cart->product->selling_price - ($cart->product->selling_price * $cart->product->discount) / 100;
            $totalIn_cart += $discounted_price * $cart->quantity;
        }
        // Find uniqid:
        while(Transaction::where('invoice',$invoice)->first()){
            $invoice = strtoupper(uniqid('FNK'));
        }
        foreach($cart_item as $cart){
            Transaction::insert([
                'product_id' => $cart->product->id,
                'user_id' => auth()->user()->id,
                'date_purchased' => $date_time,
                'total_price' => $totalIn_cart,
                'payment_type' => $request->payment_method,
                'invoice' => $invoice,
                'order_status' => 'On Going',
            ]);
            $cart->delete();
        }

        return redirect('/');
        
    }

    public function orderDetails(Request $request){
        
    }
}
