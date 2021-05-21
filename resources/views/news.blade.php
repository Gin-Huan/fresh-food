@extends('index')
@section('content')
<div class="famie-breadcrumb">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#"><i class="fa fa-home"></i> Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    News
                </li>
            </ol>
        </nav>
    </div>
</div>
<section class="famie-blog-area">
    <div class="container">
        <div class="row">

            <div class="col-12 col-md-8">
                <div class="posts-area">

                    @foreach($posts as $post)
                    <div class="single-blog-post-area mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <h6>Post on <a href="#" class="post-date">{{date('d-m-Y', strtotime($post->created_at))}}</a> /
                            <a href="#" class="post-author">{{$post->user ? $post->user->name : ""}}</a>
                        </h6>
                        <a href="{{route('new.show',$post->id)}}" class="post-title">{{$post->title}}</a>
                        <img src="img/bg-img/26.jpg" alt="" class="post-thumb">
                        <p class="post-excerpt">
                            {{$post->excerpt}}
                        </p>
                    </div>
                    @endforeach

                </div>

                <!-- <nav>
                    <ul class="pagination wow fadeInUp" data-wow-delay="900ms">
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </nav> -->
            </div>

            <div class="col-12 col-md-4">
                <div class="sidebar-area">

                    <div class="single-widget-area">
                        <form action="#" method="post" class="search-widget-form">
                            <input type="search" class="form-control" placeholder="Search">
                            <button type="submit"><i class="icon_search" aria-hidden="true"></i></button>
                        </form>
                    </div>

                    <div class="single-widget-area">

                        <h5 class="widget-title">Catagories</h5>

                        <ul class="cata-list">
                            <li><a href="#">Recipe Collections</a></li>
                            <li><a href="#">The advantage of knowledge</a></li>
                            <li><a href="#">Organic Farming</a></li>
                            <li><a href="#">Farming &amp; Agricultural</a></li>
                            <li><a href="#">Special Diet</a></li>
                            <li><a href="#">How to Manage Soil Fertility</a></li>
                        </ul>
                    </div>

                    <div class="single-widget-area">

                        <h5 class="widget-title">Recent News</h5>

                        <div class="single-recent-blog style-2 d-flex align-items-center">
                            <div class="post-thumbnail">
                                <img src="img/bg-img/30.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="#" class="post-title">US milk production continues its upward trajectory for
                                    2018</a>
                                <div class="post-date">18 Aug 2018</div>
                            </div>
                        </div>

                        <div class="single-recent-blog style-2 d-flex align-items-center">
                            <div class="post-thumbnail">
                                <img src="img/bg-img/31.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="#" class="post-title">USDA'S crop ratings more ahead for corn, drop for
                                    soybeans</a>
                                <div class="post-date">18 Aug 2018</div>
                            </div>
                        </div>

                        <div class="single-recent-blog style-2 d-flex align-items-center">
                            <div class="post-thumbnail">
                                <img src="img/bg-img/32.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="#" class="post-title">Auction report: Bids aplenty for massive John Deere
                                    collection</a>
                                <div class="post-date">18 Aug 2018</div>
                            </div>
                        </div>

                        <div class="single-recent-blog style-2 d-flex align-items-center">
                            <div class="post-thumbnail">
                                <img src="img/bg-img/33.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="#" class="post-title">Wool prices expected to remain competitive as demand is
                                    grow</a>
                                <div class="post-date">18 Aug 2018</div>
                            </div>
                        </div>
                    </div>

                    <div class="single-widget-area">

                        <h5 class="widget-title">Tags</h5>

                        <ul class="famie-tags">
                            <li><a href="#">All product</a></li>
                            <li><a href="#">Freshy Fruit</a></li>
                            <li><a href="#">Sweet Corn</a></li>
                            <li><a href="#">Chicken</a></li>
                            <li><a href="#">Organic</a></li>
                            <li><a href="#">Farm Practices</a></li>
                            <li><a href="#">Meat</a></li>
                            <li><a href="#">Special Recipe</a></li>
                        </ul>
                    </div>

                    <div class="single-widget-area">

                        <h5 class="widget-title">Best products</h5>

                        <div class="single-best-product d-flex align-items-center">

                            <div class="product-thumbnail">
                                <a href="#"><img src="img/bg-img/34.jpg" alt=""></a>
                            </div>

                            <div class="product-info">
                                <a href="#" class="pro-name">Strawberry</a>
                                <h6>$17.99</h6>
                                <div class="product-rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>

                        <div class="single-best-product d-flex align-items-center">

                            <div class="product-thumbnail">
                                <a href="#"><img src="img/bg-img/35.jpg" alt=""></a>
                            </div>

                            <div class="product-info">
                                <a href="#" class="pro-name">Pure Honey</a>
                                <h6>$17.99</h6>
                                <div class="product-rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>

                        <div class="single-best-product d-flex align-items-center">

                            <div class="product-thumbnail">
                                <a href="#"><img src="img/bg-img/36.jpg" alt=""></a>
                            </div>

                            <div class="product-info">
                                <a href="#" class="pro-name">Green Apple</a>
                                <h6>$17.99</h6>
                                <div class="product-rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection