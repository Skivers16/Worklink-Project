<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Experience>
 */
class ExperienceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Title' => $this->faker->jobTitle,
            'employment_type' => $this->faker->randomElement(['Full-time', 'Part-time', 'Contract']),
            'company_name' => substr($this->faker->company(), 0, 100),
            'location' => $this->faker->city,
            'start_date' => $this->faker->date(),
            'start_year' => $this->faker->year,
            'end_date' => $this->faker->date(),
            'end_year' => $this->faker->year,
            'profile_headline' => substr($this->faker->sentence(), 0, 100),
            'description' => $this->faker->paragraph
        ];
    }
}
