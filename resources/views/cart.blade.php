@extends('layouts.app')
@section('content')

{{-- TODO: Fix the ajax for update the remove --}}
    <table id="cart" class="table table-hover table-condensed">
        <thead>
            <tr>
                <th style="width:50%">Product</th>
                <th style="width:10%">Price</th>
                <th style="width:8%">Quantity</th>
                <th style="width:22%" class="text-center">Subtotal</th>
                <th style="width:10%"></th>
            </tr>
        </thead>
        <tbody>
            @php $total = 0 @endphp
            @if (session('cart'))
                @foreach (session('cart') as $id => $details)
                    @php $total += $details['price'] * $details['quantity'] @endphp
                    <tr data-id="{{ $id }}">
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-sm-9">
                                    <h4 class="nomargin">{{ $details['name'] }}</h4>
                                    {{-- <h4 class="nomargin">{{ $details['restaurant_name'] }}</h4>
                                    <h4 class="nomargin">{{ $details['address'] }}</h4> --}}
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">${{ $details['price'] }}</td>
                        <td data-th="Quantity">
                            <input type="number" min="1" value="{{ $details['quantity'] }}"
                                class="form-control quantity update-cart" />
                        </td>
                        <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}
                        </td>
                        <td class="actions" data-th="">
                            <a href="" class="remove-from-cart" style="color: #e84857;">
                                <i class="fa fa-trash "></i>
                            </a>

                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5" class="text-right">
                    <h3><strong>Total ${{ $total }}</strong></h3>
                </td>
            </tr>
            <tr>
                <td colspan="5" class="text-right">
                    <a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue
                        Shopping</a>
                    <a href="{{ route('payment') }}" class="btn btn-warning"> Checkout</a>
                    <a href="{{ route('pickup') }}" class="btn btn-warning"> Pick Up</a>
                </td>
            </tr>
        </tfoot>
    </table>

@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('.update-cart').on('change', function(e) {
                e.preventDefault();

                var ele = $(this);

                $.ajax({
                    url: '/update-cart',
                    method: "PATCH",
                    data: {

                        id: ele.parents('tr').attr('data-id'),
                        quantity: ele.parents('tr').find('.quantity').val()
                    },
                    success: function(response) {
                        window.location.reload();
                    }
                });
            });
            $(".remove-from-cart").on('click', function(e) {
                e.preventDefault();

                var ele = $(this);

                if (confirm("Are you sure want to remove?")) {
                    $.ajax({
                        url: "{{ route('remove.from.cart') }}",
                        method: "DELETE",
                        data: {
                            _token: '{{ csrf_token() }}', 
                            id: ele.parents("tr").attr('data-id')
                        },
                        success: function(response) {
                            window.location.reload();
                            
                        }
                    });
                }
            });
        });
    </script>
@endsection
