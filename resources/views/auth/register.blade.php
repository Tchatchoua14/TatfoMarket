@extends('font.master')
@section('title')
@section('content')
@include('font.partials.header') 
@include('font.partials.menu')
    <!--Body Content-->
    <div id="page-content" class="mt-5">
    	<!--Page Title-->
    	<div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width">Create an Account</h1></div>
      		</div>
		</div>
        <!--End Page Title-->
        
        <div class="container">
        	<div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 main-col offset-md-3 d-flex blur justify-content-center shadow-lg my-sm-0 my-sm-6 mt-4 mb-5">
                	<div class="mb-4 mt-4">
                                        
                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif
                       <form method="POST" action="{{ route('register') }}" id="CustomerLoginForm" accept-charset="UTF-8" class="contact-form">	
                       @csrf
                          <div class="row">
                              <!-- Name -->
	                          <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control my-input @error('name') is-invalid @enderror" value="{{ old('name') }}" required autofocus autocomplete="name" >
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                   @enderror
                                </div>
                               </div>
                               <!-- Email Address -->
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email"  id="email" class="form-control my-input @error('email') is-invalid @enderror"  value="{{ old('email') }}" autocorrect="off" autocapitalize="off" required autocomplete="email" >
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div> 
                            </div>
                              <!-- Password -->
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" value="{{old('password')}}" name="password"  id="password" class="form-control my-input @error('password') is-invalid @enderror"  required autocomplete="new-password">  
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                   @enderror                      	
                                </div>
                            </div>
                              <!-- Confirm Password -->
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="password_confirmation">Confirm Password</label>
                                    <input type="password" value="{{old('password_confirmation')}}" name="password_confirmation"  id="password_confirmation" class="form-control my-input" required autocomplete="new-password">  
                                    @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>  
                                    @enderror                      	
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                <input class="" type="checkbox" id="terms-conditions" name="terms">
                                <label class="form-check-label" for="terms-conditions">
                                I agree to
                                <a href="{{route('Terms')}}">privacy policy & terms</a>
                                </label>                       	
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                <label for="">Recaptcha:</label>
                                {!! NoCaptcha::renderJs() !!}
                                {!! NoCaptcha::display() !!}
                                </div>

                                @if ( $errors->has('g-recaptcha-response'))

                                <span class="help-block">
                                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                </span>
                                                        
                                @endif
                            </div>
                          </div>
                          <div class="row">
                            <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
                                <input type="submit" class="btn mb-3" value="Create">
                            </div>
                         </div>
                         <p class="text-center">
                            <span>Already have an account?</span>
                            <a href="{{ route('login') }}">
                            <span>Sign in instead</span>
                            </a>
                        </p>

                        <div class="row">
                           <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="text-center px-4">
                                    <a href="{{ route('login.google') }}" class="google-sign-in mr-2"><i class="fa fa-google"></i>  Sign In with Google</a> &nbsp; | &nbsp;
                                    <a href="{{ route('login.github') }}" class="github-sign-in"><i class="fa fa-github"></i>  Sign In with Github</a> &nbsp; | &nbsp;
                                    <a href="{{ route('login.facebook') }}" class="facebook-sign-in ml-2"><i class="fa fa-facebook"></i> Sign In with Facebook</a>
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