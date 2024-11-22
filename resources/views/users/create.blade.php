@extends('layouts.app')

@section('title', 'Create User')

@section('content')
    <h2 class="mb-4">Create User</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" autocomplete="off" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" autocomplete="off" required>
        </div>

        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <select class="form-select" id="gender" name="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="birthday" class="form-label">Birthday</label>
            <input type="date" class="form-control" id="birthday" name="birthday">
        </div>

        <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input" id="status_active" name="status_active" value="1" checked>
            <label class="form-check-label" for="status_active">Status Active</label>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>

    <a href="{{ route('users.index') }}" class="btn btn-secondary mt-3">Go to Table Page</a>
@endsection
