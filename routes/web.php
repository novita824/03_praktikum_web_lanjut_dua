<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\shopcontroller;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/about-us', function () {
    return view('about');
});
Auth::routes();

Route::prefix('shop')->group(function () {
    Route::get('/', function () {
        return view('shop');
    });
    Route::get('/sidebar-shop', [shopcontroller::class, 'ss']);
    Route::get('/shop-detail', [shopcontroller::class, 'sd']);
    Route::get('/cart', [shopcontroller::class, 'c']);
    Route::get('/checkout', [shopcontroller::class, 'co']);
    Route::get('/myaccount', [shopcontroller::class, 'ma']);
    Route::get('/wishlist', [shopcontroller::class, 'w']);
});

Route::get('/gallery/{id}', function () {
    return view('gallery', ['id' => '1']);
});

Route::get('/contact-us', function () {
    return view('contactus');
});