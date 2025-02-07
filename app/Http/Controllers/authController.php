<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Handle login logic using Passport
    }

    public function register(Request $request)
    {
        // Handle registration logic
    }

    public function logout(Request $request)
    {
        // Handle logout logic using Passport
    }
}

