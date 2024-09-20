<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                "nom"=>fake()->name(),
                "description"=>fake()->text(100),
                "image"=>fake()->imageUrl(1920, 1080, 'animals', true, 'cats')
                ];
    }
}
