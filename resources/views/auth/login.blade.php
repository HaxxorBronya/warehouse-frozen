@extends('layouts.login')

@section('content')
<div class="row" style="height: 100vh;">
    <div class="col-md-4 px-4 m-0">
        <div class="card border-0 px-4">
            <div class="card-body">
                <div class="my-5 text-center text-indigo">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-salad" width="32" height="32" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M4 11h16a1 1 0 0 1 1 1v.5c0 1.5 -2.517 5.573 -4 6.5v1a1 1 0 0 1 -1 1h-8a1 1 0 0 1 -1 -1v-1c-1.687 -1.054 -4 -5 -4 -6.5v-.5a1 1 0 0 1 1 -1z"></path>
                        <path d="M18.5 11c.351 -1.017 .426 -2.236 .5 -3.714v-1.286h-2.256c-2.83 0 -4.616 .804 -5.64 2.076"></path>
                        <path d="M5.255 11.008a12.204 12.204 0 0 1 -.255 -2.008v-1h1.755c.98 0 1.801 .124 2.479 .35"></path>
                        <path d="M8 8l1 -4l4 2.5"></path>
                        <path d="M13 11v-.5a2.5 2.5 0 1 0 -5 0v.5"></path>
                    </svg>
                    <h2 class="text-indigo">FROZEN FOOD</h2>
                    <div class="bg-secondary bg-opacity-10 p-1 rounded-5">
                        <span class="small poppins fw-normal">Warehouse Management System</span>
                    </div>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <label for="email" class="mt-2">{{ __('Email Address') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <label for="password" class="mt-2">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>

                    <div class="row mb-0 mt-2">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-dark">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
        
    <div class="col-md-8 p-0 m-0 bg-secondary d-none d-md-block">
    



    </div>


</div>
@endsection
