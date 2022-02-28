<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Star;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Star::factory()->count(8)->create();
        $this->call([
            UserSeeder::class,
        ]);
        
    }
}
