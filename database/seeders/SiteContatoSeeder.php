<?php

namespace Database\Seeders;

use App\Models\SiteContato;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $contato = new SiteContato();
        // $contato->nome = 'Thiago';
        // $contato->telefone = '67 998148524';
        // $contato->email = 'thiago@gmail.com';
        // $contato->motivo = 1;
        // $contato->mensagem = 'menssagem de teste';

        // $contato->save();

       SiteContato::factory()->count(100)->create();
    }
}