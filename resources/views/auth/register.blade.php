@extends('layouts.app')

@section('content')

    <!-- Cart view section -->
    <section id="aa-myaccount">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-myaccount-area">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="aa-myaccount-register">
                                    <h4>Register</h4>

                                    <form method="POST" action="{{ route('register') }}" class="aa-login-form">
                                        @csrf

                                        <label for="">Name<span>*</span></label>
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                        <label for="">Email address<span>*</span></label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                        <label for="">Password<span>*</span></label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                        <label for="">Confirm Password<span>*</span></label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        
                                        <button type="submit" class="aa-browse-btn">
                                            {{ __('Register') }}
                                        </button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
