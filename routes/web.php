<?php

use App\Http\Controllers\MaterialController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ServicoController;


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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::resources([
    'clientes' => ClienteController::class,
    'materiais' => MaterialController::class,
    'servicos' => ServicoController::class
    
]);