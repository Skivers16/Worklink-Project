<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Experience;
use App\Models\Certifications;
use App\Models\work_experience;
use App\Models\skills;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user()->id;

        return view('utama', [
            'profile' => Profile::with('user')->where('id_user', $user)->get(),
            'experience' => Experience::where('id_user', $user)->get(),
            'certifications' => Certifications::where('id_user', $user)->get(),
            'work_experience' => Work_Experience::where('id_user', $user)->get(),
            'skills' => Skills::where('id_user', $user)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user()->id;
        try {
            Experience::create([
                'Title' => $request->title,
                'employment_type' => $request->employment_type,
                'company_name' => $request->company_name,
                'location' => $request->location,
                'start_date' => $request->start_date,
                'start_year' => $request->start_year,
                'end_date' => $request->end_date,
                'end_year' => $request->end_year,
                'profile_headline' => $request->profile_headline,
                'description' => $request->description,
                'id_user' => $user
            ]);
            return redirect('/utama');
        } catch (\Exception $e) {
            dd($e);
        }
    }

    public function store2(Request $request)
    {
        $user = Auth::user()->id;
        try {
            Certifications::create([
                'name' => $request->name,
                'organization' => $request->organization,
                'start_date' => $request->start_date,
                'start_year' => $request->start_year,
                'end_date' => $request->end_date,
                'end_year' => $request->end_year,
                'location' => $request->location,
                'description' => $request->description,
                'id_user' => $user
            ]);
            return redirect('/utama');
        } catch (\Exception $e) {
            dd($e);
        }
    }

    public function store3(Request $request)
    {
        $user = Auth::user()->id;
        try {
            Work_Experience::create([
                'Title' => $request->title,
                'employment_type' => $request->employment_type,
                'company_name' => $request->company_name,
                'location' => $request->location,
                'start_date' => $request->start_date,
                'start_year' => $request->start_year,
                'end_date' => $request->end_date,
                'end_year' => $request->end_year,
                'profile_headline' => $request->profile_headline,
                'description' => $request->description,
                'id_user' => $user
            ]);
            return redirect('/utama');
        } catch (\Exception $e) {
            dd($e);
        }
    }

    public function store4(Request $request)
    {
        $user = Auth::user()->id;
        try {
            Skills::create([
                'name_skill' => $request->name_skill,
                'work_as' => $request->work_as,
                'experience' => $request->experience,
                'description' => $request->description,
                'id_user' => $user
            ]);
            return redirect('/utama');
        } catch (\Exception $e) {
            dd($e);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Profile::updateOrCreate(
            [
                'id' => $id,
            ],
            [
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'username' => $request->username,
                'industry' => $request->industry,
                'position' => $request->position,
                'school' => $request->school,
                'country' => $request->country,
                'city' => $request->city,
            ]
        );


        return redirect('/utama');
    }

    public function update2(Request $request, string $id)
    {

        Experience::updateOrCreate(
            [
                'id' => $id,
            ],
            [
                'Title' => $request->title,
                'employment_type' => $request->employment_type,
                'company_name' => $request->company_name,
                'location' => $request->location,
                'start_date' => $request->start_date,
                'start_year' => $request->start_year,
                'end_date' => $request->end_date,
                'end_year' => $request->end_year,
                'profile_headline' => $request->profile_headline,
                'description' => $request->description,
            ]
        );



        return redirect('/utama');
    }

    public function update3(Request $request, string $id)
    {

        Certifications::updateOrCreate(
            [
                'id' => $id,
            ],
            [
                'name' => $request->name,
                'organization' => $request->organization,
                'start_date' => $request->start_date,
                'start_year' => $request->start_year,
                'end_date' => $request->end_date,
                'end_year' => $request->end_year,
                'location' => $request->location,
                'description' => $request->description,
            ]
        );



        return redirect('/utama');
    }

    public function update4(Request $request, string $id)
    {
        work_experience::updateOrCreate(
            [
                'id' => $id,
            ],
            [
                'Title' => $request->title,
                'employment_type' => $request->employment_type,
                'company_name' => $request->company_name,
                'location' => $request->location,
                'start_date' => $request->start_date,
                'start_year' => $request->start_year,
                'end_date' => $request->end_date,
                'end_year' => $request->end_year,
                'profile_headline' => $request->profile_headline,
                'description' => $request->description,
            ]
        );
        return redirect('/utama');
    }

    public function update5(Request $request, string $id)
    {
        skills::updateOrCreate(
            [
                'id' => $id,
            ],
            [
                'name_skill' => $request->name_skill,
                'work_as' => $request->work_as,
                'experience' => $request->experience,
                'description' => $request->description,
            ]
        );
        return redirect('/utama');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $experience = Experience::findOrFail($id);
            $experience->delete();
            return redirect('/utama');
        } catch (\Exception $e) {
            dd($e);
        }
    }

    public function destroy2(string $id)
    {
        try {
            $certifications = certifications::findOrFail($id);
            $certifications->delete();
            return redirect('/utama');
        } catch (\Exception $e) {
            dd($e);
        }
    }

    public function destroy3(string $id)
    {
        try {
            $work_experience = work_experience::findOrFail($id);
            $work_experience->delete();
            return redirect('/utama');
        } catch (\Exception $e) {
            dd($e);
        }
    }

    public function destroy4(string $id)
    {
        try {
            $skills = Skills::findOrFail($id);
            $skills->delete();
            return redirect('/utama');
        } catch (\Exception $e) {
            dd($e);
        }
    }
}
