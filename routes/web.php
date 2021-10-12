<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminPanel\AdminProfileController;
use App\Http\Controllers\AdminPanel\BrandController;
use App\Http\Controllers\Shop\IndexController;
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
Route::get('/admin/logout',[AdminController::class, 'destroy'])->name('admin.logout');
Route::get('/admin/profile',[AdminProfileController::class, 'AdminProfile'])->name('admin.profile');
Route::get('/admin/profile/edit',[AdminProfileController::class, 'AdminProfileEdit'])->name('admin.profile.edit');
Route::post('/admin/profile/store',[AdminProfileController::class, 'AdminProfileStore'])->name('admin.profile.store');
Route::get('/admin/profile/changepassword',[AdminProfileController::class, 'AdminChangePassword'])->name('admin.change.password');
Route::post('/admin/profile/changepassword',[AdminProfileController::class, 'AdminUpdatePassword'])->name('admin.update.password');

Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

Route::group(['prefix'=> 'admin', 'middleware'=>['admin:admin']], function(){
	Route::get('/login', [AdminController::class, 'loginForm']);
	Route::post('/login',[AdminController::class, 'store'])->name('admin.login');
});

// Brands
Route::prefix('brand')->group(function(){
    Route::get('/view',[BrandController::class, 'BrandView'])->name('all.brand');
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





