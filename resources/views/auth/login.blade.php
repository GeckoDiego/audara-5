@extends('layouts.base')
@section('title', 'Audara Manager')
@section('link')
<link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/authentication.css') }}">
@endsection
@section('body_content')
<div class="page-loader">
    <div class="bg-primary"></div>
  </div>

  <!-- Content -->

  <div class="authentication-wrapper authentication-3">
    <div class="authentication-inner">
              
      <!-- Form container -->
      <div class="d-flex col-lg-3 align-items-center p-5 bg-white">
        <!-- Inner container -->
        <!-- Have to add `.d-flex` to control width via `.col-*` classes -->
        <div class="d-flex col-sm-7 col-md-5 col-lg-12 px-0 px-xl-4 mx-auto">
          <div class="w-100">

            <!-- Logo -->
            <div class="d-flex justify-content-center align-items-center" align="center">
                <div class="w-100 position-relative">
                <img src="{{ asset('assets/img/logo/audara_manager.png') }}" width="250" alt="">
                </div>
            </div>
            <!-- / Logo -->

            <h4 class="text-left font-weight-normal mt-5 mb-0">@lang('auth/login.startSession')</h4>

            <!-- Form -->
            <form class="my-3" method="POST" action="{{ route('login') }}">
            @csrf
              <div class="form-group">
                <label class="form-label">@lang('auth/login.userLabel')</label>
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              </div>
              <div class="form-group">
                <label class="form-label d-flex justify-content-between align-items-end">
                  <div>@lang('auth/login.passLabel')</div>
                  <a href="{{ route('password.request') }}" class="d-block small">@lang('auth/login.forgotLabel')</a>
                </label>
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                @if ($errors->has('password'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
              </div>
              <div class="d-flex justify-content-between align-items-center m-0">
                <label class="custom-control custom-checkbox m-0">
                  <input type="checkbox" class="custom-control-input"  name="remember" {{ old('remember') ? 'checked' : '' }}>
                  <span class="custom-control-label">@lang('auth/login.remenberLabel')</span>
                </label>
                <button type="submit" class="btn btn-primary">@lang('auth/login.startSession')</button>
              </div>
            </form>
            <!-- / Form -->

            <div class="text-left text-muted">
              @lang('auth/login.questionLabel')
              <a href="javascript:void(0)">www.audara.com</a><br>
              <p><small><i>@lang('auth/login.commentLabel1')<br>@lang('auth/login.commentLabel2')</i></small></p>
            </div>

          </div>
        </div>
      </div>
      <!-- / Form container -->
      <!-- Side container -->
      <!-- Do not display the container on extra small, small and medium screens -->
      <div class="d-none d-lg-flex col-lg-9 align-items-center ui-bg-cover ui-bg-overlay-container p-5" style="background-image: url('assets/img/bg/login_bg.png');">
      </div>
      <!-- / Side container -->

    </div>
  </div>

  <!-- / Content -->
@endsection
@section('script')
@endsection