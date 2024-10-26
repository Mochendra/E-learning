<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    // menampilkan form registrasi
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Handle registration logic || logika registrasi
    public function register(Request $request)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'no_whatsapp' => 'nullable|string|max:15',
            'nomor_induk' => 'required|string',
            'role' => 'required|in:siswa,guru,admin,koorjadwal',
        ]);
        
        

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Create the user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'no_whatsapp' => $request->no_whatsapp,
            'role' => $request->role,
            'nomor_induk' => $request->nomor_induk, 
        ]);
        

        // Optionally, log the user in immediately after registration
        auth()->login($user);

        return redirect()->route('dashboard_admin');  // Redirect to dashboard admin
    }
}
