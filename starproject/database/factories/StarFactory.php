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
    {
        return [
            'name' => $this->faker->name,
            'first_name' => $this->faker->firstName,
            'image' => $this->faker->imageUrl(640,480,'Star'),
            'description' => $this->faker->paragraph(15),
        ];
    }
}
