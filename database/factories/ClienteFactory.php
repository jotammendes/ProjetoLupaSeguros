<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome'=>$this->faker->name() ,
            'cpf'=>$this->faker->word(),
            'data_nascimento'=>now(), 
            'estado_civil'=>$this->faker->word(),
            'genero'=>$this->faker->word(),
            'telefone'=>$this->faker->word(),
            'email'=>$this->faker->email(),
            'seguradora_anterior'=>$this->faker->word(),
            'preco_anterior'=>random_int(1,10)+(random_int(1,100)/100),
            'bonus'=>random_int(1,10),
            'vigencia_entrada'=>now(),
            'vigencia_saida'=>now()
        ];
    }
}
