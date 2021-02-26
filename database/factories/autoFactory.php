<?php

namespace Database\Factories;

use App\Models\auto;
use Illuminate\Database\Eloquent\Factories\Factory;

class autoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = auto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'titulo' => $this->faker->text($maxNbChars = 15),
          'modelo' => $this->faker->numberBetween($min = 2015, $max = 2021),
          'precio' => $this->faker->numberBetween($min = 800000, $max = 6000000),
          'imagen' => $this->faker->image('public/storage/autos',580,280,'auto', null, false),
          'descripcion' => $this->faker->text($maxNbChars = 150),
        ];
    }
}
