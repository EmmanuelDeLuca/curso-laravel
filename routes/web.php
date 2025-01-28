<?php

use Illuminate\Support\Facades\Route;

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


use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']); //index - mostrar todos os registros
Route::get('/events/create', [EventController::class, 'create']); // create- mostrar o formulario de registro no banco
Route::get('/events/{id}', [EventController::class, 'show']); // mostrar um dado especifico
Route::post('/events', [EventController::class, 'store']); // enviar os dados pro banco


Route::get('/contact', function () {
    return view('contact');
});
