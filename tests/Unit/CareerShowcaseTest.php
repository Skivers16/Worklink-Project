<?php

namespace Tests\Feature;

use App\Http\Controllers\DashboardController;
use App\Models\User;
use App\Models\Experience;
use App\Models\work_experience;
use Database\Factories\WorkExperiencesFactory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;  // Pastikan menggunakan Hash facade untuk verifikasi password
use Tests\TestCase;

class CareerShowcaseTest extends TestCase
{
    // public function test_update_experience_with_valid_data_for_existing_user()
    // {
    //     // Mencari user yang sudah ada dengan email 'arief@gmail.com'
    //     $user = User::where('email', 'arief@gmail.com')->first();
    //     $id_user = User::where('email','arief@gmail.com')->first()->id;

    //     // Pastikan user ditemukan
    //     $this->assertNotNull($user, 'User with email arief@gmail.com not found');

    //     // Verifikasi apakah password sesuai dengan yang disimpan di database
    //     $this->assertTrue(Hash::check('12345', $user->password), 'Password does not match');

    //     // Melakukan login sebagai user yang ditemukan
    //     $this->actingAs($user);

    //     // Membuat pengalaman (experience) untuk user
    //     $experience = Experience::factory()->create([
    //         'id_user' => $user->id // Menyimpan id_user sesuai dengan id user yang login
    //     ]);

    //     // Data yang ingin diupdate
    //     $updatedData = [
    //         'title' => 'Senior Developer',
    //         'employment_type' => 'Full-time',
    //         'company_name' => 'Tech Corp',
    //         'location' => 'New York',
    //         'start_date' => '2023-01-01',
    //         'start_year' => '2023',
    //         'end_date' => '2023-12-31',
    //         'end_year' => '2023',
    //         'profile_headline' => 'Tech Lead',
    //         'description' => 'Leading development team'
    //     ];

    //     // Melakukan request PUT untuk mengupdate pengalaman yang sudah ada
    //     $response = $this->put('/utama/expr-edit/{id}', $updatedData);

    //     // Mengecek apakah redirect URL sesuai setelah update
    //     $response->assertRedirect('/utama');

    //     // Mengecek apakah data pengalaman yang diupdate sudah sesuai di database
    //     $this->assertDatabaseHas('experience', [
    //         'id' => $experience->id,
    //         'title' => 'Senior Developer',
    //         'company_name' => 'Tech Corp',
    //         'location' => 'New York',  // Memastikan lokasi juga terupdate
    //         'id_user' => $user->id // Memastikan id_user sesuai dengan id_user yang login
    //     ]);
    // }

    // Successfully updates existing experience record with valid data
    // public function test_update_experience_with_valid_data()
    // {
    // $user = User::factory()->create();
    // $this->actingAs($user);
    // 
    // $experience = Experience::factory()->create([
    // 'id_user' => $user->id
    // ]);
    // 
    // $requestData = [
    // 'title' => 'Software Engineer',
    // 'employment_type' => 'Full-time',
    // 'company_name' => 'Tech Corp',
    // 'location' => 'San Francisco',
    // 'start_date' => '2023-01-01',
    // 'start_year' => '2023',
    // 'end_date' => '2023-12-31',
    // 'end_year' => '2023',
    // 'profile_headline' => 'Senior Developer',
    // 'description' => 'Leading development team'
    // ];
    // 
    // $request = Request::create('/utama/expr-add', 'POST', $requestData);
    // 
    // $controller = new DashboardController();
    // $response = $controller->update2($request, $experience->id);
    // 
    // $this->assertDatabaseHas('experience', [
    // 'id' => $experience->id,
    // 'Title' => 'Software Engineer',
    // 'company_name' => 'Tech Corp'
    // ]);
    // 
    // $this->assertEquals('/utama', parse_url($response->getTargetUrl(), PHP_URL_PATH));
    // }
    // }



