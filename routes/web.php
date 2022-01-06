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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// redirecciona al la web de compras
Route::get('/comprar', function () {
    return view('comprar');
});


// abre el detalle de el evento seleccionado
Route::get('/evento', function () {
    return view('evento');
});

// abre el intranet de el evento seleccionado
Route::get('/intranet', function () {
    return view('intranet');
});

// abre la opcion de comprar
Route::get('/comprar', function () {
    return view('comprar');
});
