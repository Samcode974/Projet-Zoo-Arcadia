<?php

namespace Database\Seeders;

use App\Models\Habitat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HabitatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Habitat::factory()->create([
            'nom' => 'Savane',
        ]);

        Habitat::factory()->create([
            'nom' => 'Marais',
        ]);

        Habitat::factory()->create([
            'nom' => 'Jungle',
        ]);
    }
}
