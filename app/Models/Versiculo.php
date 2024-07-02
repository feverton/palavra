<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Versiculo extends Model
{
    use HasFactory;
    protected $table ='tb_versiculos';

    public static function versiculos($traducao,$livro,$capitulo)
    {
        return DB::table('tb_versiculos')
        ->select(['tb_livros.descricao','tb_livros.abreviatura','tb_livros.testamento','tb_livros.categoria',
        'tb_capitulos.numero as nr_capitulo','tb_versiculos.numero as nr_versiculo','tb_versiculos.texto as versiculo',
        'tb_traducoes.sigla as sigla_traducao'])
        ->join('tb_traducoes','tb_versiculos.id_traducao','=','tb_traducoes.id')
        ->join('tb_capitulos','tb_versiculos.id_capitulo','=','tb_capitulos.id')
        ->join('tb_livros','tb_capitulos.id_livro','=','tb_livros.id')
        ->where('tb_livros.abreviatura',$livro)
        ->where('tb_traducoes.sigla',$traducao)
        ->where('tb_capitulos.numero',$capitulo)
        ->get();
    }
}
