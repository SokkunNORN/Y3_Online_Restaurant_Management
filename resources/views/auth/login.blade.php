@extends('layouts.app')

@section('content')
<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(images/hero_1.jpeg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="display-t js-fullheight">
                    <div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
                        <br><br><br>
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <form method="POST" action="{{ route('login') }}" id="form-wrap">
                                @csrf
                                <h2>Login</h2>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label for="email">E-Mail Address</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    </div>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label for="password">Password</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-primary btn-lg" value="Login">
                                    </div>
                                </div>
        
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

@endsection
