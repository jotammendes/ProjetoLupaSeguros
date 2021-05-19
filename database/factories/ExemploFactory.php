<?php

namespace Database\Factories;

use App\Models\Exemplo;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExemploFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Exemplo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'imagem' => "http://lorempixel.com.br/600/400/?".random_int(1, 10),
            'nome' => $this->faker->name(),
            'valor' => random_int(1, 10) + (random_int(1, 100) / 100),
            'quantidade' => random_int(1, 10), 
            'data' => now(),
            'categoria_id' => random_int(1, 5),
        ];
    }
}
