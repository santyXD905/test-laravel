<?php

use Illuminate\Support\Facades\Route;

//usar controller

use App\Http\Controllers\PersonaController;

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
    return view('test');
});

Route::get('/procesar', function () {
    return view('procesar');
});

Route::get('/persona/si', [PersonaController::class,"primera"]); 

//require_once llamar clases

Route::get('/persona/no', [PersonaController::class,"segunda"]);