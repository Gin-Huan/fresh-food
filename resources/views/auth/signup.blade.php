@extends('index')
@section('content')
<div class="container" style="min-height: 600px; padding-top: 150px; padding-bottom: 50px;">
    <div class="row justify-content-center">
        <div class="col-md-6 col-xs-8 col-12">
            <div class="card">
                <div class="card-header bg-white text-center">
                    <h3><strong>{{ __('Sign up') }}</strong></h3>
                    <i>Login to start shopping.</i>
                </div>
                <div class="card-body">
                    <form method="POST" action="">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-8 offset-md-2">
                                <input id="name" type="text"
                                    class="form-control form-control-lg @error('name') is-invalid @enderror" name="name"
                                    placeholder="Name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8 offset-md-2">
                                <input id="email" type="email"
                                    class="form-control form-control-lg @error('email') is-invalid @enderror"
                                    name="email" placeholder="Email" value="{{ old('email') }}" required
                                    autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8 offset-md-2">
                                <input id="password" type="password"
                                    class="form-control form-control-lg @error('password') is-invalid @enderror"
                                    name="password" required placeholder="Password" autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8 offset-md-2">
                                <input id="password-confirm" type="password" class="form-control form-control-lg"
                                    name="password_confirmation" placeholder="Password confirmation" required
                                    autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8 offset-md-2">
                                <input id="phone" type="text" class="form-control form-control-lg" name="phone"
                                    placeholder="Phone number" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8 offset-md-2">
                                <select name="gender" class="form-control form-control-lg" id="">
                                    <option value="male">male</option>
                                    <option value="female">female</option>
                                    <option value="orther">orther</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-2">
                                <button style="background-color: #77b122" type="submit"
                                    class="btn btn-lg btn-app text-white w-100">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        <div class="text-center mt-3">
                            <div>
                                Already have an account?<a href="">
                                    Sign in
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection