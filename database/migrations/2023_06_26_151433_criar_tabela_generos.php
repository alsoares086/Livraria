<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('generos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->timestamps();
        });
    
        //incluindo alguns gêneros literários na tabela para vincular aos livros cadastrados
         $generos = [
            ['nome' => 'Romance'],
            ['nome' => 'Ficção Científica'],
            ['nome' => 'Mistério'],
            ['nome' => 'Fantasia'],
            ['nome' => 'Infantojuvenil'],
            ['nome' => 'Terror'],
            ['nome' => 'Biografia'],
            ['nome' => 'Autoajuda']
        ];
    
        foreach ($generos as $genero) {
            DB::table('generos')->insert($genero);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('generos');
    }
};
