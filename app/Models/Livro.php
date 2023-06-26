<?php

namespace App\Models;
use App\Models\Genero;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model{
    protected $fillable = ['titulo', 'autor', 'ano_publicacao', 'capa'];

    public function genero()
    {
        return $this->belongsTo(Genero::class);
    }
}
?>