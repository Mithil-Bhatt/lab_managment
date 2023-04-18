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
    Route::get('/pc/{computer_id}/display', [BasicController::class, 'pcfind']);

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
    Route::delete('/labdata/{lab_id}', [Crudcontroller::class, 'labdelete']);
    Route::get('/labdata/{lab_id}/edit', [Crudcontroller::class, 'labedits']);
    Route::put('/labdata/{lab_id}', [Crudcontroller::class, 'labdataedit']);

    //sofware
    Route::get('/softwaredata', [Crudcontroller::class, 'softwarecrud']);
    Route::post('/softwaredata', [Crudcontroller::class, 'softwareentry']);
    Route::get('/softwaredata/{id}/edit', [Crudcontroller::class, 'softwaredataedits']);
    Route::delete('/softwaredata/{id}', [Crudcontroller::class, 'softwaredatadelete']);
    Route::put('/softwaredata/{id}', [Crudcontroller::class, 'softwaredataedit']);


    //hardware
    Route::get('/hardwaredata', [Crudcontroller::class, 'hardwarecrud']);
    Route::post('/hardwaredata', [Crudcontroller::class, 'hardwareeentry']);
    Route::get('/hardwaredata/{id}/edit', [Crudcontroller::class, 'hardwaredataedits']);
    Route::delete('/hardwaredata/{id}', [Crudcontroller::class, 'hardwaredatadelete']);
    Route::put('/hardwaredata/{id}', [Crudcontroller::class, 'hardwaredataedit']);


    //computer
    Route::get('/computerdata', [Crudcontroller::class, 'computercrud']);
    Route::post('/computerdata', [Crudcontroller::class, 'computerentry']);
    Route::get('/computerdata/{computer_id}/edit', [Crudcontroller::class, 'computerdataedits']);
    Route::delete('/computerdata/{computer_id}', [Crudcontroller::class, 'computerdatadelete']);
    Route::put('/computerdata/{computer_id}', [Crudcontroller::class, 'computerdataedit']);

});

/*Route::get('/display', [BasicController::class,'display']);
Route::get('/pc', [BasicController::class,'pc']);
Route::get('/pc/{id}/display', [BasicController::class,'pcfind']);*/

require __DIR__ . '/auth.php';
