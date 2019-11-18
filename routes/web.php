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

Route::get('salesforce/connect', 'SalesforceContoller@connect');
Route::get('salesforce/callback', 'SalesforceContoller@callback');
Route::get('salesforce/products', 'SalesforceContoller@getProducts');
Route::get('salesforce/products/create', 'SalesforceContoller@createProduct');
Route::get('salesforce/orders', 'SalesforceContoller@getOrders');
