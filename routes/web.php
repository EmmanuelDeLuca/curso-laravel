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

// Route::view('/jogos', 'jogos');

// Route::get('/jogos', function(){return 'Curso';});

// Route::view('/jogos', 'jogos',['name'=>'GTA']);

// Route::get('/jogos/{name?}', function($name = null){
//     return view('/jogos', ['nomeJogo' => $name]);
// }) ->where('name', '[A-Za-z]+');


// Route::get('/jogos/{id?}', function($id = null){
//     return view('/jogos', ['idJogo' => $id]);
// }) ->where('id', '[0-9]+');

// Route::get('/jogos/{id?}/{name?}', function($id = null, $name = null){
//     return view('jogos',['idJogo' =>$id, 'nomeJogo'=>$name]);
// }) ->where(['id' => '[0-9]+', 'name' => '[A-Za-z]+']);

// Route::get('/jogos', function(){
//     return view('jogos');
// });

// Route::get('/home', function () {
//     return view('welcome');
// })->name("home-index");

// Route::fallback(function(){
//     return 'Erro ao localizar a rota!';
// });