<?php

namespace Database\Factories;

use App\Models\Datos;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DatosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */

    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Datos::class;

    public function definition()
    {
        return [
            'dato' => $this->faker->name,
            'pais' => $this->faker->name,
        ];
    }
}
