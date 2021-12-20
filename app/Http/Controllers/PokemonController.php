<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index ()
    {
        $testes = ["teste 1", "teste2"];
        $pokemons = 
        array(
            "id" => array(0,1,2),
            "nome" => array("pikachu", "bulbasaur", "squirtle"),
            "tipo" => array("eletrico", "planta", "agua")
        );
              
        return view ("teste", ["pokemons" => $pokemons]);
       
    }
    //
    public function show($id)
    {
        return "Exibindo pokemon de id: {$id}";
    }
}
