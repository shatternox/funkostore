<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminPanel\AdminProfileController;
use App\Http\Controllers\AdminPanel\BrandController;
use App\Http\Controllers\AdminPanel\CategoryController;
use App\Http\Controllers\AdminPanel\ProductController;
use App\Http\Controllers\AdminPanel\SliderController;
use App\Http\Controllers\AdminPanel\SubCategoryController;
use App\Http\Controllers\Shop\CartController;
use App\Http\Controllers\Shop\IndexController;
use App\Http\Controllers\Shop\TransactionController;
use App\Http\Controllers\Shop\WishlistController;

use App\Models\User;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Admin Routes


Route::middleware(['auth:admin'])->group( function (){

    Route::get('/admin/dashboard', [AdminProfileController::class, 'AdminDashboard']);

    Route::get('/transaction/approve/{invoice}',[AdminProfileController::class, 'ApproveTransaction'])->name('approve.transaction');
    Route::get('/transaction/unapprove/{invoice}',[AdminProfileController::class, 'UnapproveTransaction'])->name('unapprove.transaction');


    Route::get('/admin/profile',[AdminProfileController::class, 'AdminProfile'])->name('admin.profile');
    Route::get('/admin/profile/edit',[AdminProfileController::class, 'AdminProfileEdit'])->name('admin.profile.edit');
    Route::post('/admin/profile/store',[AdminProfileController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/admin/profile/changepassword',[AdminProfileController::class, 'AdminChangePassword'])->name('admin.change.password');
    Route::post('/admin/profile/changepassword',[AdminProfileController::class, 'AdminUpdatePassword'])->name('admin.update.password');

    
    Route::get('/admin/logout',[AdminController::class, 'destroy'])->name('admin.logout');

    // Brands
    Route::prefix('brand')->group(function(){
        Route::get('/view',[BrandController::class, 'BrandView'])->name('all.brand');
        Route::post('/store',[BrandController::class, 'BrandStore'])->name('brand.store');
        Route::get('/edit/{id}',[BrandController::class, 'BrandEdit'])->name('brand.edit');
        Route::post('/update/{id}',[BrandController::class, 'BrandUpdate'])->name('brand.update');
        Route::get('/delete/{id}',[BrandController::class, 'BrandDelete'])->name('brand.delete');
    });

    // Category
    Route::prefix('category')->group(function(){
        Route::get('/view',[CategoryController::class, 'CategoryView'])->name('all.category');
        Route::post('/store',[CategoryController::class, 'CategoryStore'])->name('category.store');
        Route::get('/edit/{id}',[CategoryController::class, 'CategoryEdit'])->name('category.edit');
        Route::post('/update/{id}',[CategoryController::class, 'CategoryUpdate'])->name('category.update');
        Route::get('/delete/{id}',[CategoryController::class, 'CategoryDelete'])->name('category.delete');

        Route::get('/sub/view',[SubCategoryController::class, 'SubCategoryView'])->name('all.subcategory');
        Route::post('/sub/store',[SubCategoryController::class, 'SubCategoryStore'])->name('subcategory.store');
        Route::get('/sub/edit/{id}',[SubCategoryController::class, 'SubCategoryEdit'])->name('subcategory.edit');
        Route::post('/sub/update/{id}',[SubCategoryController::class, 'SubCategoryUpdate'])->name('subcategory.update');
        Route::get('/sub/delete/{id}',[SubCategoryController::class, 'SubCategoryDelete'])->name('subcategory.delete');
        
        Route::get('/subcategory/ajax/{category_id}', [SubCategoryController::class, 'GetSubCategory']);


    });

    // Product
    Route::prefix('product')->group(function(){
        Route::get('/add',[ProductController::class, 'ProductAdd'])->name('add.product');
        Route::post('/store',[ProductController::class, 'ProductStore'])->name('product.store');

        Route::get('/manage',[ProductController::class, 'ProductManage'])->name('manage.product');
        Route::get('/edit/{id}',[ProductController::class, 'ProductEdit'])->name('product.edit');
        Route::post('/update/{id}',[ProductController::class, 'ProductUpdate'])->name('product.update');

        Route::post('/update/image/multiple',[ProductController::class, 'ProductUpdateImages'])->name('product.update.images');
        Route::post('/update/image/multipleEmpty/{id}',[ProductController::class, 'ProductUpdateImageEmpty'])->name('product.update.imageEmpty');
        Route::post('/update/image/thumbnail/{id}',[ProductController::class, 'ProductUpdateThumbnail'])->name('product.update.thumbnail');

        Route::get('/delete/{id}',[ProductController::class, 'ProductDelete'])->name('product.delete');
        Route::get('/delete/image/multiple/{id}',[ProductController::class, 'ProductDeleteImages'])->name('product.delete.images');

        Route::get('/update/active/{id}',[ProductController::class, 'ProductActive'])->name('product.active');
        Route::get('/update/inactive/{id}',[ProductController::class, 'ProductInactive'])->name('product.inactive');

    });

    // Slider
    Route::prefix('slider')->group(function(){
        Route::get('/view',[SliderController::class, 'SliderView'])->name('all.slider');
        Route::post('/store',[SliderController::class, 'SliderStore'])->name('slider.store');
        Route::get('/edit/{id}',[SliderController::class, 'SliderEdit'])->name('slider.edit');
        Route::post('/update/{id}',[SliderController::class, 'SliderUpdate'])->name('slider.update');
        Route::get('/delete/{id}',[SliderController::class, 'SliderDelete'])->name('slider.delete');
        Route::get('/update/active/{id}',[SliderController::class, 'SliderActive'])->name('slider.active');
        Route::get('/update/inactive/{id}',[SliderController::class, 'SliderInactive'])->name('slider.inactive');
    });

});


Route::group(['prefix'=> 'admin', 'middleware'=>['admin:admin']], function(){
	Route::get('/login', [AdminController::class, 'loginForm']);
	Route::post('/login',[AdminController::class, 'store'])->name('admin.login');
});



// User Routes
Route::get('/',[IndexController::class, 'index']);

Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
    $id = Auth::user()->id;
    $user = User::find($id);
    return view('dashboard', compact('user'));
})->name('dashboard');

