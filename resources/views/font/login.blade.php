@extends('font.master')
@section('title')
@section('content')
  <!--Body Content-->
  <div id="page-content">
    	<!--Page Title-->
    	<div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width">Login</h1></div>
      		</div>
		</div>
        <!--End Page Title-->
        
        <div class="container">
        	<div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 main-col offset-md-3">
                	<div class="mb-4">
                                        
                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif
                       <form method="POST" action="{{ route('login') }}" id="CustomerLoginForm" accept-charset="UTF-8" class="contact-form">
                       @csrf

                          <div class="row">
                             <!-- Email Address -->	
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email"  autocorrect="off" autocapitalize="off" class="form-control my-input @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    
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
                                    <input type="password"  name="password" id="password" class="form-control my-input @error('password') is-invalid @enderror"  required autocomplete="current-password">  
                                    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror                      	
                                </div>
                            </div>
                            <!-- Remember Me -->
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <span class="ml-2 text-sm text-gray-600">Remember me</span>
                            </label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
                                <input type="submit" class="btn mb-3" value="Sign In">
                                <p class="mb-4">
									<a href="#" id="RecoverPassword">Forgot your password?</a> &nbsp; | &nbsp;
								    <a href="{{ route('register') }}" id="customer_register_link">Create account</a>
                                </p>
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="text-center px-4">
                                    <a href="{{ route('socialite.redirect', 'google') }}" class="google-sign-in mr-2"><i class="fa fa-google"></i>  Sign In with Google</a> &nbsp; | &nbsp;
                                    <a href="{{ route('socialite.redirect', 'github') }}" class="github-sign-in"><i class="fa fa-github"></i>  Sign In with Github</a> &nbsp; | &nbsp;
                                    <a href="{{ route('socialite.redirect', 'facebook') }}" class="facebook-sign-in ml-2"><i class="fa fa-facebook"></i> Sign In with Facebook</a>
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