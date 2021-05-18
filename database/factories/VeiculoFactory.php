<?php

namespace Database\Factories;

use App\Models\Veiculo;
use Illuminate\Database\Eloquent\Factories\Factory;

class VeiculoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Veiculo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cliente_id'=>random_int(1,10),
            'descricao_veiculo'=>$this->faker->text(),					
            'chassi'=>$this->faker->word(),
            'placa'=>$this->faker->word(),
            'ano'=>random_int(1,1000),
            'combustivel'=>$this->faker->word(),
            'alienado'=>$this->faker->word(),
            'fator_de_ajuste'=>random_int(1,10)+(random_int(1,100)/100),
            'valor_de_referencia'=>random_int(1,10)+(random_int(1,100)/100),
            'cep_de_pernoite'=>$this->faker->word(),
            'garagem_na_residencia'=>$this->faker->word(),
            'garagem_no_trabalho'=>$this->faker->word(),
            'garagem_no_local_de_estudo'=>$this->faker->word(),
            'tipo_de_uso'=>$this->faker->word(),
            'reside_com_menores_de_26_anos'=>$this->faker->word(),
            'veiculos_na_residencia'=>$this->faker->word(),
            'km_mensal'=>random_int(1,10)+(random_int(1,100)/100),
            'tipo_de_residencia'=>$this->faker->word(),
            'distancia_ate_o_trabalho'=>random_int(1,10)+(random_int(1,100)/100),
        ];
    }
}
