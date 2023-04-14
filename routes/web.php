<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasicController;
use App\Http\Controllers\Crudcontroller;

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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/display', [BasicController::class, 'display'])->name('');
    Route::get('/pc', [BasicController::class, 'pc']);
    Route::get('/pc/{id}/display', [BasicController::class, 'pcfind']);

    Route::get('/lab', [BasicController::class, 'lab']);
    Route::get('/lab/{id}/pc', [BasicController::class, 'pcselect']);
});

Route::middleware('auth', 'isadmin')->group(function () {

    //admin

    //data
    Route::get('/data', [Crudcontroller::class, 'admincrud']);
    Route::post('/data', [Crudcontroller::class, 'dataentry']);
    Route::get('/data/{id}/edit', [Crudcontroller::class, 'dataedits']);
    Route::delete('/data/{id}', [Crudcontroller::class, 'datadelete']);
    Route::put('/data/{id}', [Crudcontroller::class, 'dataedit']);

    //lab
    Route::get('/labdata', [Crudcontroller::class, 'labcrud']);
    Route::post('/labdata', [Crudcontroller::class, 'labentry']);
    Route::delete('/labdata/{ḷab_id}', [Crudcontroller::class, 'labdelete']);
    Route::get('/labdata/{lab_id}/edit', [Crudcontroller::class, 'labedits']);

});

/*Route::get('/display', [BasicController::class,'display']);
Route::get('/pc', [BasicController::class,'pc']);
Route::get('/pc/{id}/display', [BasicController::class,'pcfind']);*/

require __DIR__ . '/auth.php';
