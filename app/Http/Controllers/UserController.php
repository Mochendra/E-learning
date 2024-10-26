<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'role' => ['required', Rule::in(['siswa', 'guru', 'admin', 'koorjadwal'])],
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'no_whatsapp' => 'nullable|string|max:15',
        ]);

        User::create([
            'role' => $request->role,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Encrypt password
            'no_whatsapp' => $request->no_whatsapp,
        ]);

        return redirect()->back()->with('success', 'User berhasil ditambahkan');
    }
    
}
