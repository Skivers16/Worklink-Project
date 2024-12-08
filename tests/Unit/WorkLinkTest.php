<?php

namespace Tests\Feature;  // Ensure your test is in the correct namespace

use Tests\TestCase;
use App\Models\User;  // Import the User model
use Illuminate\Foundation\Testing\RefreshDatabase;  // Optional, but useful for testing with a fresh DB

// Successfully create new experience record with all valid fields
class WorkLinkTest extends TestCase
{
    public function test_store_creates_experience_with_valid_data()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $experienceData = [
            'title' => 'Software Engineer',
            'employment_type' => 'Full-time',
            'company_name' => 'Tech Corp',
            'location' => 'San Francisco',
            'start_date' => '2023-01-01',
            'start_year' => '2023',
            'end_date' => '2023-12-31',
            'end_year' => '2023',
            'profile_headline' => 'Senior Developer',
            'description' => 'Leading development team'
        ];

        $response = $this->post('/experience/store', $experienceData);

        $this->assertDatabaseHas('experiences', [
            'Title' => 'Software Engineer',
            'company_name' => 'Tech Corp',
            'id_user' => $user->id
        ]);

        $response->assertRedirect('/utama');
    }
}
