@extends('font.master')
@section('title', 'search')
@section('content')
@include('font.partials.header') 
@include('font.partials.menu')
  <!--Body Content-->
  <div id="page-content" class="mt-5">
    	<!--Collection Banner-->
    	<div class="collection-header">
			<div class="collection-hero">
        		<div class="collection-hero__image"><img class="blur-up lazyload" data-src="{{ asset('images/cat-women.jpg') }}" src="{{ asset('images/cat-women.jpg') }}" alt="Women" title="Women" /></div>
        		<div class="collection-hero__title-wrapper"><h1 class="collection-hero__title page-width">Search All Articles</h1></div>
      		</div>
		</div>
        <!--End Collection Banner--> 
        
        <div class="container">
        	<div class="row">
            	<!--Sidebar-->
            	<div class="col-12 col-sm-12 col-md-3 col-lg-3 sidebar filterbar">
                	<div class="closeFilter d-block d-md-none d-lg-none"><i class="icon icon anm anm-times-l"></i></div>
                	<div class="sidebar_tags">
                    	<!--Categories-->
                    	<div class="sidebar_widget categories filter-widget">
                            <div class="widget-title"><h2>Categories</h2></div>
                            @foreach ($categories as $categorie)
                            <div class="widget-content">
                                <ul class="sidebar_categories">
                                    <li class="level1 sub-level"><a href="#;" class="site-nav" style="text-decoration:none;">{{$categorie->name}}</a>
                                    	<ul class="sublinks">
                                        	<li class="level2"><a href="#;" class="site-nav text-lowercase">{{$categorie->name}}</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            @endforeach
                        </div>
                        <!--Categories-->
                        <!--Price Filter-->
                        <div class="sidebar_widget filterBox filter-widget">
                            <div class="widget-title">
                            	<h2>Price</h2>
                            </div>
                            <form action="{{ route('search')}}" method="GET" class="price-filter">
                                @csrf
                                <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                	<div class="ui-slider-range ui-widget-header ui-corner-all" name="q"></div>
                                    <span class="ui-slider-handle ui-state-default ui-corner-all" name="q" tabindex="0"></span>
                                    <span class="ui-slider-handle ui-state-default ui-corner-all" name="q" tabindex="0"></span>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p class="no-margin"><input id="amount" name="q" type="text"></p>
                                    </div>
                                    <div class="col-6 text-right margin-25px-top">
                                        <button class="btn btn-secondary btn--small" type="submit">filter</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--End Price Filter-->
                        <!--Size Swatches-->
                        <div class="sidebar_widget filterBox filter-widget size-swacthes">
                            <div class="widget-title"><h2>Size</h2></div>
                            <div class="filter-color swacth-list">
                            	<ul>
                                    <li><span class="swacth-btn checked">X</span></li>
                                    <li><span class="swacth-btn">XL</span></li>
                                    <li><span class="swacth-btn">XLL</span></li>
                                    <li><span class="swacth-btn">M</span></li>
                                    <li><span class="swacth-btn">L</span></li>
                                    <li><span class="swacth-btn">S</span></li>
                                    <li><span class="swacth-btn">XXXL</span></li>
                                    <li><span class="swacth-btn">XXL</span></li>
                                    <li><span class="swacth-btn">XS</span></span></li>
                                </ul>
                            </div>
                        </div>
                        <!--End Size Swatches-->
                        <!--Color Swatches-->
                        <div class="sidebar_widget filterBox filter-widget">
                            <div class="widget-title"><h2>Color</h2></div>
                            <div class="filter-color swacth-list clearfix">
                                <span class="swacth-btn black"></span>
                                <span class="swacth-btn white checked"></span>
                                <span class="swacth-btn red"></span>
                                <span class="swacth-btn blue"></span>
                                <span class="swacth-btn pink"></span>
                                <span class="swacth-btn gray"></span>
                                <span class="swacth-btn green"></span>
                                <span class="swacth-btn orange"></span>
                                <span class="swacth-btn yellow"></span>
                                <span class="swacth-btn blueviolet"></span>
                                <span class="swacth-btn brown"></span>
                                <span class="swacth-btn darkGoldenRod"></span> 
                                <span class="swacth-btn darkGreen"></span> 
                                <span class="swacth-btn darkRed"></span> 
                                <span class="swacth-btn dimGrey"></span>
                                <span class="swacth-btn khaki"></span> 
                            </div>
                        </div>
                        <!--End Color Swatches-->
                        <!--Brand-->
                        <div class="sidebar_widget filterBox filter-widget">
                            <div class="widget-title"><h2>Brands</h2></div>
                            <ul>
                                <li>
                                  <input type="checkbox" value="allen-vela" id="check1">
                                  <label for="check1"><span><span></span></span>Allen Vela</label>
                                </li>
                                <li>
                                  <input type="checkbox" value="oxymat" id="check3">
                                  <label for="check3"><span><span></span></span>Oxymat</label>
                                </li>
                                <li>
                                  <input type="checkbox" value="vanelas" id="check4">
                                  <label for="check4"><span><span></span></span>Vanelas</label>
                                </li>
                                <li>
                                  <input type="checkbox" value="pagini" id="check5">
                                  <label for="check5"><span><span></span></span>Pagini</label>
                                </li>
                                <li>
                                  <input type="checkbox" value="monark" id="check6">
                                  <label for="check6"><span><span></span></span>Monark</label>
                                </li>
                            </ul>
                        </div>
                        <!--End Brand-->
                        <!--Popular Products-->
						<div class="sidebar_widget">
                        	<div class="widget-title"><h2>Popular Products</h2></div>
							<div class="widget-content">
                                <div class="list list-sidebar-products">
                                  <div class="grid">
                                    <div class="grid__item">
                                      <div class="mini-list-item">
                                        <div class="mini-view_image">
                                            <a class="grid-view-item__link" href="#">
                                                <img class="grid-view-item__image" src="{{ asset('images/product-images/mini-product-img.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="details"> <a class="grid-view-item__title" href="#">Cena Skirt</a>
                                          <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$173.60</span></span></div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="grid__item">
                                      <div class="mini-list-item">
                                        <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image" src="{{ asset('images/product-images/mini-product-img1.jpg') }}" alt="" /></a> </div>
                                        <div class="details"> <a class="grid-view-item__title" href="#">Block Button Up</a>
                                          <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$378.00</span></span></div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="grid__item">
                                      <div class="mini-list-item">
                                        <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image" src="{{ asset('images/product-images/mini-product-img2.jpg') }}" alt="" /></a> </div>
                                        <div class="details"> <a class="grid-view-item__title" href="#">Balda Button Pant</a>
                                          <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$278.60</span></span></div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="grid__item">
                                      <div class="mini-list-item">
                                        <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image" src="{{ asset('images/product-images/mini-product-img3.jpg') }}" alt="" /></a> </div>
                                        <div class="details"> <a class="grid-view-item__title" href="#">Border Dress in Black/Silver</a>
                                          <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$228.00</span></span></div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                          	</div>
						</div>
                        <!--End Popular Products-->
                        <!--Banner-->
                        <div class="sidebar_widget static-banner">
                        	<img src="{{ asset('images/side-banner-2.jpg') }}" alt="" />
                        </div>
                        <!--Banner-->
                        <!--Information-->
                        <div class="sidebar_widget">
                            <div class="widget-title"><h2>Information</h2></div>
                            <div class="widget-content"><p>Use this text to share information about your brand with your customers. Describe a product, share announcements, or welcome customers to your store.</p></div>
                        </div>
                        <!--end Information-->
                        <!--Product Tags-->
                        <div class="sidebar_widget">
                          <div class="widget-title">
                            <h2>Product Tags</h2>
                          </div>
                          <div class="widget-content">
                            <ul class="product-tags">
                              <li><a href="#" title="Show products matching tag $100 - $400">$100 - $400</a></li>
                              <li><a href="#" title="Show products matching tag $400 - $600">$400 - $600</a></li>
                              <li><a href="#" title="Show products matching tag $600 - $800">$600 - $800</a></li>
                              <li><a href="#" title="Show products matching tag Above $800">Above $800</a></li>
                              <li><a href="#" title="Show products matching tag Allen Vela">Allen Vela</a></li>
                              <li><a href="#" title="Show products matching tag Black">Black</a></li>
                              <li><a href="#" title="Show products matching tag Blue">Blue</a></li>
                              <li><a href="#" title="Show products matching tag Cantitate">Cantitate</a></li>
                              <li><a href="#" title="Show products matching tag Famiza">Famiza</a></li>
                              <li><a href="#" title="Show products matching tag Gray">Gray</a></li>
                              <li><a href="#" title="Show products matching tag Green">Green</a></li>
                              <li><a href="#" title="Show products matching tag Hot">Hot</a></li>
                              <li><a href="#" title="Show products matching tag jean shop">jean shop</a></li>
                              <li><a href="#" title="Show products matching tag jesse kamm">jesse kamm</a></li>
                              <li><a href="#" title="Show products matching tag L">L</a></li>
                              <li><a href="#" title="Show products matching tag Lardini">Lardini</a></li>
                              <li><a href="#" title="Show products matching tag lareida">lareida</a></li>
                              <li><a href="#" title="Show products matching tag Lirisla">Lirisla</a></li>
                              <li><a href="#" title="Show products matching tag M">M</a></li>
                              <li><a href="#" title="Show products matching tag mini-dress">mini-dress</a></li>
                              <li><a href="#" title="Show products matching tag Monark">Monark</a></li>
                              <li><a href="#" title="Show products matching tag Navy">Navy</a></li>
                              <li><a href="#" title="Show products matching tag new">new</a></li>
                              <li><a href="#" title="Show products matching tag new arrivals">new arrivals</a></li>
                              <li><a href="#" title="Show products matching tag Orange">Orange</a></li>
                              <li><a href="#" title="Show products matching tag oxford">oxford</a></li>
                              <li><a href="#" title="Show products matching tag Oxymat">Oxymat</a></li>
                            </ul>
                            <span class="btn btn--small btnview">View all</span> </div>
                        </div>
                        <!--end Product Tags-->
                    </div>
                </div>
                <!--End Sidebar-->
                <!--Main Content-->
                <div class="col-12 col-sm-12 col-md-9 col-lg-9 main-col shop-grid-5">
                	<div class="productList">
                    
                        <hr>
                    	<!--Toolbar-->
                        <button type="button" class="btn btn-filter d-block d-md-none d-lg-none"> Product Filters</button>
                    	<div class="toolbar">
                        	<div class="filters-toolbar-wrapper">
                            	<div class="row">
                                	<div class="col-4 col-md-4 col-lg-4 filters-toolbar__item collection-view-as d-flex justify-content-start align-items-center">
                                    	<a href="shop-left-sidebar.html" title="Grid View" class="change-view change-view--active">
                                        	<img src="{{ asset('images/grid.jpg') }}" alt="Grid" />
                                        </a>
                                        <a href="shop-listview.html" title="List View" class="change-view">
                                        	<img src="{{ asset('images/list.jpg') }}" alt="List" />
                                        </a>
                                    </div>
                                    <div class="col-4 col-md-4 col-lg-4 text-center filters-toolbar__item filters-toolbar__item--count d-flex justify-content-center align-items-center">
                                    	<span class="filters-toolbar__product-count">Showing: 22</span>
                                    </div>
                                    <div class="col-4 col-md-4 col-lg-4 text-right">
                                    	<div class="filters-toolbar__item">
                                      		<label for="SortBy" class="hidden">Sort</label>
                                      		<select name="SortBy" id="SortBy" class="filters-toolbar__input filters-toolbar__input--sort">
                                                <option value="title-ascending" selected="selected">Sort</option>
                                                <option>Best Selling</option>
                                                <option>Alphabetically, A-Z</option>
                                                <option>Alphabetically, Z-A</option>
                                                <option>Price, low to high</option>
                                                <option>Price, high to low</option>
                                                <option>Date, new to old</option>
                                                <option>Date, old to new</option>
                                      		</select>
                                      		<input class="collection-header__default-sort" type="hidden" value="manual">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--End Toolbar-->
                        <div class="grid-products grid--view-items">
                            <div class="row">
                              @foreach($products as $product)
                                <div class="col-6 col-sm-6 col-md-4 col-lg-2 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="{{route('produit-layout')}}">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-id="{{$product->id}}" data-src="{{ asset('/images/product-images/'.$product->image1) }}" src="{{ asset('/images/product-images/'.$product->image1) }}" alt="image" title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="{{ asset('/images/product-images/'.$product->image2) }}" src="{{ asset('/images/product-images/'.$product->image2) }}" alt="image" title="product">
                                            <!-- End hover image -->
                                            <!-- product label -->
                                                    @if($product->id==4)
                                                     <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">{{ __('message.home.new') }}</span></div>
                                                     @elseif($product->id==5)
                                                     <div class="product-labels rectangular"><span class="lbl pr-label2">{{ __('message.home.hot') }}</span></div>
                                                     @elseif($product->id==6)
                                                     <div class="product-labels rounded"><span class="lbl on-sale">{{ __('message.home.SALE') }}</span></div>
                                                     @elseif($product->id==7)
                                                     <div class="product-labels"><span class="lbl pr-label1">{{ __('message.home.popular') }}</span></div>
                                                     @elseif($product->id==8)
                                                     <div class="product-labels"><span class="lbl on-sale">-30%</span><span class="lbl pr-label2">{{ __('message.home.hot') }}</span></div>
                                                     @elseif($product->id==11)
                                                     <div class="product-labels rectangular"><span class="lbl on-sale">-25%</span> <span class="lbl pr-label1">{{ __('message.home.new') }}</span></div>
                                                     @elseif($product->id==9)
                                                     <div class="product-labels rectangular"><span class="lbl pr-label2">{{ __('message.home.hot') }}</span></div>
                                                     @elseif($product->id==13)
                                                     <div class="product-labels"><span class="lbl on-sale">{{ __('message.home.SALE') }}</span></div>
                                                     @elseif($product->id==12)
                                                     <div class="product-labels"><span class="lbl pr-label1">{{ __('message.home.popular') }}</span></div>
                                                     @elseif($product->id==10)
                                                     <div class="product-labels rounded"><span class="lbl on-sale">-30%</span><span class="lbl pr-label2">{{ __('message.home.hot') }}</span></div>
                                                     @elseif($product->id==18)
                                                     <div class="product-labels rounded"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">{{ __('message.home.new') }}</span></div>
                                                     @elseif($product->id==14)
                                                     <div class="product-labels rectangular"><span class="lbl pr-label2">{{ __('message.home.hot') }}</span></div>
                                                     @elseif($product->id==15)
                                                     <div class="product-labels"><span class="lbl on-sale">{{ __('message.home.SALE') }}</span></div>
                                                     @elseif($product->id==16)
                                                     <div class="product-labels"><span class="lbl pr-label1">{{ __('message.home.popular') }}</span></div>
                                                     @elseif($product->id==17)
                                                     <div class="product-labels"><span class="lbl on-sale">-50%</span><span class="lbl pr-label2">{{ __('message.home.hot') }}</span></div>
                                                     @else
                                                     <div class="product-labels rounded"><span class="lbl on-sale">{{ __('message.home.SALE') }}</span></div>
                                                     @endif
                                            <!-- End product label -->
                                        </a>
                                        <!-- end product image --> 
                                        <!-- Start product button -->
                                            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" value="{{ $product->id }}" name="id">
                                                        <input type="hidden" value="{{ $product->name }}" name="name">
                                                        <input type="hidden" value="{{ $product->price }}" name="price">
                                                        <input type="hidden" value="{{ $product->image1 }}"  name="image1">
                                                        <input type="hidden" value="1" name="quantity">
                                                        <button class="btn btn-addto-cart" type="button" tabindex="0">{{ __('message.home.panier1') }}</button>
                                             </form>
                                        <div class="button-set">
                                            <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                <i class="icon anm anm-search-plus-r"></i>
                                            </a>
                                            <div class="wishlist-btn">
                                                <a class="wishlist add-to-wishlist" href="{{ route('wishlist') }}" title="Add to Wishlist">
                                                    <i class="icon anm anm-heart-l"></i>
                                                </a>
                                            </div>
                                            <div class="compare-btn">
                                                <a class="compare add-to-compare" href="{{ route('compare1') }}" title="Add to Compare">
                                                    <i class="icon anm anm-random-r"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- end product button -->
                                    </div>
                                    <!-- end product image -->
    
                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="#">{{ $product->name }}</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="old-price">{{ $product->priceReduction }} FCFA</span>
                                            <span class="price">{{ $product->price }} FCFA</span>
                                        </div>
                                        <!-- End product price -->
                                        
                                        <div class="product-review">
                                                                    
                                                @if($product->id==4)
                                                                <i class="font-13 fa fa-star"></i>
                                                                <i class="font-13 fa fa-star"></i>
                                                                <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star-o"></i>
                                                            <i class="font-13 fa fa-star-o"></i>
                                                    
                                                    @elseif($product->id==5)
                                                    <i class="font-13 fa fa-star"></i>
                                                                <i class="font-13 fa fa-star"></i>
                                                                <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                        @elseif($product->id==6)
                                                        <i class="font-13 fa fa-star"></i>
                                                                <i class="font-13 fa fa-star"></i>
                                                                <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star-o"></i>

                                                        @elseif($product->id==7)
                                                        <i class="font-13 fa fa-star"></i>
                                                                <i class="font-13 fa fa-star"></i>
                                                                <i class="font-13 fa fa-star-o"></i>
                                                            <i class="font-13 fa fa-star-o"></i>
                                                            <i class="font-13 fa fa-star-o"></i>
                                                    
                                                        @elseif($product->id==8)
                                                        <i class="font-13 fa fa-star"></i>
                                                                <i class="font-13 fa fa-star-o"></i>
                                                                <i class="font-13 fa fa-star-o"></i>
                                                            <i class="font-13 fa fa-star-o"></i>
                                                            <i class="font-13 fa fa-star-o"></i>
                                                            @elseif($product->id==14)
                                                                <i class="font-13 fa fa-star"></i>
                                                                <i class="font-13 fa fa-star"></i>
                                                                <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star-o"></i>
                                                            <i class="font-13 fa fa-star-o"></i>
                                                    
                                                    @elseif($product->id==15)
                                                    <i class="font-13 fa fa-star"></i>
                                                                <i class="font-13 fa fa-star"></i>
                                                                <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                        @elseif($product->id==16)
                                                        <i class="font-13 fa fa-star"></i>
                                                                <i class="font-13 fa fa-star"></i>
                                                                <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star-o"></i>

                                                        @elseif($product->id==17)
                                                        <i class="font-13 fa fa-star"></i>
                                                                <i class="font-13 fa fa-star"></i>
                                                                <i class="font-13 fa fa-star-o"></i>
                                                            <i class="font-13 fa fa-star-o"></i>
                                                            <i class="font-13 fa fa-star-o"></i>
                                                    
                                                        @elseif($product->id==18)
                                                        <i class="font-13 fa fa-star"></i>
                                                                <i class="font-13 fa fa-star-o"></i>
                                                                <i class="font-13 fa fa-star-o"></i>
                                                            <i class="font-13 fa fa-star-o"></i>
                                                            <i class="font-13 fa fa-star-o"></i>

                                                            @elseif($product->id==19)
                                                                <i class="font-13 fa fa-star"></i>
                                                                <i class="font-13 fa fa-star"></i>
                                                                <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star-o"></i>
                                                            <i class="font-13 fa fa-star-o"></i>
                                                    
                                                    @elseif($product->id==20)
                                                    <i class="font-13 fa fa-star"></i>
                                                                <i class="font-13 fa fa-star"></i>
                                                                <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                        @elseif($product->id==21)
                                                        <i class="font-13 fa fa-star"></i>
                                                                <i class="font-13 fa fa-star"></i>
                                                                <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star-o"></i>

                                                        @elseif($product->id==22)
                                                        <i class="font-13 fa fa-star"></i>
                                                                <i class="font-13 fa fa-star"></i>
                                                                <i class="font-13 fa fa-star-o"></i>
                                                            <i class="font-13 fa fa-star-o"></i>
                                                            <i class="font-13 fa fa-star-o"></i>
                                                    
                                                        @elseif($product->id==23)
                                                        <i class="font-13 fa fa-star"></i>
                                                                <i class="font-13 fa fa-star-o"></i>
                                                                <i class="font-13 fa fa-star-o"></i>
                                                            <i class="font-13 fa fa-star-o"></i>
                                                            <i class="font-13 fa fa-star-o"></i>
                                                    
                                                        @else
                                                        <i class="font-13 fa fa-star"></i>
                                                                <i class="font-13 fa fa-star"></i>
                                                                <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star-o"></i>
                                                            <i class="font-13 fa fa-star-o"></i>
                                                        @endif
                                        </div>
                                    </div>
                                    <!-- End product details -->
                                </div>
                              @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="infinitpaginOuter">
                        <div class="infinitpagin">	
                            <a href="{{route('collection')}}" class="btn loadMore">Load More</a>
                        </div>
                    </div>
                </div>
                <!--End Main Content-->
            </div>
        </div>
        
    </div>
    <!--End Body Content-->
@endsection 
