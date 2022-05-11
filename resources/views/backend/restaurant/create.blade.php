@extends('backend.layouts.app')
@section('title', 'Restaurant')
@section('restaurant-active', 'active')
@section('content')
<H1> create restaurnant </H1>

<div class="card">
    <div class="card-body">

        <form action="{{route('admin.restaurant.store')}}" method="POST" id="create">
            @csrf


            <div class="mb-3">
                <label for="usernameValidate">Name</label>
                <input type="text" class="form-control" name="name" required>

            </div>
            <div class="mb-3">
                <label for="usernameValidate">Location</label>
                <input type="text" class="form-control" name="location" required>

            </div>
            <div class="mb-3">
                <label for="usernameValidate">Phone</label>
                <input type="number" class="form-control" name="phone" required>

            </div>

            <div class="mb-3">
                <label for="usernameValidate">Email</label>
                <input type="email" class="form-control" name="email" required>

            </div>
            <div class="mb-3">
                <label for="usernameValidate">Description</label>
                <input type="text" class="form-control" name="description" required>

            </div>
    {{--        <div class="mb-3">--}}
    {{--            <label for="usernameValidate">Name</label>--}}
    {{--            <input type="" class="form-control" id="media">--}}

    {{--        </div>--}}
            <div>
                <button type="submit" class="btn btn-primary">Confirm</button>
                <button class="btn btn-secondary back-btn">Cancel</button>
            </div>
        </form>
    </div>
</div>


@endsection
@section('scripts')

@endsection
