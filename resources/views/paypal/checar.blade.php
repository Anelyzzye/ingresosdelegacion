  @extends('layouts.app-paypal')
@section('content')

  @foreach(Cart::content() as $cartItem)
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th></th>
                                                <th>Product</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Total</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                           
                                                <tr>
                                                    <td>
                                                        <!-- Remove product button -->
                                                        <a href="{{ route('remove', [ $cartItem->rowId ]) }}">x</a>
                                                    </td>
                                                    <td>{{ $cartItem->name }}</td>
                                                    <td> <a href="{{ route('update', [ $cartItem->qty ]) }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">+</a>
                        <input type="" name="" value="{{ $cartItem->qty }}" disabled id="cantidadpaypal">
                        <a href="" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">-</a>   </td>
                                                    <td>{{ $cartItem->price }} MXN</td>
                                                    <td>{{ number_format($cartItem->total, 2) }} MXN</td>
                                                </tr>
                                            @endforeach
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <!-- Total price of whole cart -->
                                                <td class="uk-text-bold">Total: {{ number_format(Cart::subtotal(), 2) }} MXN</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- Clear shopping cart button -->
                                        <a href="{{ route('empty') }}" class="btn btn-danger">Empty</a>
                                        <!-- Proceed to checkout button -->
                                        <a href="{{ route('checkout') }}" class="btn btn-primary">Checkout</a>
                                    </div>

@stop