<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\SiteContato;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SiteContato>
 */
class SiteContatoFactory extends Factory
{

    protected $model = SiteContato::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => fake()->name(),
            'telefone' => fake()->tollFreePhoneNumber(),
            'email' => fake()->unique()->email(),
            'motivo' => fake()->numberBetween(1, 3),
            'mensagem' => fake()->text(200)
        ];
    }
}