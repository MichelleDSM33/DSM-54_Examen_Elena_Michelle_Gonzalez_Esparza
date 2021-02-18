<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Categoria;
use App\Models\Venta;
use App\Models\Cliente;
use App\Models\Producto;
class DatabaseSeeder extends Seeder

{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
    User::factory(10)->create();
    Cliente::factory(10)->create();
    Categoria::factory(10)->create();
    Producto::factory(10)->create();
    Venta::factory(10)->create();
    }
}
