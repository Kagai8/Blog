<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', ["uses"=>"ProductsController@index","as"=>"allproducts"]); 

Route::get('products', ["uses"=>"ProductsController@index","as"=>"allproducts"]);

Route::get('products/men', ["uses"=>"ProductsController@menProducts","as"=>"menProducts"]);

//women
Route::get('products/women', ["uses"=>"ProductsController@womenProducts","as"=>"womenProducts"]);

//search
Route::get('search', ["uses"=>"ProductsController@search","as"=>"searchProducts"]);

Route::get('product/addToCart/{id}',['uses'=>'ProductsController@addProductToCart','as'=>'AddToCartProduct']);

//increase
Route::get('product/increaseSingleProduct/{id}',['uses'=>'ProductsController@increaseSingleProduct','as'=>'IncreaseSingleProduct']);

//decrease
Route::get('product/decreaseSingleProduct/{id}',['uses'=>'ProductsController@decreaseSingleProduct','as'=>'DecreaseSingleProduct']);

Route::get('cart',['uses'=>'ProductsController@showCart','as'=>'cartproducts']);

Route::get('product/deleteItemFromCart/{id}',['uses'=>'ProductsController@deleteItemFromCart','as'=>'DeleteItemFromCart']);

Auth::routes();

//User Authentification
Route ::get('/home','HomeController@index')->name('home');

//create admin panel
Route::get('admin/products', ["uses"=>"Admin\AdminProductsController@index","as"=>"adminDisplayProducts"])->middleware('restrictToAdmin');

//display edit form
Route::get('admin/editProductForm/{id}', ["uses"=>"Admin\AdminProductsController@editProductForm","as"=>"adminEditProductForm"]);

//Display Edit ImageForm
Route::get('admin/editImageProductForm/{id}', ["uses"=>"Admin\AdminProductsController@editProductImageForm","as"=>"adminEditProductImageForm"]);

//Edit product Image
Route::post('admin/updateProductImage/{id}', ["uses"=>"Admin\AdminProductsController@updateProductImage","as"=>"updateProductImage"]);

//Edit Product
Route::post('admin/updateProduct/{id}', ["uses"=>"Admin\AdminProductsController@updateProduct","as"=>"updateProduct"]);

//Display Create Product Form
Route::get('admin/createProductForm', ["uses"=>"Admin\AdminProductsController@createProductForm","as"=>"createProductForm"]);

//Create New Product
Route::post('admin/sendCreateProductForm', ["uses"=>"Admin\AdminProductsController@sendCreateProductForm","as"=>"sendCreateProductForm"]);


Route::get('admin/deleteProduct/{id}', ["uses"=>"Admin\AdminProductsController@deleteProduct","as"=>"adminDeleteProduct"]);