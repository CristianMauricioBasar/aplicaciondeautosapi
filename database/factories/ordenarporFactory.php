<?php

namespace Database\Factories;

use App\Models\ordenarpor;
use Illuminate\Database\Eloquent\Factories\Factory;

class ordenarporFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ordenarpor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'nombre' => $this->faker->text($maxNbChars = 14),
        ];
    }
}
