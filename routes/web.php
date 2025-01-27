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

Route::get('/', function () {

    $nome = "Ivar";
    $idade = 23;
    $arrNumerico = [10, 20, 30, 40, 50];
    $arrNomes = ["Emmanuel", "Ivar", "De Luca"];

    return view('welcome', ["nome" => $nome, 'idade' => $idade, 'arrNumerico' => $arrNumerico, 'arrNomes' => $arrNomes]);
});


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produtos', function () {

    $busca = request('search');

    return view('products', ['busca' => $busca]);
});

Route::get('/produtos_teste/{id?}', function ($id = null) {
    return view('produtos', ['id' => $id]);
});
