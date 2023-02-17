<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PdfController;
use \App\Http\Controllers\InvoiceController;
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
Route::get('pdf', [PdfController::class, 'index']);
Route::get('get/item', 'ItemController@get');
Route::get('get/invoice', 'InvoiceController@get');



Route::get('/print/{id}', 'InvoiceController@invoiceView')->where(['id' => '[0-9]{1,5}']);


Route::get('edit/invoice', 'InvoiceController@edit');
Route::post('save/invoice', 'InvoiceController@save');
Route::post('save/invoice/items', 'InvoiceController@saveItems');
Route::get('/invoice',[InvoiceController::class, 'index']); 

