@extends('index') @section('content')
<div class="famie-breadcrumb">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#"><i class="fa fa-home"></i> Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Shop</li>
            </ol>
        </nav>
    </div>
</div>
@if('success')
<p>Them san pham thanh cong</p>
@endif
<section class="shop-area section-padding-0-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div
                    class="shop-filters mb-30 d-flex align-items-center justify-content-between"
                >
                    <div class="product-show">
                        <h6>Showing 8 of {{ $all }} results</h6>
                    </div>

                    <!-- <div class="produtc-view-mode">
                        <a href="#"><i class="fa fa-th"></i></a>
                        <a href="#"><i class="fa fa-list-ul"></i></a>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 col-lg-3">
                <!-- <div class="shopping-cart mb-50">
                    <h5 class="mb-30">Shopping Cart</h5>

                    <div class="cart-table clearfix">
                        <table class="table table-responsive">

                            <tbody>

                                <tr>
                                    <td class="cart_product_img">
                                        <a href="#"><img src="img/bg-img/34.jpg" alt="Product"></a>
                                    </td>
                                    <td class="cart_product_desc">
                                        <p>Bayonne Ham</p>
                                        <h6>1 x $39.99</h6>
                                    </td>
                                    <td class="pro-close">
                                        <a href="#"><i class="icon_close"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="cart_product_img">
                                        <a href="#"><img src="img/bg-img/35.jpg" alt="Product"></a>
                                    </td>
                                    <td class="cart_product_desc">
                                        <p>Bayonne Ham</p>
                                        <h6>1 x $39.99</h6>
                                    </td>
                                    <td class="pro-close">
                                        <a href="#"><i class="icon_close"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="cart_product_img">
                                        <a href="#"><img src="img/bg-img/36.jpg" alt="Product"></a>
                                    </td>
                                    <td class="cart_product_desc">
                                        <p>Bayonne Ham</p>
                                        <h6>1 x $39.99</h6>
                                    </td>
                                    <td class="pro-close">
                                        <a href="#"><i class="icon_close"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="cart-summary d-flex align-items-center justify-content-between">
                        <div class="sub-total">
                            <h6>SUBTOTAL</h6>
                        </div>
                        <div class="total-price">
                            <h6>$52.99</h6>
                        </div>
                    </div>

                    <a href="#" class="btn famie-btn checkout-btn mt-30 w-100">Checkout</a>
                </div> -->

                <div class="single-widget-area">
                    <h5 class="widget-title">Catagories</h5>

                    <ul class="cata-list shop-page">
                        <li><a href="#">All products (72)</a></li>
                        <li><a href="#">Freshy Fruits (20)</a></li>
                        <li><a href="#">Rice &amp; Corn (15)</a></li>
                        <li><a href="#">Meat &amp; Eggs (20)</a></li>
                        <li><a href="#">Milk &amp; Cheese (15)</a></li>
                        <li><a href="#">Others (2)</a></li>
                    </ul>
                </div>

                <div class="single-widget-area">
                    <h5 class="widget-title">Sort by</h5>

                    <ul class="cata-list shop-page">
                        <li><a href="#">Top rated</a></li>
                        <li><a href="#">New arrivals</a></li>
                        <li><a href="#">Alphabetically, A-Z</a></li>
                        <li><a href="#">Alphabetically, Z-A</a></li>
                        <li><a href="#">Price: low to high</a></li>
                        <li><a href="#">Price: high to low</a></li>
                    </ul>
                </div>

                <div class="single-widget-area">
                    <!-- <h5 class="widget-title">Price</h5>

                    <ul class="cata-list shop-page">
                        <li><a href="#">$0.00 - $10.00</a></li>
                        <li><a href="#">$10.00 - $50.00</a></li>
                        <li><a href="#">$50.00 - $100.00</a></li>
                        <li><a href="#">$100.00+</a></li>
                    </ul> -->
                </div>

                <div class="single-widget-area">
                    <!-- <h5 class="widget-title">Tags</h5>

                    <ul class="famie-tags">
                        <li><a href="#">All product</a></li>
                        <li><a href="#">Freshy Fruit</a></li>
                        <li><a href="#">Sweet Corn</a></li>
                        <li><a href="#">Chicken</a></li>
                        <li><a href="#">Organic</a></li>
                        <li><a href="#">Meat</a></li>
                    </ul> -->
                </div>
            </div>

            <div class="col-12 col-md-8 col-lg-9">
                <!-- <div class="row">

                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-product-area mb-50">

                            <div class="product-thumbnail">
                                <img src="img/bg-img/p1.jpg" alt="">

                                <span class="product-tags">Hot</span>

                                <div class="product-meta-data">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Favourite"><i
                                            class="icon_heart_alt"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i
                                            class="icon_cart_alt"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i
                                            class="arrow_left-right_alt"></i></a>
                                </div>
                            </div>

                            <div class="product-desc text-center pt-4">
                                <a href="#" class="product-title">Strawberry</a>
                                <h6 class="price">$17.99</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-product-area mb-50">

                            <div class="product-thumbnail">
                                <img src="img/bg-img/p2.jpg" alt="">

                                <div class="product-meta-data">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Favourite"><i
                                            class="icon_heart_alt"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i
                                            class="icon_cart_alt"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i
                                            class="arrow_left-right_alt"></i></a>
                                </div>
                            </div>

                            <div class="product-desc text-center pt-4">
                                <a href="#" class="product-title">Strawberry</a>
                                <h6 class="price">$17.99</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-product-area mb-50">

                            <div class="product-thumbnail">
                                <img src="img/bg-img/p3.jpg" alt="">

                                <div class="product-meta-data">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Favourite"><i
                                            class="icon_heart_alt"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i
                                            class="icon_cart_alt"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i
                                            class="arrow_left-right_alt"></i></a>
                                </div>
                            </div>

                            <div class="product-desc text-center pt-4">
                                <a href="#" class="product-title">Strawberry</a>
                                <h6 class="price">$17.99</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-product-area mb-50">

                            <div class="product-thumbnail">
                                <img src="img/bg-img/p4.jpg" alt="">

                                <span class="product-tags bg-danger">Sale</span>

                                <div class="product-meta-data">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Favourite"><i
                                            class="icon_heart_alt"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i
                                            class="icon_cart_alt"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i
                                            class="arrow_left-right_alt"></i></a>
                                </div>
                            </div>

                            <div class="product-desc text-center pt-4">
                                <a href="#" class="product-title">Strawberry</a>
                                <h6 class="price">$17.99</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-product-area mb-50">

                            <div class="product-thumbnail">
                                <img src="img/bg-img/p5.jpg" alt="">

                                <div class="product-meta-data">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Favourite"><i
                                            class="icon_heart_alt"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i
                                            class="icon_cart_alt"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i
                                            class="arrow_left-right_alt"></i></a>
                                </div>
                            </div>

                            <div class="product-desc text-center pt-4">
                                <a href="#" class="product-title">Strawberry</a>
                                <h6 class="price">$17.99</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-product-area mb-50">

                            <div class="product-thumbnail">
                                <img src="img/bg-img/p6.jpg" alt="">

                                <div class="product-meta-data">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Favourite"><i
                                            class="icon_heart_alt"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i
                                            class="icon_cart_alt"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i
                                            class="arrow_left-right_alt"></i></a>
                                </div>
                            </div>

                            <div class="product-desc text-center pt-4">
                                <a href="#" class="product-title">Strawberry</a>
                                <h6 class="price">$17.99</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-product-area mb-50">

                            <div class="product-thumbnail">
                                <img src="img/bg-img/p7.jpg" alt="">

                                <div class="product-meta-data">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Favourite"><i
                                            class="icon_heart_alt"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i
                                            class="icon_cart_alt"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i
                                            class="arrow_left-right_alt"></i></a>
                                </div>
                            </div>

                            <div class="product-desc text-center pt-4">
                                <a href="#" class="product-title">Strawberry</a>
                                <h6 class="price">$17.99</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-product-area mb-50">

                            <div class="product-thumbnail">
                                <img src="img/bg-img/p8.jpg" alt="">

                                <span class="product-tags">Hot</span>

                                <div class="product-meta-data">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Favourite"><i
                                            class="icon_heart_alt"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i
                                            class="icon_cart_alt"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i
                                            class="arrow_left-right_alt"></i></a>
                                </div>
                            </div>

                            <div class="product-desc text-center pt-4">
                                <a href="#" class="product-title">Strawberry</a>
                                <h6 class="price">$17.99</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-product-area mb-50">

                            <div class="product-thumbnail">
                                <img src="img/bg-img/p9.jpg" alt="">

                                <div class="product-meta-data">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Favourite"><i
                                            class="icon_heart_alt"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i
                                            class="icon_cart_alt"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i
                                            class="arrow_left-right_alt"></i></a>
                                </div>
                            </div>

                            <div class="product-desc text-center pt-4">
                                <a href="#" class="product-title">Strawberry</a>
                                <h6 class="price">$17.99</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-product-area mb-50">

                            <div class="product-thumbnail">
                                <img src="img/bg-img/p10.jpg" alt="">

                                <div class="product-meta-data">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Favourite"><i
                                            class="icon_heart_alt"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i
                                            class="icon_cart_alt"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i
                                            class="arrow_left-right_alt"></i></a>
                                </div>
                            </div>

                            <div class="product-desc text-center pt-4">
                                <a href="#" class="product-title">Strawberry</a>
                                <h6 class="price">$17.99</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-product-area mb-50">

                            <div class="product-thumbnail">
                                <img src="img/bg-img/p11.jpg" alt="">

                                <div class="product-meta-data">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Favourite"><i
                                            class="icon_heart_alt"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i
                                            class="icon_cart_alt"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i
                                            class="arrow_left-right_alt"></i></a>
                                </div>
                            </div>

                            <div class="product-desc text-center pt-4">
                                <a href="#" class="product-title">Strawberry</a>
                                <h6 class="price">$17.99</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-product-area mb-50">

                            <div class="product-thumbnail">
                                <img src="img/bg-img/p12.jpg" alt="">

                                <span class="product-tags bg-danger">Sale</span>

                                <div class="product-meta-data">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Favourite"><i
                                            class="icon_heart_alt"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i
                                            class="icon_cart_alt"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i
                                            class="arrow_left-right_alt"></i></a>
                                </div>
                            </div>

                            <div class="product-desc text-center pt-4">
                                <a href="#" class="product-title">Strawberry</a>
                                <h6 class="price">$17.99</h6>
                            </div>
                        </div>
                    </div>
                </div> -->

                <div class="row">
                    @foreach($list_product as $product)
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-product-area mb-50">
                            <div class="product-thumbnail">
                                <img src="img/bg-img/p1.jpg" alt="" />

                                <!-- <span class="product-tags">Hot</span> -->

                                <div class="product-meta-data">
                                    <!-- <a
                                        href="#"
                                        data-toggle="tooltip"
                                        data-placement="top"
                                        title="Favourite"
                                        ><i class="icon_heart_alt"></i
                                    ></a> -->
                                    <a
                                        href="{{route('cart.add',$product->id)}}"
                                        data-toggle="tooltip"
                                        data-placement="top"
                                        title="Add To Cart"
                                        ><i class="icon_cart_alt"></i
                                    ></a>
                                    <a
                                        href="#"
                                        data-toggle="tooltip"
                                        data-placement="top"
                                        title="Compare"
                                        ><i class="arrow_left-right_alt"></i
                                    ></a>
                                </div>
                            </div>

                            <div class="product-desc text-center pt-4">
                                <a
                                    href="#"
                                    class="product-title"
                                    >{{$product->name}}</a
                                >
                                <h6 class="price">${{$product->price}}</h6>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <nav>
                    {{$list_product->links()}}
                </nav>
            </div>
        </div>
    </div>
</section>
@endsection
