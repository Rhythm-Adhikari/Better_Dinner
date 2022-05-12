@extends('backend.layouts.app')
@section('title', 'Restaurant')
@section('restaurant-active', 'active')
@section('content')

    <div class="d-flex justify-content-between w-100 flex-wrap pb-2">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">Menu table</h1>
        </div>
        <div>
            <a href="{{route('admin.menu.create')}}" class="btn btn-primary d-inline-flex align-items-center">
            <i class="fas fa-plus m-2"></i>
            Add Menus
            </a>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-centered table-nowrap mb-0 rounded">
                    <thead class="thead-light">
                        <tr>
                            <th class="border-0 rounded-start">Name</th>
                            <th class="border-0">Price</th>
                            <th class="border-0">Description</th>
                            <th class="border-0 rounded-end">Action</th>
                        </tr>
                    </thead>
                    @foreach ($menus as $menu)
                        <tbody>
                            <!-- Item -->
                            <tr>
                                <td class="border-0">
                                    <a href="#" class="d-flex align-items-center">
                                        <div><span class="h6">{{ $menu->name }}</span></div>
                                    </a>
                                </td>
                                <td class="border-0 font-weight-bold">{{ $menu->price }}</td>
                                <td class="border-0">
                                    <span class="font-weight-bold">{{ $menu->description }}</span>
                                </td>
                                <td class="border-0">
                                   <i class="fas fa-edit"></i>
                                   <i class="fas fa-trash"></i>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>

        </div>
    </div>



@endsection
