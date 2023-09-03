   <!--Top Header-->
   <div class="top-header">
        <div class="container-fluid">
            <div class="row">
            	<div class="col-10 col-sm-8 col-md-5 col-lg-4"> 
                    <div class="language-dropdown">
                     <span class="language-dd"><a href="locale/en" id="english" style="text-decoration: none;">{{ __('message.home.langue1') }} <img src="{{ asset('images/flag-uk.png') }}" alt="" id="english1" /></a></span>
                        <ul id="language" class="text-uppercase">
                         <a href="locale/fr"  id="french" style="text-decoration: none;"><li class="">{{ __('message.home.langue2') }} <img src="{{ asset('images/flag-france.png') }}" alt="" class="ml-1" id="french2"/></li></a> 
                        </ul>
                    </div>
                    <p class="phone-no ml-3"><i class="anm anm-phone-s"></i> +(237) 691 167 590</p>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 d-none d-lg-none d-md-block d-lg-block">
                	<div class="text-center"><p class="top-header_middle-text"> {{ __('message.home.titre1') }}</p></div>
                </div>
                <div class="col-2 col-sm-4 col-md-3 col-lg-4 text-right">
                	<span class="user-menu d-block d-lg-none"><i class="anm anm-user-al" aria-hidden="true"></i></span>
                    <ul class="customer-links list-inline">
                        @if (Route::has('login'))
                         @auth 
                          @if (Auth::user()->role=="admin") 
                          <li><a href="{{ route('index') }}">{{ __('message.home.titre2') }}</a></li>
                          @endif
                         @if (Auth::user()->role=="user")  
                         
                         <li><a href="{{route('profile.edit')}}"><span class="text-lowercase mr-1">{{ Auth::user()->email }}</span></a></li>
                         @endif

                          <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart mr-1" style="margin-top: -2px; margin-right: 1px;"></i>{{ __('message.home.titre3') }}</a></li>
                          @endauth
                          @guest()
                          <li> <a href="{{ route('login') }}"><span class="icon-lock mr-1"></span>{{ __('Login') }}</a> </li> 
                            @if (Route::has('register'))
                            <li> <a href="{{ route('register') }}"><i class="fa fa-user mr-1" style="margin-top: -2px; margin-right: 1px;"></i>{{ __('message.home.nav00') }}</a> </li>
                            @endif
                            @endguest
                                
                         @endif
                         

                       
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--End Top Header-->
