<?php

namespace Database\Factories;

use App\Models\filtrarpor;
use Illuminate\Database\Eloquent\Factories\Factory;

class filtrarporFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = filtrarpor::class;

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