Route::get('/user/logout',[IndexController::class, 'UserLogout'])->name('user.logout');
Route::get('/user/profile',[IndexController::class, 'UserProfile'])->name('user.profile');
Route::post('/user/profile/store',[IndexController::class, 'UserProfileStore'])->name('user.profile.store');
Route::get('/user/profile/changepassword',[IndexController::class, 'UserChangePassword'])->name('user.change.password');
Route::post('/user/profile/changepassword',[IndexController::class, 'UserUpdatePassword'])->name('user.update.password');


Route::get('/product/details/{id}/{slug}',[IndexController::class, 'ProductDetails']);
Route::get('/product/tag/{tag}',[IndexController::class, 'ProductTagView']);

Route::post('/search',[IndexController::class, 'ProductSearch'])->name('product.search');


Route::get('/subcategory/product/{subcat_id}/{slug}',[IndexController::class, 'SubcategoryProduct']);




Route::middleware(['auth'])->group( function (){

    Route::get('mycart/',[CartController::class, 'view'])->name('product.cart');
    Route::post('product/addToCart',[CartController::class, 'addToCart'])->name('product.addtocart');
    Route::get('product/deleteCartItem/{cid}',[CartController::class, 'deleteCartItem'])->name('product.deleteCartItem');
    
    
    Route::get('/wishlist',[WishlistController::class, 'WishlistView'])->name('wishlist.view');
    Route::post('/product/addToWish',[WishlistController::class, 'WishlistAdd'])->name('product.addtowish');
    Route::get('/product/deleteWishItem/{wid}',[WishlistController::class, 'WishlistDelete'])->name('product.deleteWishItem');
    

    Route::get('/checkout/',[CartController::class, 'checkout'])->name('product.checkout');
    Route::get('/order/',[TransactionController::class, 'order'])->name('product.order');
    Route::get('/order/details/{inv}',[TransactionController::class, 'orderDetails']);
    Route::post('/order/',[TransactionController::class, 'addOrder'])->name('product.addOrder');
});


