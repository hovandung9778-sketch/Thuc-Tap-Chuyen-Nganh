<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\CategoryController;


Route::get('/', function () {
    return view('index');
})->name('home');
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
   



Auth::routes();
Route::get('/category/customer',[CategoryController::class,'index'])->name('customer');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
