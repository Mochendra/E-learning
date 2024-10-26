<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; // Make sure to import the User model

class AdminController extends Controller
{
    public function index()
    {
        // Fetch all users
        $users = User::all();

        // Return the view for the admin dashboard
        return view('admin.dashboard_admin', compact('users'));
    }
}
