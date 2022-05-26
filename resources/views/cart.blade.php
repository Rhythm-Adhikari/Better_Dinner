@extends('layouts.app')
@section('content')
    {{-- TODO: Fix the ajax for update the remove --}}

    {{-- <div class="cart"> --}}
        <div class="container" style="padding-bottom: 200px">
            <livewire:cart-list />
        </div>
      
    {{-- </div> --}}

    {{-- <span id="status"></span> --}}
    {{-- <table id="cart" class="table table-hover table-condensed">
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
                                    <h4 class="nomargin">{{ $details['address'] }}</h4> 
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
    </table> --}}
@endsection

@section('scripts')
@endsection
