<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource; // Importing the user resource class
use App\Models\User; 

class UserController extends Controller
{
    public function index() // Defining the index method to handle requests to fetch users
    {
        $users = User::paginate(10); // Fetching users from the database with pagination (10 users per page)
        
        return UserResource::collection($users); // Returning a collection of user resources
    }

    public function register(Request $request)
    {
        // Validate incoming data
        $validatedData = $request->validate([
            'username' => 'required|string|unique:users|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:8',
        ]);

        // Create new user
        $user = User::create([
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        // Return response
        return response()->json(['message' => 'User registered successfully', 'user' => $user]);
    }
}
