<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cliente;
use App\Models\Veiculo;
use App\Models\Seguradora;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Cliente::factory(10)->create();
        Veiculo::factory(10)->create();
        Seguradora::factory(20)->create();
    }
}
