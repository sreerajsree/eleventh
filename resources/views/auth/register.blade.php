@extends('layouts.app')

@section('content')
    <main id="main">
        <section class="bg-primary" data-bs-theme="dark">
            <div class="container-fluid overflow-hidden">
                <div class="row">
                    <div class="col-12 col-md-6 order-1 order-md-0 align-self-md-end">
                        <div class="row py-3 py-sm-5 py-xl-9 justify-content-center mx-auto">
                            <div class="col-12">
                                <div class="card bg-white text-dark mx-auto">
                                    <div class="card-header">{{ __('Login') }}</div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                    
                                            <div class="row mb-3">
                                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="name" type="text" class="form-control bg-light @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    
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
                                                    <input id="email" type="email" class="form-control bg-light @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    
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
                                                    <input id="password" type="password" class="form-control bg-light @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    
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
                                                    <input id="password-confirm" type="password" class="form-control bg-light" name="password_confirmation" required autocomplete="new-password">
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
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
