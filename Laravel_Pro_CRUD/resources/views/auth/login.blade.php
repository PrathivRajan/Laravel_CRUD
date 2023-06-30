@extends('layouts.main')

@push('styles')
    <style>
        .login-form {
            max-width: 500px;
            width: auto;
            margin: auto;
            padding: 2rem;
            border: 1px solid #ced4da;
            border-radius: 0.2rem;
        }

        @media (max-width: 575.98px) {
            .login-form {
                margin: 1rem;
            }
        }
    </style>
@endpush
@section('content')
    <div class="login-form shadow-sm">
        <h4>Login</h4>
        <br>
        <form class="g-3" action="{{ route('handle.login') }}" method="POST">
            @csrf
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingEmail" placeholder="email@example.com" name="email"
                    value="{{ old('email') }}">
                <label for="floatingEmail">Email address or mobile number*</label>
                @error('email')
                    <span class="invalid-feedback d-block">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                <label for="floatingPassword">Password*</label>
                @error('password')
                    <span class="invalid-feedback  d-block">{{ $message }}</span>
                @enderror
            </div>
            {{-- <div class="py-2 d-block text-end">
                <a href="#">Forgot your password?</a>
            </div> --}}
            <div class="d-grid gap-2">
                <button class="btn btn-primary btn-lg" type="submit">Login</button>
                {{-- <button class="btn btn-outline-primary" type="button">Register</button> --}}
            </div>
        </form>
    </div>
@endsection
