<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Cart;
use App\Models\Category;
use App\Models\MultiImg;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller
{
    public function index(){

        $categories = Category::orderBy('category_name', 'ASC')->get();
        $sliders = Slider::where('status', 1)->orderBy('id', 'DESC')->limit(3)->get();
        $products = Product::where('status', 1)->orderBy('id', 'DESC')->limit(6)->get();
        $featured = Product::where('featured', 1)->where('status', 1)->orderBy('id', 'DESC')->get();
        $hotdeals = Product::where('hot_deals', 1)->where('status', 1)->where('discount', '!=', NULL)->limit(3)->orderBy('id', 'DESC')->get();
        $specialoffers = Product::where('special_offer', 1)->where('status', 1)->limit(3)->orderBy('id', 'DESC')->get();
        $specialdeals = Product::where('special_offer', 1)->where('status', 1)->limit(3)->orderBy('id', 'DESC')->get();

        $skip_category_0 = Category::skip(0)->first();
        $skip_product_0 = Product::where('status', 1)->where('category_id', $skip_category_0->id)->orderBy('id', 'DESC')->get();

        $skip_category_1 = Category::skip(1)->first();
        $skip_product_1 = Product::where('status', 1)->where('category_id', $skip_category_1->id)->orderBy('id', 'DESC')->get();

        $skip_brand_1 = Brand::skip(1)->first();
        $skip_brand_product_1 = Product::where('status', 1)->where('category_id', $skip_brand_1->id)->orderBy('id', 'DESC')->get();
        
        

        return view('shop.index', compact('categories', 'sliders', 'products', 'featured', 'hotdeals', 'specialoffers', 'specialdeals', 'skip_category_0', 'skip_product_0', 'skip_category_1', 'skip_product_1', 'skip_brand_1', 'skip_brand_product_1'));
    }


    public function UserLogout(Request $request){

        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return Redirect()->route('login');
    }

    public function UserProfile(){
        $id = Auth::user()->id;
        $user = User::find($id);

        return view('shop.profile.user_profile', compact('user'));
    }   

    public function UserProfileStore(Request $request){

        $request->validate([
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'profile_photo_path' => 'mimes:jpg,jpeg,png|max:2048',
            ],
            [
                'name.required' => 'Please input the name',
                'email.required' => 'Please input the email',
                'phone.required' => 'Please input the phone',
            ]
        );

        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;

        if ($request->file('profile_photo_path')){
            $file = $request->file('profile_photo_path');
            
            $filename = hexdec(uniqid());
            $extension = strtolower($file->getClientOriginalExtension());
            $complete_file_name = $filename.'.'.$extension;

            @unlink(public_path('upload/profile_images/'. $data->profile_photo_path));

            $file->move(public_path('upload/profile_images'), $complete_file_name);
            $data['profile_photo_path'] = $complete_file_name;
        }    
        $data->save();

        $notification = array(
            'message' => 'Profile Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('dashboard')->with($notification);
    }

    public function UserChangePassword(){

        $id = Auth::user()->id;
        $user = User::find($id);
        return view('shop.profile.change_password', compact('user'));
    }

    public function UserUpdatePassword(Request $request){

        $validateData = $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|confirmed'
        ]);

        $hashedPassword = Auth::user()->password;

        if(Hash::check($request->oldpassword, $hashedPassword)){
            $user = User::find(Auth::id() );
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();

            return redirect()->route('user.logout');
        } else {
            return redirect()->back();
        }
    }

    public function ProductDetails($id, $slug){
        $product = Product::findOrFail($id);
        $multiimgs = MultiImg::where('product_id', $id)->get();
        $relatedproducts =  Product::where('category_id', $product->category_id)->where('id', '!=', $id)->orderBy('id', 'DESC')->get();

        return view('shop.product.product_details', compact('product', 'multiimgs', 'relatedproducts'));
    }

    public function ProductTagView($tag){
        $categories = Category::orderBy('category_name', 'ASC')->get();
        $products = Product::where('status', 1)->where('product_tags', $tag)->orderBy('id', 'DESC')->paginate(3);
        return view('shop.tags.tag_view', compact('products', 'categories'));
    }

    public function SubcategoryProduct($subcat_id, $slug){
        $categories = Category::orderBy('category_name', 'ASC')->get();
        $products = Product::where('status', 1)->where('subcategory_id', $subcat_id)->orderBy('id', 'DESC')->paginate(3);
        return view('shop.product.subcategory_view', compact('products', 'categories'));
    }

}
