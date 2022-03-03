<?php

namespace Database\Seeders;

use App\Models\Star;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class StarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->faker = Faker::create();

        DB::table('stars')->insert([
            'name' => 'Pacino',
            'first_name' => 'Alfredo James',
            'image' => '/storage/al-pacino.jpg',
            'description' => $this->faker->paragraph(15)
        ]);

        DB::table('stars')->insert([
            'name' => 'Milano',
            'first_name' => 'Alissa',
            'image' => '/storage/alyssa-milano.jpg',
            'description' => $this->faker->paragraph(15)
        ]);

        DB::table('stars')->insert([
            'name' => 'Jolie',
            'first_name' => 'Angelina',
            'image' => '/storage/angelina-jolie.jpg',
            'description' => $this->faker->paragraph(15)
        ]);

        DB::table('stars')->insert([
            'name' => 'Pitt',
            'first_name' => 'Brad',
            'image' => '/storage/brad-pitt.jpg',
            'description' => $this->faker->paragraph(15)
        ]);

        DB::table('stars')->insert([
            'name' => 'Watson',
            'first_name' => 'Emma',
            'image' => '/storage/emma-watson.jpg',
            'description' => $this->faker->paragraph(15)
        ]);

        DB::table('stars')->insert([
            'name' => 'Reno',
            'first_name' => 'Jean',
            'image' => '/storage/jean-reno.jpg',
            'description' => $this->faker->paragraph(15)
        ]);

        DB::table('stars')->insert([
            'name' => 'Di Caprio',
            'first_name' => 'Leonardo',
            'image' => '/storage/leonardo-dicaprio.jpg',
            'description' => $this->faker->paragraph(15)
        ]);

        DB::table('stars')->insert([
            'name' => 'De Niro',
            'first_name' => 'Robert',
            'image' => '/storage/robert-deniro.jpg',
            'description' => $this->faker->paragraph(15)
        ]);
    }
}
