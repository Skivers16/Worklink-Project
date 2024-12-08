<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class CareerShowcaseTest extends TestCase
{
    use RefreshDatabase;

    // Successfully create new experience record with valid user and request data
    public function test_store_creates_experience_with_valid_data()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
    
        $requestData = [
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
    
        $response = $this->post('/experience/store', $requestData);
    
        $this->assertDatabaseHas('experiences', [
            'Title' => 'Software Engineer',
            'company_name' => 'Tech Corp',
            'id_user' => $user->id
        ]);
    
        $response->assertRedirect('/utama');
    }    
}