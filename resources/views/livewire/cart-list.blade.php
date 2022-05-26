<div>
    @if ($message = Session::get('success'))
        <div class="">
            <p class="">{{ $message }}</p>
        </div>
    @endif
    <h3 class="text-3xl text-bold">

        Total {{ Cart::getTotalQuantity() }} Cart
    </h3>
    <div class="">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Name</th>
                    <th>
                        <span class="hidden" title="Quantity"></span>
                        <span class="hidden lg:inline">Quantity</span>
                    </th>
                    <th> price</th>
                    <th> Remove </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cartItems as $item)
                    <tr>
                        <td>
                            <h4 class="nomargin">{{ $item['name'] }}</h4>
                        </td>
                        <td>
                            <div class="">
                                <div class="">
                                    <livewire:cart-update :item="$item" :key="$item['id']" />
                                </div>
                            </div>
                        </td>
                        <td>${{ $item['price'] }}</td>
                        <td>
                            <i class="fas fa-trash"  wire:click.prevent="removeCart('{{ $item['id'] }}')"></i>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5" class="text-right">
                        <h3><strong> Total: ${{ Cart::getTotal() }}</strong></h3>
                    </td>
                </tr>
                <tr>
                    <td colspan="5" class="text-right">
                        <a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue
                            Shopping</a>
                        <a href="{{ route('delivery') }}" class="btn btn-warning"> Delivery</a>
                        <a href="{{ route('pickup') }}" class="btn btn-warning"> Pick Up</a>
                    </td>
                </tr>
            </tfoot>
        </table>
        {{-- <div class="mt-5">
            <a href="#" class="px-6 py-2 text-red-800 bg-red-300" wire:click.prevent="clearAllCart">Remove All Cart</a>
        </div> --}}
    </div>


</div>
