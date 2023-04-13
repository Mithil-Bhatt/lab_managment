<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
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

    Route::get('/lab', function () {
        return view('lab');
    });

    //admin

});

Route::middleware('auth','isadmin')->group(function() {

    //admin

    Route::get('/data', [BasicController::class, 'admincrud']);
    Route::post('/data', [BasicController::class, 'dataentry']);
    Route::get('/data/{id}/edit', [BasicController::class, 'dataedits']);
    Route::delete('/data/{id}', [BasicController::class, 'datadelete']);
    Route::put('/data/{id}', [BasicController::class, 'dataedit']);
    

});

/*Route::get('/display', [BasicController::class,'display']);
Route::get('/pc', [BasicController::class,'pc']);
Route::get('/pc/{id}/display', [BasicController::class,'pcfind']);*/

require __DIR__ . '/auth.php';
