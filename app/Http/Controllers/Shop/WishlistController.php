<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function WishlistView(){

        $user_id = Auth::user()->id;
        $wishes = Wishlist::where('user_id', $user_id)->get();
        
        return view('shop.wishlist',compact('wishes'));
    }

    public function WishlistAdd(Request $request){
        $product = Product::findOrFail($request->pid);

        if(($product->product_qty - $request->quantity) < 0){
            return redirect()->back();
        }
        
        $userid = auth()->user()->id;
        $exist = Wishlist::where('user_id',$userid)->where('product_id',$request->pid)->first();
        if ($exist){
            
            $notification = array(
                'message' => 'Item already on wishlist',
                'alert-type' => 'info'
            );

            return redirect()->back()->with($notification);

        }
        else{
            Wishlist::insert([
                'user_id' => $userid,
                'product_id'=>$request->pid,
            ]);
        }

        $notification = array(
            'message' => 'Item successfully added to wishlist',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function WishlistDelete($wid){
        $userid = auth()->user()->id;

        $exist = Wishlist::where('user_id',$userid)->where('id',$wid)->first();
        if ($exist){
            $exist->delete();
        }

        $notification = array(
            'message' => 'Item successfully deleted from wishlist',
            'alert-type' => 'warning'
        );

        return redirect()->back()->with($notification);
    }


}
