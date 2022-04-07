<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Models\Product;

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
    return view('welcome');
});

Route::view('category_form','category_form');
Route::post('/addcategory',[CategoryController::class,'save']);
Route::get('/list_category',[CategoryController::class,'show']);
Route::get('/edit_category/{id}',[CategoryController::class,'edit']);
Route::post('/updatecategory',[CategoryController::class,'update']);
Route::get('/product_form',[ProductController::class,'index']);
Route::post('/addproduct',[ProductController::class,'store']);
Route::get('/listproduct',[ProductController::class,'show']);
Route::get('/delete_category/{id}',[CategoryController::class,'delete']);
Route::get('/edit_productform/{id}',[ProductController::class,'edit']);

Route::post('/updateproduct',[ProductController::class,'update']);

Route::get('delete_product/{id}',[ProductController::class,'delete']);