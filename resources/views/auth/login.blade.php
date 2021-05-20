@extends('index') @section('content')
<div class="container" style="min-height: 600px; padding-top: 150px; padding-bottom: 50px">
    <div class="row justify-content-center">
        <div class="col-md-6 col-xs-8 col-12">
            <div class="card">
                <div class="card-header bg-white text-center">
                    <h3>
                        <strong>{{ __("Sign in") }}</strong>
                    </h3>
                    <i>Enter your email and password to sign in</i>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{route('login')}}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-8 offset-md-2">
                                <input id="email" placeholder="Email" type="email" class="
                                        form-control form-control-lg
                                        @error('email')
                                        is-invalid
                                        @enderror
                                    " name="email" value="{{ old('email') }}" required autocomplete="email"
                                    autofocus />

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8 offset-md-2">
                                <input placeholder="Password" id="password" type="password" class="
                                        form-control form-control-lg
                                        @error('password')
                                        is-invalid
                                        @enderror
                                    " name="password" required autocomplete="current-password" />

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8 offset-md-2">
                                <div class="form-check">
                                    <label class="form-check-label" for="remember">
                                        {{ __("Remember Me") }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-2">
                                <button style="background-color: #77b122" type="submit"
                                    class="btn btn-lg btn-app text-white w-100">
                                    {{ __("Login") }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="text-center mt-3">
                        <div>
                            Don't have an account? <a href=""> Sign up </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection