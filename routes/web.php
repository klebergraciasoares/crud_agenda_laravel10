<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [App\Http\Controllers\ContactController::class, 'index']);
Route::post('/addcontact', [App\Http\Controllers\ContactController::class, 'add']);
Route::get('/delete/{id}', [App\Http\Controllers\ContactController::class, 'delete']);
Route::get('/edit/{id}', [App\Http\Controllers\ContactController::class, 'edit']);
Route::post('/edit/{id}', [App\Http\Controllers\ContactController::class, 'update']);

/*
Route::get('/', [App\Http\Controllers\ContactController::class, 'index'])->name('index');
Route::get('/addcontact', [App\Http\Controllers\ContactController::class, 'add'])->name('add');
Route::get('/delete/{id}', [App\Http\Controllers\ContactController::class, 'delete'])->name('delete');
Route::get('/edit/{id}', [App\Http\Controllers\ContactController::class, 'edit'])->name('edit');
Route::any('/edit/{id}', [App\Http\Controllers\ContactController::class, 'update'])->name('update');
*/
