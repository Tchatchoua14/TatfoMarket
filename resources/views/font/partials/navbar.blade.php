   <!--Top Header-->
   <div class="top-header">
        <div class="container-fluid">
            <div class="row">
            	<div class="col-10 col-sm-8 col-md-5 col-lg-4">
                    <div class="language-dropdown">
                        <span class="language-dd">English <img src="{{ asset('images/flag-uk.png') }}" alt="" /></span>
                        <ul id="language" class="text-uppercase">
                            <li class="">French <img src="{{ asset('images/flag-france.png') }}" alt="" /></li>
                        </ul>
                    </div>
                    <!--                       
                    <div>
                        <select name="" id="" class="change">
                            <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }} > English</option>
                            <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>French</option>
                        </select>
                    </div> -->
                    <!-- <select id="changeLang">
                            <option id="en" class="text-uppercase" value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }} > English <img src="{{ asset('images/flag-uk.png') }}" alt="" /></option>
                            <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>French  <img src="{{ asset('images/flag-france.png') }}" alt="" /></option>
                        </select>
                          -->
                    <p class="phone-no"><i class="anm anm-phone-s"></i> +(237) 691 167 590</p>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 d-none d-lg-none d-md-block d-lg-block">
                	<div class="text-center"><p class="top-header_middle-text">{{ __('message.welcome.toi') }} Worldwide Express Shipping</p></div>
                </div>
                <div class="col-2 col-sm-4 col-md-3 col-lg-4 text-right">
                	<span class="user-menu d-block d-lg-none"><i class="anm anm-user-al" aria-hidden="true"></i></span>
                    <ul class="customer-links list-inline">
                        @if (Route::has('login'))
                         @auth 
                         @if (Auth::user()->role=="admin") 
                         <li><a href="{{ route('index') }}">Voir Interface Admin</a></li>
                         @endif
                         @if (Auth::user()->role=="user")  
                         
                         <li><a href="{{route('profile.edit')}}"><span class="text-lowercase mr-1">{{ Auth::user()->email }}</span></a></li>
                         @endif
                        <!-- <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">  {{ __('Logout') }}</a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        </li> -->
                          <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart" style="margin-top: -2px; margin-right: 1px;"></i> Wishlist</a></li>
                          @endauth
                          @guest()
                          <li> <a href="{{ route('login') }}"><span class="icon-lock"></span>Login</a> </li> 
                            @if (Route::has('register'))
                            <li> <a href="{{ route('register') }}"><i class="fa fa-user" style="margin-top: -2px; margin-right: 1px;"></i>Create Account</a> </li>
                            @endif
                            @endguest
                                
                         @endif
                         

                       
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--End Top Header-->
