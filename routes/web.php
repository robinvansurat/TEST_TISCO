<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExController;
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
    return view('route');
});

Route::get('/ex1', function () {
    return view('ex1');
});

Route::post('/ex1/cal', [ExController::class, 'ex1Cal']);

Route::get('/ex2', function () {
    return view('ex2');
});
Route::post('/ex2/cal', [ExController::class, 'ex2Cal']);
