<?php

use App\Http\Controllers\CriarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventosController;

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

Route::get('/produtos', function () {   
    $busca = request('search');
    return view('produtos', ['busca' => $busca]);});

Route::get('/criarevento', function () {
    return view('criarevento');
});

Route::get('/eventos',[EventosController::class,'index']);
Route::get('/criar',[CriarController::class,'index']);

