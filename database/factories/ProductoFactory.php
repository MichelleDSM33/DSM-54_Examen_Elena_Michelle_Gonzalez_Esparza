<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Producto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'cantidad' =>rand(1,100),
            'descripcion' => $this->faker->phoneNumber,
            'precio' =>rand(100,1000),
            'estatus' =>rand(1,2),
            'imagen' => $this->faker->imageUrl(1280,720),
            //llaves
            'categoria_id' => rand(1,10),
            'usuario_id' => rand(1,10),
            'cliente_id' => rand(1,10),
        ];
    }
}