    // Handle missing or null values in request parameters
    // public function test_update_experience_with_null_values()
    // {
    // $user = User::factory()->create();
    // $this->actingAs($user);
    // 
    // $existingExperience = Experience::factory()->create([
    // 'Title' => 'Existing Title',
    // 'employment_type' => 'Full Time',
    // 'company_name' => 'Existing Company',
    // 'id_user' => $user->id
    // ]);
    // 
    // $request = new Request([
    // 'title' => null,
    // 'employment_type' => null,
    // 'company_name' => null,
    // 'location' => null,
    // 'start_date' => null,
    // 'start_year' => null,
    // 'end_date' => null,
    // 'end_year' => null,
    // 'profile_headline' => null,
    // 'description' => null
    // ]);
    // $controller = new DashboardController();
    // $response = $controller->update2($request, $existingExperience->id);
    // 
    // $this->assertDatabaseHas('experience', [
    // 'id' => $existingExperience->id,
    // 'Title' => null,
    // 'employment_type' => null,
    // 'company_name' => null
    // ]);
    // 
    // $this->assertEquals('/utama', parse_url($response->getTargetUrl(), PHP_URL_PATH));
    // }

    // Successfully updates existing experience record with valid input data
    // public function test_update_experience_with_valid_data()
    // {
    // 
    // $user = User::factory()->create();
    // $this->actingAs($user);
    // 
    // $existingExperience = Experience::factory()->create([
    // 'Title' => 'Old Title',
    // 'employment_type' => 'Full Time',
    // 'company_name' => 'Old Company',
    // 'id_user' => $user->id
    // ]);
    // 
    // $request = new Request([
    // 'title' => 'Software Engineer',
    // 'employment_type' => 'Part Time',
    // 'company_name' => 'Tech Corp',
    // 'location' => 'New York',
    // 'start_date' => '2023-01-01',
    // 'start_year' => '2023',
    // 'end_date' => '2023-12-31',
    // 'end_year' => '2023',
    // 'profile_headline' => 'Senior Developer',
    // 'description' => 'Led development team'
    // ]);
    // 
    // $controller = new DashboardController();
    // $response = $controller->update2($request, $existingExperience->id);
    // 
    // 
    // $this->assertDatabaseHas('experience', [
    // 'id' => $existingExperience->id,
    // 'Title' => 'Software Engineer',
    // 'employment_type' => 'Part Time',
    // 'company_name' => 'Tech Corp'
    // ]);
    // 
    // $this->assertEquals('/utama', parse_url($response->getTargetUrl(), PHP_URL_PATH));
    // }

    // Successfully deletes an existing experience record when valid ID is provided
    // public function test_destroy_deletes_existing_experience()
    // {
    // $experience = Experience::factory()->create();
    // 
    // $controller = new DashboardController();
    // 
    // $response = $controller->destroy($experience->id);
    // 
    // $this->assertDatabaseMissing('experiences', ['id' => $experience->id]);
    // 
    // $this->assertInstanceOf(RedirectResponse::class, $response);
    // 
    // $this->assertEquals('/utama', parse_url($response->getTargetUrl(), PHP_URL_PATH));
    // }

    // Successfully creates new work experience record with valid input data
    // public function test_store3_creates_work_experience_with_valid_data()
    // {
    // $user = User::factory()->create();
    // $this->actingAs($user);
    // 
    // $workExperienceData = [
    // 'title' => 'Software Engineer',
    // 'employment_type' => 'Full-time',
    // 'company_name' => 'Tech Corp',
    // 'location' => 'San Francisco',
    // 'start_date' => '2022-01-01',
    // 'start_year' => '2022',
    // 'end_date' => '2023-01-01',
    // 'end_year' => '2023',
    // 'profile_headline' => 'Senior Developer',
    // 'description' => 'Led development team'
    // ];
    // 
    // $request = Request::create('/utama/work-add', 'POST', $workExperienceData);
    // 
    // $controller = new DashboardController();
    // $response = $controller->store3($request);
    // 
    // $this->assertDatabaseHas('work_experience', [
    // 'Title' => 'Software Engineer',
    // 'company_name' => 'Tech Corp',
    // 'id_user' => $user->id
    // ]);
    // 
    // $this->assertEquals('/utama', parse_url($response->getTargetUrl(), PHP_URL_PATH));
    // }

