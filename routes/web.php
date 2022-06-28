<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('/producto', function () {
    return view('Producto.index');
});

Route::get('/producto/create', [App\Http\Controllers\ProductoController::class, 'create']);
Route::get('/producto/edit', [App\Http\Controllers\ProductoController::class, 'edit']);
Route::resource('producto','\App\Http\Controllers\ProductoController');


Auth::routes(); /*todo lo que tenga autenticado va a estar dentro de esta ruta*/

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/auth/register', [AutenticacionController::class, 'register'])->name('auth.register');

