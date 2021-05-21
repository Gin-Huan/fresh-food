@extends('index') @section('content')

<section class="news-details-area section-padding-0-100">
    <div class="container">
        <div class="">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Detail Order</th>
                            <th scope="col">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($list_order) @foreach($list_order as $order)
                        <tr>
                            <th scope="row">{{$order->id}}</th>
                            <td>
                                @if(count(json_decode($order->detail)) > 1)
                                @foreach(json_decode($order->detail) as $key =>
                                $detail)
                                {{$detail->name}}
                                @if(count(json_decode($order->detail)) - 1 -
                                $key != 0),@endif @endforeach @else
                                @foreach(json_decode($order->detail) as $detail)
                                {{$detail->name}} @endforeach @endif
                            </td>
                            <td>{{$order->price}}</td>
                        </tr>
                        @endforeach @else
                        <tr>
                            <td>No order.</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
