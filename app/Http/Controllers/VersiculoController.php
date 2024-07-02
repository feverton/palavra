<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Versiculo;

class VersiculoController extends Controller
{
    public function versiculos($traducao,$livro,$capitulo)
    {
        return Versiculo::versiculos($traducao,$livro,$capitulo);
    }
}
