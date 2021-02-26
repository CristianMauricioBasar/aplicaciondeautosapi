<?php

namespace Database\Factories;

use App\Models\imagene;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\auto;

class imageneFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = imagene::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'titulo' => $this->faker->text($maxNbChars = 25),
          'imagen' => $this->faker->image('public/storage/autos/imagenes',580,280, 'imagenes', null, false),
          'descripcion' => $this->faker->text($maxNbChars = 150),
          'auto_id' => auto::latest()->first()->id,
        ];
    }
}
