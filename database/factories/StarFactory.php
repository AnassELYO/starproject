<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Star;

class StarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Star::class;

    public function definition()
    { /* A l'appel de la classe, permet de generer une Star avec des données fictives realiste grace à la librairie Faker */
        return [
            'name' => $this->faker->name,
            'first_name' => $this->faker->firstName,
            'image' => $this->faker->imageUrl(640,480,'Star'),
            'description' => $this->faker->paragraph(15),
        ];
    }
}
