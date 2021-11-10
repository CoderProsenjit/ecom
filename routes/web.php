<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\BlogComponent;
use App\Http\Livewire\ProductsComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\ContactusCompoenent;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// home 
Route::get('/', HomeComponent::class)->name('home');
Route::get('/about', AboutComponent::class)->name('about');
Route::get('/product', ProductsComponent::class)->name('product');
Route::get('/blog', BlogComponent::class)->name('blog');
Route::get('/shop', ShopComponent::class)->name('shop');
Route::get('/contact', ContactusCompoenent::class)->name('contact');
