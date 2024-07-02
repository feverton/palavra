<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivroController extends Controller
{
    public function mostra($testamento=null) 
    {
        if($testamento==null) {
            return Livro::all();
        }
        return Livro::where('testamento',$testamento)->get();
    }

    public function capitulos($livro) 
    {
        return Livro::find(Livro::where('abreviatura',$livro)->select('id'))->capitulos;
    }

    public function categorias()
    {
        return Livro::select('categoria as ct')->distinct()->get();
    }
}
