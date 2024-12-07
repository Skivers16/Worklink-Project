<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('regis', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|unique:users|max:255',
            'name' => 'required|max:255',
            'password' => 'required|min:5|max:255',
            //'skill' => 'nullable|max:255',
            //'passion' => 'nullable|max:255',
            //'riwayat_pekerjaan' => 'nullable|max:500'
        ]);

        //$validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        //$request->session()->flash('success', 'Anjay Slebew!');


        return redirect('/login');
    }
}
