@extends('layouts.app')

@section('content')
    <div class="pt-24 flex justify-center items-center h-screen bg-white">
        <div class=" p-5 rounded-lg shadow-md w-1/3">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-3">
                    <label for="email" class="">{{ __('Email Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class=" w-full rounded-sm @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="text-red-500" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="password" class="">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password"
                            class=" w-full rounded-sm @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">

                        @error('password')
                            <span class="text-red-500" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>


                <div class="mb-0">
                    <div class=" ">
                        <button type="submit" class="bg-sky-600 px-6 py-2 rounded-lg text-white font-semibold float-end">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    @endsection
