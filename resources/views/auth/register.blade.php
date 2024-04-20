@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">

            <div class="wrap mt-5">
                
                <div class="login-wrap p-4 p-md-5">
                    <div class="d-flex">
                        <div class="w-100">
                            <h3 class="mb-4">Register</h3>
                        </div>
                        
                    </div>
                    <form method="POST" action="{{ route('register') }}" class="signin-form">
                        @csrf
                        <div class="form-group mt-3">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" required="">
                            <label class="form-control-placeholder " for="Name">Name</label>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"  required="">
                            <label class="form-control-placeholder " for="Email">Email</label>
                        </div>
                        <div class="form-group">
                            <input id="password-field" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required="">
                            <label class="form-control-placeholder" for="password">Password</label>
                            <span toggle="#password-field" class="fa-solid fa-eye field-icon toggle-password"></span>
                            
                        </div>

                        <div class="form-group">
                            <input id="password-field" type="password" class="form-control @error('password') is-invalid @enderror" required="" name="password_confirmation">
                            <label class="form-control-placeholder" for="Confirm Password">Confirm Password</label>
                            <span toggle="#password-field" class="fa-solid fa-eye field-icon toggle-password"></span>
                            
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign Up</button>
                        </div>
                        
                    </form>
                    <p class="text-center"> <a data-toggle="tab" href="{{url('login')}}">Sign In</a></p>
                </div>
            </div>
           
            
            
        </div>
    </div>
</div>
@endsection
