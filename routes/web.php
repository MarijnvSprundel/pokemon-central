<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PokedexController;
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
    return redirect()->route('index');
});

Route::get('/home', [HomeController::class, 'index'])->name('index');

Route::get('/pokedex', [PokedexController::class, 'index'])->name('pokedex.index');
