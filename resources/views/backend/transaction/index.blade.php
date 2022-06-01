@extends('backend.layouts.app')
@section('title', 'Transaction')
@section('transaction-active', 'active')
@section('content')

    <div class="d-flex justify-content-between w-100 flex-wrap pb-2">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">Transaction table</h1>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered Datatable">
                    <thead class="thead-light">
                        <tr>
                            <th>token</th>
                            <th>amount</th>
                            <th>ref_no</th>
                            <th>trx_id</th>
                            {{-- <th>Description</th> --}}
                            <th>user_id</th>
                            <th>created_at</th>
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
                ajax: "/admin/transaction/datatable/ssd",
                columns: [{
                        data: "token",
                        name: "token"
                    },
                    {
                        data: "amount",
                        name: "amount"
                    },
                    {
                        data: "ref_no",
                        name: "ref_no",
                    },
                    {
                        data: "trx_id",
                        name: "trx_id",
                    },
                    {
                        data: "user_id",
                        name: "user_id",
                    },
                    {
                        data: "created_at",
                        name: "created_at",
                    },
                ]
            });
        });



    </script>
@endsection
