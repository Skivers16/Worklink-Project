<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\work_experience;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\work_experiences>
 */
class WorkExperiencesFactory extends Factory
{
    protected $model = work_experience::class;

    public function definition(): array
    {
        return [
            'Title' => $this->faker->jobTitle(),
            'employment_type' => $this->faker->randomElement(['Full-time', 'Part-time', 'Contract']),
            'company_name' => substr($this->faker->company(), 0, 20), // Limited to 20 chars as per migration
            'location' => substr($this->faker->city(), 0, 30), // Limited to 30 chars
            'start_date' => $this->faker->date(),
            'start_year' => $this->faker->year(),
            'end_date' => $this->faker->date(),
            'end_year' => $this->faker->year(),
            'profile_headline' => substr($this->faker->sentence(), 0, 50), // Limited to 50 chars
            'description' => substr($this->faker->paragraph(), 0, 200), // Limited to 200 chars
            'id_user' => User::factory()
        ];
    }
}
