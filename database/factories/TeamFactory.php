<?php

namespace Database\Factories;

use App\Models\TeamType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'team_type_id' => TeamType::factory(),
            'team_name' => fake()->unique()->word(),
            'sport_type' => fake()->unique()->word(),
            'invitation_link' => fake()->unique()->url()
        ];
    }
}
