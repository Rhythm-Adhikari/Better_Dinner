@extends('backend.layouts.app')
@section('title', 'Pickup')
@section('order-active', 'active')
@section('content')

    <div class="d-flex justify-content-between w-100 flex-wrap pb-2">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">Pickup table</h1>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered Datatable">
                    <thead class="thead-light">
                        <tr>
                            <th>Pickup Token</th>
                            <th>User ID</th>
                            {{-- <th>Description</th> --}}
                            <th>Total</th>
                            <th>Created at</th>
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
                ajax: "/admin/pickup/datatable/ssd",
                columns: [{
                        data: "pickup_token",
                        name: "pickup_token"
                    },
                    {
                        data: "user_id",
                        name: "user_id",
                    },
                    {
                        data: "total",
                        name: "total",
                    },
                    {
                        data: "created_at",
                        name: "created_at",
                    },
                    {
                        data: "action",
                        name: "action",
                    },
                ],
                order: [
                    [3, "desc"]
                ],
            });
            // $(document).on('click', '.delete', function(e) {
            //     e.preventDefault();

            //     var id = $(this).data('id');

            //     Swal.fire({
            //         title: 'Are you sure, you want to delete?',
            //         showCancelButton: true,
            //         confirmButtonText: 'confirm',
            //     }).then((result) => {
            //         if (result.isConfirmed) {
            //             $.ajax({
            //                 url: '/admin/restaurant/' + id,
            //                 type: 'DELETE',
            //                 success: function() {
            //                     table.ajax.reload();
            //                 }
            //             });
            //         }
            //     })
            // });
        });



    </script>
@endsection
