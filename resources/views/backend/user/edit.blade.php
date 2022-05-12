@extends('backend.layouts.app')
@section('title', 'Edit User')
@section('user-active', 'active')
@section('content')

    <h1>create user</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.user.update', $user->id) }}" method="post" id="update">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="{{$user->name}}">
                </div>
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" value="{{$user->email}}" >
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" >
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
