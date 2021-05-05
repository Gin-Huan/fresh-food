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
                        @foreach($carts as $cart)

                        <tr>
                            <td scope="col-1">{{$cart->id}}</td>
                            <td scope="col">{{$cart->name}}</td>
                            <td scope="col">{{$cart->price}}</td>
                            <td scope="col">
                                <input
                                    value="{{$cart->qty}}"
                                    type="number"
                                    id="quantity"
                                    name="quantity"
                                />
                            </td>
                            <td>{{$cart->subtotal}}</td>
                            <td>
                                <button
                                    type="button"
                                    class="btn btn-outline-danger"
                                >
                                    Hủy
                                </button>
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
                                <button
                                    type="button"
                                    class="btn btn-outline-primary"
                                >
                                    Đặt hàng
                                </button>
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
