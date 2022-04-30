<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'isbn' =>$this->faker->text(10),
            'titulo' =>$this->faker->text(20),
            'annio_publicacion' =>$this->faker,
            'precio' =>$this->faker,
            'descripcion' =>$this->faker
        ];
    }
}