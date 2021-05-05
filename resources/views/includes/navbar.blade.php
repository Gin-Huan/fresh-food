<div class="famie-main-menu">
    <div class="classy-nav-container breakpoint-off">
        <div class="container">
            <nav class="classy-navbar justify-content-between" id="famieNav">
                <!-- <a href="index.html" class="nav-brand"><img src="img/core-img/logo.png" alt="" /></a> -->
                <a href="index.html" class="nav-brand">Fresh food</a>

                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <div class="classy-menu">
                    <div class="classycloseIcon">
                        <div class="cross-wrap">
                            <span class="top"></span><span class="bottom"></span>
                        </div>
                    </div>

                    <div class="classynav">
                        <ul>
                            <li class="active">
                                <a href="{{url('home-page')}}">Home</a>
                            </li>
                            <li><a href="{{url('about')}}">About</a></li>
                            <li><a href="{{url('shop')}}">Shop</a></li>
                            <li>
                                <a href="{{url('our-product')}}">Our Product</a>
                            </li>
                            <li>
                                <a href="{{url('farming-pratice')}}">Farming Practice</a>
                            </li>
                            <li><a href="{{url('news')}}">News</a></li>
                            <li>
                                <a href="{{url('contact')}}">Contact</a>
                            </li>
                        </ul>

                        <!-- <div id="searchIcon">
                            <i class="icon_search" aria-hidden="true"></i>
                        </div> -->

                        <div id="cartIcon">
                            <a href="{{url('cart')}}">
                                <i class="icon_cart_alt" aria-hidden="true"></i>
                                <span class="cart-quantity">{{Cart::count()}}</span>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- 
            <div class="search-form">
                <form action="#" method="get">
                    <input type="search" name="search" id="search" placeholder="Type keywords &amp; press enter..." />
                    <button type="submit" class="d-none"></button>
                </form>

                <div class="closeIcon">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </div>
            </div> -->
        </div>
    </div>
</div>