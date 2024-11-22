@extends('layouts.app')

@section('title', 'Edit User')

@section('content')
    <h2 class="mb-4">Edit User</h2>

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Specify the method as PUT for updating -->
        
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
            <small class="form-text text-muted">Leave empty if you don't want to change the password.</small>
        </div>

        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <select class="form-select" id="gender" name="gender" required>
                <option value="Male" {{ old('gender', $user->gender) == 'Male' ? 'selected' : '' }}>Male</option>
                <option value="Female" {{ old('gender', $user->gender) == 'Female' ? 'selected' : '' }}>Female</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="birthday" class="form-label">Birthday</label>
            <input type="date" class="form-control" id="birthday" name="birthday" value="{{ old('birthday', $user->birthday ? $user->birthday->format('Y-m-d') : '') }}">
        </div>

        <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input" id="status_active" name="status_active" value="1" {{ old('status_active', $user->status_active) ? 'checked' : '' }}>
            <label class="form-check-label" for="status_active">Status Active</label>
        </div>

        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>

    <a href="{{ route('users.index') }}" class="btn btn-secondary mt-3">Back to User List</a>
@endsection