    // Store3 method handles empty fields gracefully and does not create a work experience record.
    // public function test_store3_handles_empty_fields()
    // {
    // $user = User::factory()->create();
    // $this->actingAs($user);
    // 
    // $workExperienceData = [
    // 'title' => '',
    // 'employment_type' => '',
    // 'company_name' => '',
    // 'location' => '',
    // 'start_date' => '',
    // 'start_year' => '',
    // 'end_date' => '',
    // 'end_year' => '',
    // 'profile_headline' => '',
    // 'description' => ''
    // ];
    // 
    // $request = Request::create('/utama/work-add', 'POST', $workExperienceData);
    // 
    // $controller = new DashboardController();
    // $response = $controller->store3($request);
    // 
    // $this->assertDatabaseMissing('work_experience', [
    // 'id_user' => $user->id
    // ]);
    // 
    // $this->assertTrue(session()->has('errors'));
    // }

    // Successfully updates existing work experience record when valid ID is provided
    // public function test_update_work_experience_with_valid_id()
    // {
    // $existingWorkExp = work_experience::factory()->create();
    // 
    // $request = new Request([
    // 'title' => 'Software Engineer', // Within 30 chars limit
    // 'employment_type' => 'Full-time',
    // 'company_name' => 'Tech Corp', // Within 20 chars limit
    // 'location' => 'San Francisco', // Within 30 chars limit
    // 'start_date' => '2023-01-01',
    // 'start_year' => '2023',
    // 'end_date' => '2023-12-31',
    // 'end_year' => '2023',
    // 'profile_headline' => 'Senior Developer', // Within 50 chars limit
    // 'description' => 'Led development team' // Within 200 chars limit
    // ]);
    // 
    // $controller = new DashboardController();
    // $response = $controller->update4($request, $existingWorkExp->id);
    // 
    // $this->assertDatabaseHas('work_experience', [
    // 'id' => $existingWorkExp->id,
    // 'Title' => 'Software Engineer',
    // 'company_name' => 'Tech Corp'
    // ]);
    // 
    // $this->assertEquals('/utama', parse_url($response->getTargetUrl(), PHP_URL_PATH));
    // }

    // public function test_update_work_experience_with_long_description()
    // {
    // $existingWorkExp = work_experience::factory()->create();

    // $longDescription = str_repeat('This is a test description. ', 10); // Creates a longer description

    // $request = new Request([
    // 'title' => 'Software Engineer', // Within 30 chars limit
    // 'employment_type' => 'Full-time',
    // 'company_name' => 'Tech Corp', // Within 20 chars limit
    // 'location' => 'San Francisco', // Within 30 chars limit
    // 'start_date' => '2023-01-01',
    // 'start_year' => '2023',
    // 'end_date' => '2023-12-31',
    // 'end_year' => '2023',
    // 'profile_headline' => 'Senior Developer', // Within 50 chars limit
    // 'description' => $longDescription
    // ]);

    // $controller = new DashboardController();
    // $response = $controller->update4($request, $existingWorkExp->id);

    // $this->assertDatabaseHas('work_experience', [
    // 'id' => $existingWorkExp->id,
    // 'description' => $longDescription
    // ]);

    // $this->assertEquals('/utama', parse_url($response->getTargetUrl(), PHP_URL_PATH));
    // }





