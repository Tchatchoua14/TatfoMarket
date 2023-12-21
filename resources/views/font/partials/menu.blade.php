<div class="mobile-nav-wrapper" role="navigation">
		<div class="closemobileMenu"><i class="icon anm anm-times-l pull-right"></i> Close Menu</div>
        <ul id="MobileNav" class="mobile-nav">
        @if (Route::has('login'))
                         @auth 
                         @if (Auth::user()->role=="user")
                        <li class="lvl1 parent dropdown"><a href="#">{{ __('message.home.nav0') }}<i class="anm anm-angle-down-l"></i></a>
                                <ul class="dropdown">

                                                         
                                                        <li><a href="{{route('compte')}}" class="site-nav">{{ __('message.home.profile') }}</a></li>
                                                        <!-- <li><a href="{{route('commande')}}" class="site-nav">{{ __('message.home.order') }}</a></li>
                                                        <li><a href="" class="site-nav">{{ __('message.home.transaction') }}</a></li> -->
                                                        <li><a href="{{ route('logout') }}" class="text-uppercase" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">  {{ __('message.home.logout') }}</a>
                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                @csrf
                                                            </form>
                                                        </li>
                         
                               </ul>
                            </li>
                            @endif
                            @endauth
                             @endif
                             <li class="lvl1 parent megamenu"><a href="#">{{ __('message.home.nav11') }}<i class="anm anm-angle-down-l"></i></a>
                                <div class="megamenu style1">
                                    <ul class="grid mmWrapper">
                                        <li class="grid__item large-up--one-whole">
                                            <ul class="grid">
                                                <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">{{ __('message.home.nav11') }} {{ __('message.home.group') }} 1</a>
                                                    <ul class="subLinks">
                                                      <li class="lvl-2"><a href="{{route('home')}}" class="site-nav lvl-2">{{ __('message.home.nav1') }} 1 - {{ __('message.home.home1') }}</a></li>
                                                      <li class="lvl-2"><a href="{{route('home2')}}" class="site-nav lvl-2">{{ __('message.home.nav1') }} 2 - {{ __('message.home.home2') }}</a></li>
                                                      <li class="lvl-2"><a href="{{route('home15')}}" class="site-nav lvl-2">{{ __('message.home.nav1') }} 15 - {{ __('message.home.home3') }} <span class="lbl nm_label1">{{ __('message.home.new') }}</span></a></li>
                                                      <li class="lvl-2"><a href="{{route('home5')}}" class="site-nav lvl-2">{{ __('message.home.nav1') }} 3 - {{ __('message.home.boxed') }}</a></li>
                                                      <li class="lvl-2"><a href="{{route('home14')}}" class="site-nav lvl-2">{{ __('message.home.nav1') }} 4 - {{ __('message.home.home4') }}</a></li>
                                                      <li class="lvl-2"><a href="{{route('home7')}}" class="site-nav lvl-2">{{ __('message.home.nav1') }} 5 - {{ __('message.home.home5') }}</a></li>
                                                    </ul>
                                                  </li>
                                                <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">{{ __('message.home.nav11') }} {{ __('message.home.group') }} 2</a>
                                                    <ul class="subLinks">
                                                        <li class="lvl-2"><a href="{{route('home8')}}" class="site-nav lvl-2">{{ __('message.home.nav1') }} 8 - {{ __('message.home.jewellery') }}</a></li>
                                                        <li class="lvl-2"><a href="{{route('home7')}}" class="site-nav lvl-2">{{ __('message.home.nav1') }} 9 - {{ __('message.home.parallax') }}</a></li>
                                                        <li class="lvl-2"><a href="{{route('home13')}}" class="site-nav lvl-2">{{ __('message.home.nav1') }} 10 - {{ __('message.home.minimal') }}</a></li>
                                                        <li class="lvl-2"><a href="{{route('home11')}}" class="site-nav lvl-2">{{ __('message.home.nav1') }} 11 - {{ __('message.home.grid') }}</a></li>
                                                        <li class="lvl-2"><a href="{{route('home14')}}" class="site-nav lvl-2">{{ __('message.home.nav1') }} 14 - {{ __('message.home.bags') }} <span class="lbl nm_label1">{{ __('message.home.new') }}</span></a></li>
                                                    </ul>
                                                </li>
                                                <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">{{ __('message.home.sec0') }}</a>
                                                    <ul class="subLinks">
                                                        <li class="lvl-2"><a href="{{route('home11')}}" class="site-nav lvl-2">{{ __('message.home.sec1') }}</a></li>
                                                        <li class="lvl-2"><a href="{{route('home5')}}" class="site-nav lvl-2">{{ __('message.home.sec2') }}</a></li>
                                                        <li class="lvl-2"><a href="{{route('home7')}}" class="site-nav lvl-2">{{ __('message.home.sec3') }}</a></li>
                                                        <li class="lvl-2"><a href="{{route('home8')}}" class="site-nav lvl-2">{{ __('message.home.sec4') }}</a></li>
                                                        <li class="lvl-2"><a href="{{route('home2')}}" class="site-nav lvl-2">{{ __('message.home.sec5') }}</a></li>
                                                        <li class="lvl-2"><a href="{{route('home15')}}" class="site-nav lvl-2">{{ __('message.home.sec7') }}</a></li>
                                                    </ul>
                                                </li>
                                                <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">{{ __('message.home.shop8') }}</a>
                                                    <ul class="subLinks">
                                                        <li class="lvl-2"><a href="{{route('home13')}}" class="site-nav lvl-2">{{ __('message.home.top') }} <span class="lbl nm_label1">{{ __('message.home.new') }}</span></a></li>
                                                        
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="grid__item large-up--one-whole imageCol"><a href="#"><img src="{{ asset('images/megamenu-bg2.jpg') }}" alt=""></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="lvl1 parent dropdown"><a href="#">{{ __('message.home.nav2') }}<i class="anm anm-angle-down-l"></i></a>
                                <ul class="dropdown">
                                    <li><a href="{{route('home11')}}" class="site-nav">{{ __('message.home.fashion') }}<span class="lbl nm_label1">{{ __('message.home.new') }} </span></a></li>
                                    <li><a href="{{route('home5')}}" class="site-nav">{{ __('message.home.home5') }}</a></li>
                                    <li><a href="{{route('home14')}}" class="site-nav">{{ __('message.home.bags') }}<span class="lbl nm_label1">{{ __('message.home.SALE') }}</span></a>
                                    </li>
                                    <li><a href="{{route('home15')}}" class="site-nav">{{ __('message.home.ass') }}</a>
                                    </li>
                                    <li><a href="{{route('home7')}}" class="site-nav">{{ __('message.home.shoes') }}<span class="lbl nm_label1">{{ __('message.home.popular') }} </span></a></li>
                                    <li><a href="{{route('home8')}}" class="site-nav">{{ __('message.home.jewellery1') }}</a></li>
                                </ul>
                            </li>                  
                            <li class="lvl1 parent dropdown"><a href="#">BLOG <i class="anm anm-angle-down-l"></i></a>
                                <ul class="dropdown">
                                <li><a href="{{route('home2')}}" class="site-nav">{{ __('message.home.var4') }}</a></li>
                                <li><a href="{{route('home7')}}" class="site-nav">Article</a></li>
                                <li><a href="#" class="site-nav">{{ __('message.home.var3') }}<i class="anm anm-angle-right-l"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="" class="site-nav">{{ __('message.home.var1') }}</a></li>
                                        <li><a href="" class="site-nav">{{ __('message.home.var2') }}</a></li>
                                    </ul>
                                </li>
                                <li><a href="compare-variant1.html" class="site-nav">{{ __('message.home.compare') }} <i class="anm anm-angle-right-l"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="{{route('compare1')}}" class="site-nav">{{ __('message.home.compare1') }}</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" class="site-nav">404</a></li>
                                </ul>
                            </li>
                            <li class="lvl1 parent dropdown"><a href="#">{{ __('message.home.var5') }}<i class="anm anm-angle-down-l"></i></a>
                                <ul class="dropdown">
                                    <li><a href="{{route('about')}}" class="site-nav">{{ __('message.home.var7') }} <span class="lbl nm_label1">New</span> </a></li>
                                    <li><a href="{{route('contact.create')}}" class="site-nav">{{ __('message.home.var8') }} </a></li>
                                    <li><a href="{{route('register')}}" class="site-nav">Administration</a></li>
                                </ul>
                            </li>
        
       </ul>
	</div>
	<!--End Mobile Menu-->