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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
Route::get('/customer/create',[
'uses'=>'CustomerController@InsertCustomerInfo',
'as'=>'customer.create'
]);

Route::post('/customer/insert',[
'uses'=>'CustomerController@Insert',
'as'=>'customer.Insert'
]);

Route::get('/customer/view',[
'uses'=>'CustomerController@getCustomerInfo',
'as'=>'customer.getCustomerInfo'
]);
    Route::get('/customer/update/{id}',[
        'uses'=>'CustomerController@updateCustomerInfo',
        'as'=>'customer.update'
    ]);
    Route::post('/customer/edit/{id}',[
        'uses'=>'CustomerController@Edit',
        'as'=>'customer.edit'
    ]);
    Route::get('/customer/discount/{id}',[
        'uses'=>'CustomerController@DiscountCustomer',
        'as'=>'customer.discount'
    ]);
    Route::post('/customer/discounts/{id}',[
        'uses'=>'CustomerController@Discount',
        'as'=>'customer.discounts'
    ]);
    Route::get('/customer/delete/{id}',[
        'uses'=>'CustomerController@Delete',
        'as'=>'customer.delete'
    ]);
});


