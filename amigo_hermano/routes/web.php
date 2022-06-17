<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CapacitoresController;
use App\Http\Controllers\HijosresController;
use App\Http\Controllers\MenuController;

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
Route::get('/create', [HijosresController::class, 'create']);
Route::get('/destroy', [HijosresController::class, 'index']);

Route::resource('hmenor', HijosresController::class);
Route::resource('hmayor', CapacitoresController::class);

Route::post('/updateidea/{id}',[CapacitoresController::class, 'update'])->name('updateidea');
Route::get('/destroy/{id}',[CapacitoresController::class, 'destroy'])->name('destroy');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('layouts.main');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
