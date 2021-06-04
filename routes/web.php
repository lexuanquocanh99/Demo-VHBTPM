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

Route::get('/', [App\Http\Controllers\AppController::class, 'index']);

Route::get('/pricing', function() {
    return view('pages.pricing');
});

Route::get('/customize', function () {
    return view('pages.customize');
});
