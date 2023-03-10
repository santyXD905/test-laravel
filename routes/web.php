<?php

use Illuminate\Support\Facades\Route;

//usar controller

use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ArgentinoController;

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

//grupo de rutas

Route::controller(ArgentinoController::class)->group(function(){
    Route::get('/argentino/funo', [ArgentinoController::class,"funo"]);
    Route::get('/argentino/fudos', [ArgentinoController::class,"funo2"]);
    Route::get('/argentino/futres', [ArgentinoController::class,"funo3"]);

});

//grupo de rutas