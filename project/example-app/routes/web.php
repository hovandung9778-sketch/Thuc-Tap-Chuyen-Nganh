<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\CustummerController;
use App\Http\Controllers\admin\NhanVienController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\Auth\RegisterController;


//Route::get('/', function () {
 //  return view('home');
//})->name('homee');

Route::get('/', [App\Http\Controllers\HomeController::class,'home'])->name('homee');


Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');
Route::get('/shop', function () {
    return view('shop');
})->name('shop');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/blog', function () {
    return view('blog');
})->name('blog');
Route::get('/blog-single', function () {
    return view('blog-single');
})->name('blog-single');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/cart', function () {
    return view('cart');
})->name('cart');
Route::get('/wishlist', function () {
    return view('wishlist');
})->name('wishlist');
Route::get('/product-single', function () {
    return view('product-single');
})->name('product-single');
Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
   
//////////////////
Route::get('/category/{id}', [ProductController::class, 'index'])->name('category.products');

///////////////////

Auth::routes();
//Route::get('/category/category',[CategoryController::class,'index'])->name('category');
//Route::get('/customer/Custummer',[CustummerController::class,'index'])->name('custummer');
//Route::get('/product/product',[ProductController::class,'index'])->name('product');
//Route::get('/user/user',[UserController::class,'index'])->name('user');


////////////////////////////////////////////
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
Route::resource('category', App\Http\Controllers\admin\CategoryController::class);
Route::resource('product', App\Http\Controllers\admin\ProductController::class);
Route::resource('customer', App\Http\Controllers\admin\CustummerController::class);
Route::resource('user', App\Http\Controllers\admin\UserController::class);


});

/////////////////////////////////////////
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('admin');
