@extends('backend.layouts.app')
@section('title', 'Restaurant')
@section('restaurant-active', 'active')
@section('content')

    <div class="d-flex justify-content-between w-100 flex-wrap pb-2">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">Restaurant table</h1>
        </div>
        <div>
            <a href="{{route('admin.restaurant.create')}}" class="btn btn-primary d-inline-flex align-items-center">
                <i class="fas fa-plus m-2"></i>
                Add Restaurant
            </a>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered Datatable">
                    <thead class="thead-light">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Location</th>
                            <th>Phone</th>
                            {{-- <th>Description</th> --}}
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            var table = $('.Datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "/admin/restaurant/datatable/ssd",
                columns: [{
                        data: "name",
                        name: "name"
                    },
                    {
                        data: "email",
                        name: "email"
                    },
                    {
                        data: "location",
                        name: "location",
                    },
                    {
                        data: "phone",
                        name: "phone",
                    },
                    {
                        data: "action",
                        name: "action",
                    },
                ]
            });
        });

    </script>
@endsection
