<?php

use App\Http\Controllers\MahasiswaController;
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

Route::get('/Dashboard', function () {
    return view('Dashboard.index',[
        "title" => "Dashboard"
    ]);
});

Route::get('/create', function () {
    return view('Dashboard.create');
});

Route::get('/createDS', function () {
    return view('Dashboard.createDS');
});

Route::get('/about', function () {
    return view('Dashboard.about',[
        "title" => "About"
    ]);
});

Route::resource('Dashboard', MahasiswaController::class);
