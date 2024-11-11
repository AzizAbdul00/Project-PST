<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Galery>
 */
class GaleryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $image = fake()->imageUrl(1200, 800, 'animal', true, 'high-quality');
        // Log::info('Generating Image URL : ' . $image );
        return [
            // 'title' => Str::random(5),
            // 'image' => $image,
            // 'author_id' =>  User::factory()
        ];
    }
}