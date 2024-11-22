<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|---------------------------------------------------------------------------
| Web Routes
|---------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Redirect the root URL (/) to the users page
Route::get('/', [UserController::class, 'index'])->name('users.index');

Route::get('/form', [UserController::class, 'create'])->name('form');
// Route to show the user creation form (calls the 'create' method in UserController)
// This will display the view to create a new user

Route::post('/users', [UserController::class, 'store'])->name('store');
// Route to handle the form submission for creating a user (calls the 'store' method in UserController)
// This route receives the POST request from the form and saves the user in the database

Route::get('/users', [UserController::class, 'index'])->name('users.index');
// Route to show the list of all users (calls the 'index' method in UserController)
// This will display the list of users, typically in a table format

Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
// Route to delete a user (calls the 'destroy' method in UserController)
// This route is used for soft deleting a user, identified by their ID
// The {user} is a route parameter that gets injected into the controller's destroy method

// Route to display the edit form for a specific user
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');

// Route to handle updating a specific user's details
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
