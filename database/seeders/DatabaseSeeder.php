<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Cliente;
use App\Models\Veiculo;
use App\Models\Seguradora;

use App\Models\CategoriaExemplo;
use App\Models\Exemplo;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        Cliente::factory(10)->create();
        Veiculo::factory(10)->create();
        Seguradora::factory(20)->create();

        CategoriaExemplo::factory(5)->create();
        Exemplo::factory(15)->create();
    }
}
