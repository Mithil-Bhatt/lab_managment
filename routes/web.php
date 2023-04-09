<?php

use Illuminate\Support\Facades\Route;
use App\Models\admin;
use App\Models\lab;
use App\Models\computer;
use App\Models\software;
use App\Models\Hardware;
use App\Http\Controllers\BasicController;
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

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/register', [BasicController::class,'adminstore']);
Route::post('/login', [BasicController::class,'login']);

Route::get('/display', [BasicController::class,'display']);