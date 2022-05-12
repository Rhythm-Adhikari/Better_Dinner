@extends('backend.layouts.app')
@section('title', 'Restaurant')
@section('restaurant-active', 'active')
@section('content')

  <h1>menu page</h1>

  <div class="d-flex justify-content-between w-100 flex-wrap pb-2">
      <div class="mb-3 mb-lg-0">
          <h1 class="h4">Menu table</h1>
      </div>
      <div>
{{--          <a href="{{route('admin.menu.create')}}" class="btn btn-primary d-inline-flex align-items-center">--}}
{{--              <i class="fas fa-plus m-2"></i>--}}
{{--              Add Menus--}}
{{--          </a>--}}
      </div>
  </div>
  <div class="card">
      <div class="card-body">
          <div class="table-responsive">
              <table class="table table-striped table-bordered Datatable">
                  <thead class="thead-light">
                  <tr>
                      <th>restaurant id</th>
                      <th>name</th>
                      <th>description</th>
                      <th>price</th>
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
                ajax: "/admin/menu/datatable/ssd",
                columns:
                    [{
                    data: "restaurant_id",
                    name: "restaurant id"
                     },
                    {
                        data: "name",
                        name: "name"
                    },
                    {
                        data: "description",
                        name: "description",
                    },
                    {
                        data: "price",
                        name: "price",
                    },
                    {
                        data: "action",
                        name: "action",
                    },
                ]
            });
        });


        //     $(document).on('click', '.delete', function(e) {
        //         e.preventDefault();
        //
        //         var id = $(this).data('id');
        //
        //         Swal.fire({
        //             title: 'Are you sure, you want to delete?',
        //             showCancelButton: true,
        //             confirmButtonText: 'confirm',
        //         }).then((result) => {
        //             if (result.isConfirmed) {
        //                 $.ajax({
        //                     url: '/admin/restaurant/' + id,
        //                     type: 'DELETE',
        //                     success: function() {
        //                         table.ajax.reload();
        //                     }
        //                 });
        //             }
        //         })
        //     });
        // });



    </script>


@endsection
