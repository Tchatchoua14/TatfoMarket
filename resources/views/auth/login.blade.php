@extends('font.master')
@section('title', 'login')
@section('content')
@include('font.partials.header') 
@include('font.partials.menu')
    <!--Body Content-->
    <div id="page-content" class="mt-5">
    	<!--Page Title-->
    	<div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width">{{ __('Log in') }}</h1></div>
      		</div>
		</div>
        <!--End Page Title-->
        
        <div class="container">
        	<div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 main-col offset-md-3 d-flex blur justify-content-center shadow-lg my-sm-0 my-sm-6 mt-5 mb-5">
                	<div class="mb-4 mt-4">
                       <form method="POST" action="{{ route('login') }}">
                          @csrf	
                          <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="CustomerEmail">Email</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="CustomerPassword">{{ __('message.home.mdp') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                   @enderror                       	
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember me') }}
                                    </label>
                                </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
                                <input type="submit" class="btn mb-3" value="{{ __('Log in') }}">
                                <p class="mb-4">
                                @if (Route::has('password.request'))
                                    <a class="" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif &nbsp; | &nbsp;
								    <a href="{{ route('register') }}" id="customer_register_link">{{ __('message.home.create1') }}</a>
                                    
                              
                                </p>
                            </div>
                         </div>
                         <div class="row">
                          <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="text-center px-4">
                                    <a href="#" class="mr-2" style="text-decoration: none; pointer-events:none;">{{ __('message.home.la4') }}</a>
                                    <a href="{{ url('auth/google') }}" class="google-sign-in mr-2"><i class="fa fa-google text-danger"></i> Google</a> &nbsp; | &nbsp;
                                    <a href="{{ url('auth/github') }}" class="github-sign-in"><i class="fa fa-github"></i>   Github</a> &nbsp; | &nbsp;
                                    <a href="{{ url('auth/facebook') }}" class="facebook-sign-in ml-2"><i class="fa fa-facebook text-primary"></i> Facebook</a>
                                </div>
                            </div>
                         </div>
                     </form>
                    </div>
               	</div>
            </div>
        </div>
        
    </div>
    <!--End Body Content-->

@endsection