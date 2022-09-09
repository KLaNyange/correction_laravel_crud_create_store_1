<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokedex;

class PokedexController extends Controller
{
    public function index(){
        $pokemons = Pokedex::all();
        return view('welcome', compact('pokemons'));
    }

    public function create(){
        return view('pages.form');
    }

    public function store(Request $request ){
        $store = new Pokedex();
        $store->name = $request->name;
        $store->type = $request->type;
        $store->url = $request->url;
        $store->level = $request->level;
        $store->save();
        return redirect('/');
    }
}
