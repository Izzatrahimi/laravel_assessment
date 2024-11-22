<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Show the form to create a new user
    public function create()
    {
        // Return the 'users.create' view, which contains the form for creating a new user
        return view('users.create');
    }

    // Store the newly created user in the database
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255', // Name is required, must be a string with a max length of 255 characters
            'email' => 'required|email|unique:users,email', // Email is required, must be valid and unique in the users table
            'password' => 'required|string|min:6', // Password is required, must be a string with a minimum length of 6 characters
            'gender' => 'nullable|in:Male,Female', // Gender is optional, but if provided, it must be either 'Male' or 'Female'
            'birthday' => 'nullable|date', // Birthday is optional, but if provided, it must be a valid date
            'status_active' => 'nullable|boolean', // Status active is optional and must be a boolean (0 or 1)
        ]);

        // Create a new user record in the 'users' table with the validated data
        User::create([
            'name' => $request->name, // User's name
            'email' => $request->email, // User's email
            'password' => bcrypt($request->password), // Encrypt the user's password using bcrypt before saving it
            'gender' => $request->gender, // User's gender
            'birthday' => $request->birthday, // User's birthday
            'status_active' => $request->status_active ? 1 : 0, // If 'status_active' is checked, set it to 1 (active), else 0 (inactive)
        ]);

        // Redirect the user to the 'users.index' route (where the list of users is shown) with a success message
        return redirect()->route('users.index')->with('success', 'User created successfully!');
    }

    // Show the list of all users
    public function index()
    {
        // Get all users from the database
        $users = User::all();

        // Return the 'users.index' view and pass the users data to it
        return view('users.index', compact('users'));
    }

    // Soft delete a user
    public function destroy(User $user)
    {
        // Soft delete the user by calling the delete method
        $user->delete();

        // Redirect to the 'users.index' route with a success message after the user is deleted
        return redirect()->route('users.index')->with('success', 'User deleted successfully!');
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:6',  // Make password optional for update
            'gender' => 'nullable|in:Male,Female',
            'birthday' => 'nullable|date',
            'status_active' => 'nullable|boolean',
        ]);

        // Update the user
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? bcrypt($request->password) : $user->password, // Update password only if provided
            'gender' => $request->gender,
            'birthday' => $request->birthday,
            'status_active' => $request->status_active ? 1 : 0,
        ]);

        return redirect()->route('users.index')->with('success', 'User updated successfully!');
    }
}
