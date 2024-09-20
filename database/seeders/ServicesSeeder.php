<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::factory()->create([
            "nom"=>"Restauration"
        ]);
        Service::factory()->create([
            "nom"=>"Visite des habitats"
        ]);
        Service::factory()->create([
            "nom"=>"Visite du zoo en train"
        ]);
    }
}
