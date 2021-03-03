<?php

use App\Http\Controllers\PhotoController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use NunoMaduro\Collision\Adapters\Laravel\Commands\TestCommand;

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

Route::get('/qwerty', function () {
    return view('qwerty');
});

Route::get('/product', 'ProductController@index');
Route::get('/testaja', 'ProductController@testaja');

Route::resource('photos', 'PhotoController'::class);