<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;


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
    return view('landing');
});

Route::resource('home', HotelController::class);
Route::get('/home', [HotelController::class, 'index'])-> name('home');
Route::get('/add', [HotelController::class, 'add'])-> name('add');
Route::post('/store', [HotelController::class, 'store'])-> name('store');

Route::get('/detail/{id}', [HotelController::class, 'detail'])-> name('detail');

Route::get('/delete/{id}', [HotelController::class, 'delete'])-> name('delete');

Route::get('/tampilkandata/{id}', [HotelController::class, 'tampilkandata'])-> name('tampilkandata');

Route::post('/update/{id}', [HotelController::class, 'update'])-> name('update');



