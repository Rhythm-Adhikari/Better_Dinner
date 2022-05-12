@extends('backend.layouts.app')
@section('title', 'Edit menu')
@section('restaurant-active', 'active')
@section('content')
    <H1> Edit menu </H1>

    <div class="card">
        <div class="card-body">

            <form action="{{route('admin.menu.update', $menu->id)}}" method="POST" id="update">
                @csrf
                @method('PUT')


                <div class="mb-3">
                    <label for="usernameValidate">Name</label>
                    <input type="text" class="form-control" name="name" value="{{$menu->name}}" required>

                </div>
                <div class="mb-3">
                    <label for="usernameValidate">Price</label>
                    <input type="number" step="0.01" class="form-control" name="price" value="{{$menu->price}}" required>

                </div>
                <div class="mb-3">
                    <label for="usernameValidate">Description</label>
                    <input type="text" class="form-control" name="description" value="{{$menu->description}}" required>
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
