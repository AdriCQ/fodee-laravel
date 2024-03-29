<?php

use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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

Route::get('/', [ViewController::class, 'index'])->name('welcome');
Route::get('/menu', [ViewController::class, 'menu'])->name('menu');
Route::post('/reserve', [ViewController::class, 'reserve'])->name('reserve.store');
Route::get('/reserve', function () {
    return redirect('/');
})->name('reserve.get');
Route::get('/dish-details/{id}', [ViewController::class, 'dishDetails'])->name('dish-details');
Route::get('/event-details/{id}', [ViewController::class, 'eventDetails'])->name('event-details');


Route::group(['prefix' => 'develop'], function () {
    Voyager::routes();
});
