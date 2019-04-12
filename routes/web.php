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

Route::get('/','LoginController@index')->name('login.index');
Route::post('/','LoginController@check');

Route::group(['middleware' => 'authSession'], function () {
 Route::get('/seller', 'SellerController@index')->name('seller.index');

 Route::get('/seller/account/daily_sells_report', 'AccountIndiaController@showReport')->name('account.showReport');
 /*
|--------------------------------------------------------------------------
| Account India module Routes
|--------------------------------------------------------------------------
|
 */
 Route::get('/seller/account/money_transfer', 'AccountIndiaController@moneyTransfer')->name('account.moneyTransfer');
 Route::post('/seller/account/money_transfer', 'AccountIndiaController@storeMoneyTransferInfo');
 
 Route::get('/seller/account/add_customer', 'AccountIndiaController@addCustomer')->name('account.addCustomer');
 Route::post('/seller/account/add_customer', 'AccountIndiaController@storeCustomerInfo');
 
 Route::get('/seller/account/add_daily_sells', 'AccountIndiaController@index')->name('account.index');
 Route::post('/seller/account/add_daily_sells', 'AccountIndiaController@storeDailySells');
 
 /*
|--------------------------------------------------------------------------
| Inventory module Routes
|--------------------------------------------------------------------------
|
 */

 Route::get('/seller/inventory/confirm_shipment', 'InventoryController@confrimShipment')->name('inventory.confrimShipment');
 
 Route::get('/seller/inventory/add_product', 'InventoryController@addProduct')->name('inventory.addProduct');
 Route::post('/seller/inventory/add_product', 'InventoryController@storeProduct');
 
 Route::get('/seller/inventory/product_info_report', 'InventoryController@productInfoReport')->name('inventory.productInfoReport');
 
 Route::get('/seller/inventory/shipment_report', 'InventoryController@shipmentReport')->name('inventory.shipmentReport'); 
});

 /*
|--------------------------------------------------------------------------
| Logout module Routes
|--------------------------------------------------------------------------
|
 */

Route::get('/logout','LogoutController@index')->name('logout.index');