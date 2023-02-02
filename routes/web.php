<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\OperacionesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\WriterController;
//necesario al introducir el slug
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect; 

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

//ruta de inicio
Route::get('/', function () {
    return view('inicio');
})->name('inicio');

//ruta ----- LIBROS ----
Route::get('libros', [LibrosController::class, 'listarLibros']);

Route::get('listarPrimos/{numero}', [OperacionesController::class, 'listarPrimos']);
Route::get('factorial/{numero}', [OperacionesController::class, 'factorial']);

//RUTAS SOBRE POSTS
Route::resource('posts', PostController::class)
->parameters(['post' => 'slug'])
->missing(function (Request $request){
    return Redirect::route('posts.index');
});

//RUTAS SOBRE OFERTAS
Route::get('sales/empresa/{nombre}', [SaleController::class, 'empresa']);

Route::resource('sales', SaleController::class)
->except([
    'store', 'update'
]);

//RUTAS SOBRE AUTORES
//RUTAS SOBRE POSTS
Route::resource('writers', WriterController::class)
->except([
    'store', 'update'
]);


