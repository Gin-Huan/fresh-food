<header class="header-area">
    <div class="top-header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="top-header-content d-flex align-items-center justify-content-between">
                        <div class="top-header-meta">

                        </div>

                        <div class="top-header-meta text-right">
                            @if(Auth::user())
                            <a href="{{route('list_order',Auth::user()->id)}}">Xin chào {{Auth::user()->name}}</a>
                            @else
                            <a href="{{route('login.view')}}">Login</a>
                            <a href="{{route('register')}}">Sign up</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('includes.navbar')
</header>