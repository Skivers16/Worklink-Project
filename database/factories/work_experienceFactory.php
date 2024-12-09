<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\work_experience;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\work_experiences>
 */
class work_experienceFactory extends Factory
{
    protected $model = work_experience::class;

    public function definition(): array
    {
        return [
            'Title' => substr($this->faker->jobTitle(), 0, 30), // Limit to 30 chars
            'employment_type' => $this->faker->randomElement(['Full-time', 'Part-time', 'Contract']),
            'company_name' => substr($this->faker->company(), 0, 20),
            'location' => substr($this->faker->city(), 0, 30),
            'start_date' => substr($this->faker->date(), 0, 10),
            'start_year' => substr($this->faker->year(), 0, 10),
            'end_date' => substr($this->faker->date(), 0, 10),
            'end_year' => substr($this->faker->year(), 0, 10),
            'profile_headline' => substr($this->faker->sentence(), 0, 50),
            'description' => substr($this->faker->paragraph(), 0, 200),
            'id_user' => User::factory()
        ];
    }
}
