<?php

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

Route::get('/', function(){

	echo "welcome";
});

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');
Route::get('/logout', 'LogoutController@index');
Route::get('/registration', 'RegistrationController@index')->name('registration.index');
Route::post('/registration', 'RegistrationController@insert')->name('registration.insert');
Route::get('/home', ['as'=>'home.index','uses'=>'HomeController@index']);
Route::get('/product/details/', 'RegistrationController@index')->name('product.index');
Route::post('/product/selected/{category}', 'RegistrationController@index')->name('product.details');
Route::get('/home/ram', ['as'=>'home.ram','uses'=>'HomeController@homeram']);



Route::group(['middleware'=>['sess']], function(){

	Route::group(['middleware'=>['admintype']], function(){
	Route::get('/admin/index', ['as'=>'admin.index','uses'=>'AdminController@index']);	
	Route::get('/admin/userList', ['as'=>'admin.userlist','uses'=>'AdminController@users']);
	Route::get('/admin/pending', ['as'=>'admin.pending','uses'=>'AdminController@pending']);	
	Route::get('/admin/approve/{id}', ['as'=>'admin.confirmapprove','uses'=>'AdminController@capprove']);
	Route::post('/admin/approve/{id}', ['as'=>'admin.approve','uses'=>'AdminController@approve']);
	Route::get('/admin/home', 'AdminController@home')->name('admin.home');
	Route::get('/admin/ban/{id}', 'AdminController@cban')->name('admin.cban');
	Route::post('/admin/ban/{id}', 'AdminController@ban')->name('admin.ban');


	Route::get('/admin/details/{id}', 'AdminController@details')->name('author.details');
	Route::get('/admin/edit/{id}', 'AdminController@edit')->name('author.edit');
	Route::post('/admin/edit/{id}', 'AdminController@update')->name('author.update');
	Route::get('/admin/delete/{id}', 'AdminController@delete')->name('author.delete');
	Route::post('/admin/delete/{id}', 'AdminController@destroy')->name('author.destroy');
	Route::get('/admin/add', 'AdminController@add')->name('product.add');
	Route::post('/admin/add', 'AdminController@insert');
	Route::get('/admin/profile', 'AdminController@userprofiles')->name('admin.profile');
	Route::get('/admin/productlist', 'AdminController@products')->name('admin.products');
	});

	Route::group(['middleware'=>['customertype']], function(){
	Route::get('/customer/addblog', 'CustomerController@addblog');
	Route::post('/customer/addblog', 'CustomerController@insert');
	Route::post('/customer', 'CustomerController@index')->name('customer.index');
	Route::get('/customer', 'CustomerController@index')->name('author.index');
	Route::get('/customer/home', 'CustomerController@home')->name('customer.home');

	Route::get('/blog/edit/{id}', 'CustomerController@edit')->name('blog.edit');
	Route::post('/blog/edit/{id}', 'CustomerController@update')->name('blog.update');
	Route::get('/blog/delete/{id}', 'CustomerController@delete')->name('blog.delete');
	Route::post('/blog/delete/{id}', 'CustomerController@destroy')->name('blog.destroy');
	Route::get('/blog/details/{id}', 'CustomerController@details')->name('blog.details');
	Route::get('/addtocart', 'CustomerController@addcart')->name('addcart');
	});

});



