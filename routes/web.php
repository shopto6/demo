<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomerController;

use App\Http\Controllers\adminController;
use App\Models\Customers;
use App\Http\Controllers\productcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




Route::get('/customer', [CustomerController ::class,'index']);
Route::post('/customer', [CustomerController ::class,'store']);

Route::get('/customer/view', [CustomerController ::class,'view']);




Route::get('/customer/delete/{id}', [CustomerController ::class,'delete'])->name('customer.delete');
Route::get('/customer/edit/{id}', [CustomerController ::class,'edit'])->name('customer.edit');
Route::post('/customer/update/{id}', [CustomerController ::class,'update'])->name('customer.update');
 


Route::post('product',[productcontroller::class,'insert']);
Route::get('/product',[productcontroller::class,'readdata']);

Route::view('update','updateproduct');
Route::get('updatedelete',[productcontroller::class,'updateordelete']);
?>

