<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Livro extends Model
{
    use HasFactory;
    protected $table = 'tb_livros';

    public function capitulos(): HasMany
    {
        return $this->hasMany(Capitulo::class,'id_livro');
    }

}
