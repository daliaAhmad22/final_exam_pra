<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\ProductController;
use App\http\controllers\CustomerController;
use App\Models\Product;
use App\Models\About;



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



Auth::routes();
Route::get('/',function(){
    $products=Product::all();
    $abouts=About::all();
    return view('welcome')->with('products',$products)->with('abouts',$abouts);
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('admin/categories',[ CategoryController::class,'index']);
Route::get('admin/categories/create',[CategoryController::class,'create']);
Route::post('admin/products/store',[ProductController::class,'store']);
Route::get('admin/delete/{id}',[CategoryController::class,'delete']);
Route::get('product/{id}',[ProductController::class,'showDet']);

Route::get('contactUs',[CustomerController::class,'showContact']);
Route::get('/sendInfo',[ContactController::class,'storeInfo']);
Route::get('admin/message',[ContactController::class,'showMess']);
Route::get('showProducts/{category_id}',[ ProductController::class,'showProducts']);

Route::get('admin/delete/{id}',[ProductController::class,'delete']);

Route::get('admin/products/create',[ProductController::class,'create']);
