@extends('backend.layouts.app')
@section('title', 'Create User')
@section('user-active', 'active')
@section('content')

    <h1>create user</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.user.store') }}" method="post" id="create">
                @csrf
                <div class="mb-4">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" required>
                </div>
                <div>
                    <button class="btn btn-secondary back-btn">Cancel</button>
                    <button type="submit" class="btn btn-primary">Confirm</button>
                </div>
            </form>
        </div>
    </div>

@endsection
@section('scripts')

@endsection
