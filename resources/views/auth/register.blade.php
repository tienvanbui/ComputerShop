@extends('layouts.app')
@section('title')
  Register
@endsection
@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header" style="color: black;">{{ __('Register') }}</div>
          <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
              @csrf
              <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end"
                  style="color: black;">{{ __('Name') }}</label>

                <div class="col-md-6">
                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                    style="background-color: black;opacity:0.2;" placeholder="Name">

                  @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-end"
                  style="color: black;">{{ __('Email Address') }}</label>

                <div class="col-md-6">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email"
                    style="background-color: black;opacity:0.2;" placeholder="Email">

                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="username" class="col-md-4 col-form-label text-md-end"
                  style="color: black;">{{ __('Username') }}</label>

                <div class="col-md-6">
                  <input id="username" type="username" class="form-control @error('username') is-invalid @enderror"
                    name="username" required autocomplete="username" style="background-color: black;opacity:0.2;"
                    placeholder="username">

                  @error('username')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="address" class="col-md-4 col-form-label text-md-end"
                  style="color: black;">{{ __('Address') }}</label>

                <div class="col-md-6">
                  <input id="address" type="address" class="form-control @error('address') is-invalid @enderror"
                    name="address" required autocomplete="address" style="background-color: black;opacity:0.2;"
                    placeholder="address">

                  @error('address')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="phoneNumber" class="col-md-4 col-form-label text-md-end"
                  style="color: black;">{{ __('Phone Number') }}</label>

                <div class="col-md-6">
                  <input id="phoneNumber" type="phoneNumber"
                    class="form-control @error('phoneNumber') is-invalid @enderror" name="phoneNumber" required
                    autocomplete="phoneNumber" style="background-color: black;opacity:0.2;" placeholder="phoneNumber">

                  @error('phoneNumber')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="password" class="col-md-4 col-form-label text-md-end"
                  style="color: black;">{{ __('Password') }}</label>

                <div class="col-md-6">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="new-password" style="background-color: black;opacity:0.2;"
                    placeholder="Password">

                  @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-end"
                  style="color: black;">{{ __('Confirm Password') }}</label>

                <div class="col-md-6">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                    autocomplete="new-password" style="background-color: black;opacity:0.2;"
                    placeholder="Confirm Password">
                </div>
              </div>
              <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-dark">
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
@endsection
