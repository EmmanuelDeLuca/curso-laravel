<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $nome = "Ivar";
        $idade = 23;
        $arrNumerico = [10, 20, 30, 40, 50];
        $arrNomes = ["Emmanuel", "Ivar", "De Luca"];

        return view('welcome', ["nome" => $nome, 'idade' => $idade, 'arrNumerico' => $arrNumerico, 'arrNomes' => $arrNomes]);
    }

    public function create() {
        return view('events.create');
    }
}
