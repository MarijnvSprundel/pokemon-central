<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PokedexController extends Controller
{
    public function index()
    {
        return view('pokedex.index');
    }
}