    // public function test_store3_creates_work_experience_with_own_valid_data()
    // {
    // $user = User::factory()->create();
    // $this->actingAs($user);
    // 
    // $workExperienceData = [
    // 'title' => 'Software Engineer',
    // 'employment_type' => 'Full-time',
    // 'company_name' => 'Tech Corp',
    // 'location' => 'Jakarta',
    // 'start_date' => 'January',
    // 'start_year' => '2020',
    // 'end_date' => 'December',
    // 'end_year' => '2023',
    // 'profile_headline' => 'Senior Software Engineer',
    // 'description' => 'Bertanggung jawab untuk mengembangkan aplikasi web dan mobile yang digunakan oleh ribuan pengguna.'
    // ];
    // 
    // $request = Request::create('/utama/work-add', 'POST', $workExperienceData);
    // 
    // $controller = new DashboardController();
    // $response = $controller->store3($request);
    // 
    // $this->assertDatabaseHas('work_experience', [
    // 'Title' => 'Software Engineer',
    // 'company_name' => 'Tech Corp',
    // 'id_user' => $user->id
    // ]);
    // 
    // $this->assertEquals('/utama', parse_url($response->getTargetUrl(), PHP_URL_PATH));
    // }







    // Successfully creates new certification record with valid user and request data
    // public function test_store2_creates_certification_with_valid_data()
    // {
    // $user = User::factory()->create();
    // $this->actingAs($user);
    // 
    // $requestData = [
    // 'name' => 'UI/UX Certification',
    // 'organization' => '(kosong)',
    // 'start_date' => 'January',
    // 'start_year' => '2017',
    // 'end_date' => 'January',
    // 'end_year' => '2017',
    // 'location' => 'Indonesia',
    // 'description' => '(kosong)'
    // ];
    // 
    // $request = Request::create('/certifications', 'POST', $requestData);
    // 
    // $controller = new DashboardController();
    // $response = $controller->store2($request);
    // 
    // $this->assertDatabaseHas('certifications', [
    // 'name' => 'UI/UX Certification',
    // 'organization' => '(kosong)',
    // 'id_user' => $user->id
    // ]);
    // 
    // $this->assertEquals('/utama', parse_url($response->getTargetUrl(), PHP_URL_PATH));
    // }


    // public function test_store3_creates_work_experience_with_valid_data_and_empty_fields()
    // {
    // $user = User::factory()->create();
    // $this->actingAs($user);
    // 
    // $workExperienceData = [
    // 'title' => '',
    // 'employment_type' => 'Part-time',
    // 'company_name' => 'P&G Indonesia',
    // 'location' => 'Jakarta',
    // 'start_date' => 'January',
    // 'start_year' => '2020',
    // 'end_date' => 'December',
    // 'end_year' => '2023',
    // 'profile_headline' => '',
    // 'description' => ''
    // ];
    // 
    // $request = Request::create('/utama/work-add', 'POST', $workExperienceData);
    // 
    // $controller = new DashboardController();
    // $response = $controller->store3($request);
    // 
    // $this->assertDatabaseMissing('work_experience', [
    // 'company_name' => 'P&G Indonesia',
    // 'id_user' => $user->id
    // ]);
    // 
    // $this->assertTrue(session()->has('errors'));
    // 
    // $this->assertEquals(
    // url()->previous(),
    // parse_url($response->getTargetUrl(), PHP_URL_PATH)
    // );
    // }




    // Ensure store4 method handles empty fields gracefully and does not create a skill record
    public function test_store4_handles_empty_fields()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $skillData = [
            'name_skill' => 'Adobe Photoshop',
            'work_as' => '',
            'experience' => '',
            'description' => ''
        ];

        $request = Request::create('/utama/skill-add', 'POST', $skillData);

        $controller = new DashboardController();
        $response = $controller->store4($request);

        $this->assertDatabaseMissing('skills', [
            'id_user' => $user->id
        ]);

        $this->assertEquals('/utama', parse_url($response->getTargetUrl(), PHP_URL_PATH));
    }
}
