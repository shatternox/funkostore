<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionProof;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

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

        $image = $request->file('transactionProof');
        $image_names = $invoice . '.' . $image->getClientOriginalExtension();
        $image_paths = 'upload/transaction_proofs/'. $image_names;

        $message = "Transaction Success!";
        $type = "success";

        foreach($cart_item as $cart){

            $product = Product::findOrFail($cart->product_id);

            if($product->product_qty - $cart->quantity < 0){
            
                $message = "Some item cannot fulfill the requested amount!";
                $type = "warning";

            } 
            else {
                
                Transaction::insert([
                    'product_id' => $cart->product->id,
                    'user_id' => auth()->user()->id,
                    'date_purchased' => $date_time,
                    'total_price' => $totalIn_cart,
                    'payment_type' => $request->payment_method,
                    'invoice' => $invoice,
                    'quantity' => $cart->quantity,
                    'order_status' => 'On Going',
                    'transaction_proof' => $image_paths,
                ]);

                $new_qty = $product->product_qty - $cart->quantity;
                $product->update([
                    'product_qty' => $new_qty,
                ]);

            }

            $cart->delete();
        }

        Image::make($image)->resize(917,1000)->save($image_paths);

        $notification = array(
            'message' => $message,
            'alert-type' => $type
        );

        return redirect('/')->with($notification);
        
    }


    public function orderDetails(Request $request){
        $orderDetails = Transaction::where('invoice',$request->inv)->where('user_id',auth()->user()->id)->first();
        if (!$orderDetails){
            return redirect('/');
        }

        $items = Transaction::where('invoice',$request->inv)->get();

        return view('shop.order_details',compact('orderDetails','items'));
    }
}
