<?php

use App\Http\Controllers\PokedexController;
use Illuminate\Routing\Router;
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





Route::get('/', [PokedexController::class, 'index']);
Route::get('/formulaire', [PokedexController::class, 'create'])->name('formulaire');
Route::post('/store', [PokedexController::class, 'store'])->name('store');


