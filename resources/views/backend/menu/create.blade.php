@extends('backend.layouts.app')
@section('title', 'Restaurant')
@section('restaurant-active', 'active')
@section('content')
    <H1> Add Menu </H1>

    <div class="card">
        <div class="card-body">

            <form action="{{route('admin.menu.store')}}" method="POST" id="create">
                @csrf



                <label class="my-1 me-2" for="restaurant">Please Choose your Restaurant</label>
                        <select class="form-select" id="restaurant" aria-label="Default select example" name="restaurant_id" required>


                            @foreach($restaurants as $restaurant)

                                <option value="{{$restaurant->id}}">

                                    {{$restaurant->name}}

                                </option>
                            @endforeach
                        </select>





                <div class="mb-3">
                    <label for="usernameValidate">Name</label>
                    <input type="text" class="form-control" name="name" required>

                </div>
                <div class="mb-3">
                    <label for="usernameValidate">Price</label>
                    <input type="number" step="0.01" class="form-control" name="price" required>

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
