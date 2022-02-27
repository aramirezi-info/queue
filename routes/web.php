<?php

use App\Http\Controllers\OrdersController;
use App\Http\Controllers\QueueController;
use App\Jobs\ProcessTransaction;
use App\Models\Order;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [OrdersController::class, 'index']);
Route::get('/colas', [QueueController::class, 'test1']);
Route::get('/colas/test2', [QueueController::class, 'test2']);
Route::get('/orders', function(){
    ProcessTransaction::dispatch();
});





