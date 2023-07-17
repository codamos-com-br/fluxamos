<?php

use App\Http\Controllers\CadastroControllers;
use Illuminate\Support\Facades\Route;
//rota do bd
use App\Http\Controllers\ProductController;


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

Route::get('/cadastros', [CadastroControllers::class, 'index']);

//Route db conection
Route::resource('/products', ProductController::class);
