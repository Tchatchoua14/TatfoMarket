@extends('font.master')
@section('title')
@section('content')
  
    <!--Body Content-->
    <div id="page-content">
    	<!--Page Title-->
    	<div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width">Collection Page</h1></div>
      		</div>
		</div>
        <!--End Page Title-->
        
        <div class="container collection-box">
        	<div class="row">
                <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                	<div class="colletion-item">
                        <a href="home14-bags.html">
                            <img class="blur-up lazyload" data-src="{{ asset('images/collection/collection-page1.jpg') }}" src="{{ asset('images/collection/collection-page1.jpg') }}" alt="image" title="">
                        <span class="title"><span>Bags</span></span>
                        </a>
                    </div>
               	</div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                	<div class="colletion-item">
                        <a href="home11-grid.html">
                            <img class="blur-up lazyload" data-src="{{ asset('images/collection/collection-page2.jpg') }}" src="{{ asset('images/collection/collection-page2.jpg') }}" alt="image" title="">
                            <span class="title"><span>Women</span></span>
                        </a>
                    </div>
               	</div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                	<div class="colletion-item">
                        <a href="home7-shoes.html">
                            <img class="blur-up lazyload" data-src="{{ asset('images/collection/collection-page3.jpg') }}" src="{{ asset('images/collection/collection-page3.jpg') }}" alt="image" title="">
                            <span class="title"><span>Women Shoes</span></span>
                        </a>
                    </div>
               	</div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                	<div class="colletion-item">
                        <a href="home9-parallax.html">
                            <img class="blur-up lazyload" data-src="{{ asset('images/collection/collection-page4.jpg') }}" src="{{ asset('images/collection/collection-page4.jpg') }}" alt="image" title="">
                            <span class="title"><span>Men</span></span>
                        </a>
                    </div>
               	</div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                	<div class="colletion-item">
                        <a href="home6-modern.html">
                            <img class="blur-up lazyload" data-src="{{ asset('images/collection/collection-page5.jpg') }}" src="{{ asset('images/collection/collection-page5.jpg') }}" alt="image" title="">
                            <span class="title"><span>Kids</span></span>
                        </a>
                    </div>
               	</div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                	<div class="colletion-item">
                        <a href="home15-funiture.html">
                            <img class="blur-up lazyload" data-src="{{ asset('images/collection/collection-page6.jpg') }}" src="{{ asset('images/collection/collection-page6.jpg') }}" alt="image" title="">
                            <span class="title"><span>Accessories</span></span>
                        </a>
                    </div>
               	</div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                	<div class="colletion-item">
                        <a href="home5-cosmetic.html">
                            <img class="blur-up lazyload" data-src="{{ asset('images/collection/collection-page7.jpg') }}" src="{{ asset('images/collection/collection-page7.jpg') }}" alt="image" title="">
                            <span class="title"><span>cosmetics</span></span>
                        </a>
                    </div>
               	</div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                	<div class="colletion-item">
                        <a href="home8-jewellery.html">
                            <img class="blur-up lazyload" data-src="{{ asset('images/collection/collection-page8.jpg') }}" src="{{ asset('images/collection/collection-page8.jpg') }}" alt="image" title="">
                            <span class="title"><span>Jewellery</span></span>
                        </a>
                    </div>
               	</div>
            </div>
        </div>
        
    </div>
    <!--End Body Content-->
@endsection
