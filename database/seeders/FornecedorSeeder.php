<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fornecedor;


class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'for1';
        $fornecedor->site = 'for1.com.br';
        $fornecedor->uf = 'MS';
        $fornecedor->email = 'for1@gmail.com';
        $fornecedor->save();

        Fornecedor::create([
            'nome' => 'Fornecedor 1',
            'site' => 'site.com.br',
            'uf' => 'ms',
            'email' => 'emial@gmail.com'
        ]);

        
    }
}