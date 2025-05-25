<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SiteInfo>
 */
class SiteInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->domainName(),
            'acronym' => fake()->name(),
            'image' => fake()->imageUrl(),
            'story' => Str::random(30),
            'description' => Str::random(40),
            'mission' => Str::random(30),
            'vision' => Str::random(30),
            'values' => Str::random(30)
        ];
    }
}
