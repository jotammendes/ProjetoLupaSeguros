<?php

namespace Database\Factories;

use App\Models\Seguradora;
use Illuminate\Database\Eloquent\Factories\Factory;

class SeguradoraFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Seguradora::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'veiculo_id'=>random_int(1,10),
            'foto'=>"http://lorempixel.com.br/600/400/?".random_int(1,10),
            'nome'=>$this->faker->name(),					
            'cnpj'=>$this->faker->word(),
            'valor'=>random_int(1,10)+(random_int(1,100)/100),
            'detalhe_do_valor'=>$this->faker->word(),
            'franquia'=>random_int(1,10)+(random_int(1,100)/100),
            'cobertura'=>$this->faker->word(),
            'danos_materiais'=>random_int(1,10)+(random_int(1,100)/100),
            'danos_corporais'=>random_int(1,10)+(random_int(1,100)/100),
            'danos_morais'=>random_int(1,10)+(random_int(1,100)/100),
            'morte_invalidez'=>random_int(1,10)+(random_int(1,100)/100),
            'vidros'=>$this->faker->word(),
            'carro_reserva'=>$this->faker->word(),
            'assistencia'=>$this->faker->word(),
            'observacoes'=>$this->faker->word(),
        ];
    }
}
