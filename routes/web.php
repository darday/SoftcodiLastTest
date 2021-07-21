<?php

use App\Http\Controllers\ContablesController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contables', [ContablesController::class, 'index'])->name('list_contable');
Route::get('/contables-agregar', [ContablesController::class, 'create'])->name('contable');
Route::post('/contables-store', [ContablesController::class, 'store'])->name('contable');
Route::get('/contables-edit/{id}/edit', [ContablesController::class, 'edit'])->name('edit-contable');
Route::patch('/update-contable/{id}', [ContablesController::class, 'update'])->name('upd-contable');
Route::delete('/delete-contable/{contable_id}', [ContablesController::class, 'destroy'])->name('delete_contable');

