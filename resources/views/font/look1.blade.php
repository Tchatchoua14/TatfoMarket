@extends('font.master')
@section('title', 'look1')
@section('content')
@include('font.partials.header') 
@include('font.partials.menu')
   <!--Body Content-->
   <div id="page-content" class="mt-5">
    	<!--Page Title-->
    	<div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width">Lookbook</h1></div>
      		</div>
		</div>
        
        <!-- Lookbook Start -->
        <div class="lookbook-1">
        	<div class="lookbook grid grid-masonary">
            	<div class="grid-sizer"></div>
            	<div class="grid-lookbook grid-item">
                    <img src="{{ asset('images/lookbook-2.jpg') }}" alt="">
                    <div class="caption">
                        <h2>Women's Winter wear</h2>
                        <a class="btn" href="#">Shop The Collectons <i class="fa fa-caret-right" aria-hidden="true"></i> </a>
                    </div>
                    <a class="overlay" href="#"></a>
                </div>
                <div class="grid-lookbook grid-item">
                    <img src="{{ asset('images/lookbook-3.jpg') }}" alt="">
                    <div class="caption">
                      <h2>Collection 2017 special</h2>
                      <a class="btn" href="#">Shop The Collectons <i class="fa fa-caret-right" aria-hidden="true"></i> </a>
                    </div>
                    <a class="overlay" href="#"></a>
            	</div>
                <div class="grid-lookbook grid-item">
          			<img src="{{ asset('images/lookbook-4.jpg') }}" alt="">
        			<div class="caption">
          				<h2>Summer Collection</h2>
          				<a class="btn" href="#">Shop The Collectons <i class="fa fa-caret-right" aria-hidden="true"></i> </a>
        			</div>
        			<a class="overlay" href="#"></a>
        		</div>
                <div class="grid-lookbook grid-item">
          			<img src="{{ asset('images/lookbook-5.jpg') }}" alt="">
        			<div class="caption">
          				<h2>Kids Wear</h2>
          				<a class="btn" href="#">Shop The Collectons <i class="fa fa-caret-right" aria-hidden="true"></i> </a>
        			</div>
        			<a class="overlay" href="#"></a>
        		</div>
                <div class="grid-lookbook grid-item">
          			<img src="{{ asset('images/lookbook-6.jpg') }}" alt="">
        			<div class="caption">
          <h2>lingerie collection</h2>
        
          <a class="btn" href="#">Shop The Collectons <i class="fa fa-caret-right" aria-hidden="true"></i> </a>
          
        </div>
        			<a class="overlay" href="#"></a>  </div>
            	</div>
        </div>
        <!-- Lookbook Start -->
    </div>
    <!--End Body Content-->
@endsection
@section('script')
<script>
     	// Grid Masonry Lookbook
		// init Masonry
		var $grid = $('.grid').masonry({
		  itemSelector: '.grid-item',
		  percentPosition: true,
		  columnWidth: '.grid-sizer'
		});
		
		// layout Masonry after each image loads
		$grid.imagesLoaded().progress( function() {
		  $grid.masonry();
		});
     </script> 
@endsection