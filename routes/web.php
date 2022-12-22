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

Route::get('/', 'App\Http\Controllers\PizzaController@index')->name('pizzafiles.index');

Route::get('/pizzalist', 'App\Http\Controllers\PizzaController@pizzalist')->name('pizzafiles.pizzalist')->middleware('auth');

Route::get('/pizzaid/{id}', 'App\Http\Controllers\PizzaController@pizzaid')->name('pizzafiles.pizzaid')->middleware('auth');

Route::get('/create', 'App\Http\Controllers\PizzaController@create')->name('pizzafiles.create');

Route::post('/', 'App\Http\Controllers\PizzaController@save_to_database')->name('pizzafiles.save');

Route::delete('/pizzalist/{id}', 'App\Http\Controllers\PizzaController@destroy')->name('pizzafiles.destroy')->middleware('auth');



Auth::routes([
    'register'=>false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
