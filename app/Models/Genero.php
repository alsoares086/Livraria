<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $fillable = ['nome'];

    public function livros()
    {
        return $this->hasMany(Livro::class);
    }
}
