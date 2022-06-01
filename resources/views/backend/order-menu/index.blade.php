@extends('backend.layouts.app')
@section('title', 'Order Menu')
@section('order-active', 'active')
@section('content')

    <div class="d-flex justify-content-between w-100 flex-wrap pb-2">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">Order Menu table</h1>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-centered table-nowrap mb-0 rounded">
                    <thead class="thead-light">
                        <tr>
                            <th class="border-0 rounded-start">Token</th>
                            <th class="border-0">Name</th>
                            <th class="border-0">Quantity</th>
                            <th class="border-0 rounded-end">restaurant ID</th>
                        </tr>
                    </thead>
                    @foreach ($order_menu as $menu)
                        <tbody>
                            <!-- Item -->
                            <tr>
                                <td class="border-0">
                                    <a href="#" class="d-flex align-items-center">
                                        <div><span class="h6">{{ $menu->token }}</span></div>
                                    </a>
                                </td>
                                <td class="border-0 font-weight-bold">{{ $menu->name }}</td>
                                <td class="border-0">
                                    <span class="font-weight-bold">{{ $menu->quantity }}</span>
                                </td>
                                <td class="border-0">
                                    <span class="font-weight-bold">{{ $menu->restaurant_id }}</span>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>

        </div>
    </div>



@endsection
@section('scripts')
@endsection
