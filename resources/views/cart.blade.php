@extends('index') @section('content')

<section class="news-details-area section-padding-0-100">
    <div class="container">
        <div class="">
            <div class="table-responsive">
                @if(count($carts) > 0)
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col-1">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quatity</th>
                            <th scope="col">Total</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach(Cart::content() as $cart)

                        <tr>
                            <td scope="col-1">{{$cart->id}}</td>
                            <td scope="col">{{$cart->name}}</td>
                            <td scope="col">{{$cart->price}}</td>
                            <td scope="col">
                                <div class="pl-2 cart_quantity_button row">
                                    <form method="POST" action="{{route('cart.increment',$cart->id)}}">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                        <span type="submit" class="pr-2 cart_quantity_up">
                                            +
                                        </span>
                                    </form>
                                    <input class="cart_quantity_input" type="text" name="quantity"
                                        value="{{$cart->qty}}" autocomplete="off" size="2" />
                                    <a class="pl-2 cart_quantity_down" href="{{route('cart.decrease',$cart->id)}}">
                                        -
                                    </a>
                                </div>
                                <!-- <input
                                    value="{{$cart->qty}}"
                                    type="number"
                                    id="quantity"
                                    name="quantity"
                                /> -->
                            </td>
                            <td>{{$cart->subtotal}}</td>
                            <td>
                                <form action="{{route('cart.delete',$cart->id)}}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field("DELETE") }}
                                    <input class="btn btn-danger" type="submit" value="Delete" />
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        <tr>
                            <td scope="col-1"></td>
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col">Total: {{Cart::priceTotal() }}</td>
                            <td>
                                <form action="{{ route('order.store') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-primary">
                                        Đặt hàng
                                    </button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
                @else
                <p>You have no items in the shopping cart</p>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection
<script></script>