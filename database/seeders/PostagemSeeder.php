<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('postagens')->insert([
            'categoria_id' => 1,
            'user_id' => 1,
            'titulo' => "Primeira postagem",
            'conteudo' => "teste primeira postagem",
        ]);
        DB::table('postagens')->insert([
            'categoria_id' => 2,
            'user_id' => 1,
            'titulo' => "segunda postagem",
            'conteudo' => "teste segunda postagem",
        ]);
        DB::table('postagens')->insert([
            'categoria_id' => 3,
            'user_id' => 1,
            'titulo' => "terceira postagem",
            'conteudo' => "teste terceira postagem",
        ]);
    }
}
