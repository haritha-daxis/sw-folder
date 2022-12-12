<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crud;
use App\Http\Controllers\register;

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
   // return view('welcome');
});
//Route::view('category','category');
Route::post('category',[crud::class,'insert_category']);
Route::get('category',[crud::class,'cat_det']);
Route::get('del_cat/{Id}',[crud::class,'del_cat']);
Route::get('upd1_cat/{Id}',[crud::class,'upd1_cat']);
Route::post('upd2_cat/{Id}',[crud::class,'upd2_cat']);
//​Route::view('product','product');
Route::get('product_cat',[crud::class,'pcat']);
Route::post('product',[crud::class,'insert_product']);
Route::get('product',[crud::class,'show_prod']);
Route::get('upd1_prod/{Id}',[crud::class,'upd1_prod']);
Route::post('upd2_prod/{Id}',[crud::class,'upd2_prod']);
Route::get('del_prod/{Id}',[crud::class,'delete_prod']);
///​Route::view('customer','customer');
Route::post('customer',[crud::class,'insert_customer']);
Route::get('customer',[crud::class,'show_customer']);
Route::get('upd1_cust/{Id}',[crud::class,'upd1']);
Route::post('upd2_cust/{Id}',[crud::class,'upd2']);
Route::get('del_cust/{Id}',[crud::class,'delete_customer']);
//​Route::view('sales','sales');
Route::get('get_product',[crud::class,'get_product']);
Route::get('get_customer',[crud::class,'get_customer']);
Route::post('sales',[crud::class,'insert_invoice']);
//​Route::view('report','report');
Route::get('get_detail',[crud::class,'cus_with_sale']);
Route::get('get_count',[crud::class,'sale_count']);
Route::get('no_sale',[crud::class,'cus_no_sale']);
Route::get('pro_count',[crud::class,'pro_count']);
Route::get('sales_det',[crud::class,'sale_cust']);
//​Route::view('regform','regform');
Route::post('regform',[register::class,'insert_reg']);
