@extends('font.master')
@section('title', 'home8')
@section('content')
@include('font.partials.header') 
@include('font.partials.menu')
 <!--Body Content-->
 <div id="page-content" class="mt-5">
    
    <!--Home slider-->
    <div class="slideshow slideshow-wrapper pb-section">
        <div class="home-slideshow">
            <div class="slide">
                <div class="blur-up lazyload">
                    <img class="blur-up lazyload" data-src="{{ asset('images/slideshow-banners/home8-jewelry-banner1.jpg') }}" src="{{ asset('images/slideshow-banners/home8-jewelry-banner1.jpg') }}" alt="Wedding bands" title="Wedding bands" />
                    <div class="slideshow__text-wrap slideshow__overlay classic middle">
                        <div class="slideshow__text-content middle">
                            <div class="container">
                                <div class="wrap-caption right">
                                    <h2 class="h1 mega-title slideshow__title">Wedding bands</h2>
                                    <span class="mega-subtitle slideshow__subtitle">Wedding bands will be one of the most tangible elements of your wedding<br> day, and a lasting symbol of your love.</span>
                                    <span class="btn">Shop now</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="blur-up lazyload">
                    <img class="blur-up lazyload" data-src="{{ asset('images/slideshow-banners/home8-jewelry-banner2.jpg') }}" src="{{ asset('images/slideshow-banners/home8-jewelry-banner2.jpg') }}" alt="Shop New Collection" title="Shop New Collection" />
                    <div class="slideshow__text-wrap slideshow__overlay classic middle">
                        <div class="slideshow__text-content middle">
                            <div class="container">
                                <div class="wrap-caption left">
                                    <h2 class="h1 mega-title slideshow__title">Shop New Collection</h2>
                                    <span class="mega-subtitle slideshow__subtitle">From Hight to low, classic or modern. We have you<br>covered</span>
                                    <span class="btn">Shop now</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Home slider-->
    
    <!--Small Banners-->
    <div class="section imgBanners">
        <div class="container">
            <div class="imgBnrOuter">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="section-header text-center">
                            <h2 class="h2 heading-font">New Collections</h2>
                            <p>Modern and classic designs to suit every style.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 pl-0">
                        <div class="inner btmleft">
                            <a href="#">
                                <img data-src="{{ asset('images/collection/jewellery-collection1.jpg') }}" src="{{ asset('images/collection/jewellery-collection1.jpg') }}" alt="" class="blur-up lazyload"/>
                                <span class="ttl">LAYERS OF DELICATE DESIRE</span>
                            </a>
                        </div>    	
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 pr-0">
                        <div class="inner center">
                            <a href="#">
                                <img data-src="{{ asset('images/collection/jewellery-collection2.jpg') }}" src="{{ asset('images/collection/jewellery-collection2.jpg') }}" alt="" class="blur-up lazyload"/>
                                <span class="ttl">GIFT FOR HER</span>
                            </a>
                        </div>  
                        <div class="inner btmright mt-4">
                            <a href="#">
                                <img data-src="{{ asset('images/collection/jewellery-collection3.jpg') }}" src="{{ asset('images/collection/jewellery-collection3.jpg') }}" alt="" class="blur-up lazyload"/>
                                <span class="ttl">FOR YOUR LOVED ONE</span>
                            </a>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Small Banners-->
    
    <!--Hot picks-->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="section-header text-center">
                        <h2 class="h2 heading-font">Hot picks</h2>
                        <p>Jewellery is the next best thing to Love!</p>
                    </div>
                </div>
            </div>
            <div class="productSlider-style2 grid-products">
                <div class="col-12 item">
                    <!-- start product image -->
                    <div class="product-image">
                        <!-- start product image -->
                        <a href="product-layout-1.html" class="grid-view-item__link">
                            <!-- image -->
                            <img class="primary blur-up lazyload" data-src="{{ asset('images/jewellery-products/jewellery-products1.jpg') }}" src="{{ asset('images/jewellery-products/jewellery-products1.jpg') }}" alt="image" title="product">
                            <!-- End image -->
                            <!-- Hover image -->
                            <img class="hover blur-up lazyload" data-src="{{ asset('images/jewellery-products/jewellery-products1-1.jpg') }}" src="{{ asset('images/jewellery-products/jewellery-products1-1.jpg') }}" alt="image" title="product">
                            <!-- End hover image -->
                        </a>
                        <!-- end product image -->
                        <!-- Start product button -->
                        <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                            <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                        </form>
                        <div class="button-set">
                            <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                <i class="icon anm anm-search-plus-r"></i>
                            </a>
                            <div class="wishlist-btn">
                                <a class="wishlist add-to-wishlist" href="wishlist.html">
                                    <i class="icon anm anm-heart-l"></i>
                                </a>
                            </div>
                            <div class="compare-btn">
                                <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
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
                            <a href="product-layout-1.html">Silver Designer Pendant Set</a>
                        </div>
                        <!-- End product name -->
                        <!-- product price -->
                        <div class="product-price">
                            <span class="price">$15.00</span>
                        </div>
                        <!-- End product price -->
                    </div>
                    <!-- End product details -->
                </div>
                <div class="col-12 item">
                    <!-- start product image -->
                    <div class="product-image">
                        <!-- start product image -->
                        <a href="product-layout-1.html" class="grid-view-item__link">
                            <!-- image -->
                            <img class="primary blur-up lazyload" data-src="{{ asset('images/jewellery-products/jewellery-products2.jpg') }}" src="{{ asset('images/jewellery-products/jewellery-products2.jpg') }}" alt="image" title="product">
                            <!-- End image -->
                            <!-- Hover image -->
                            <img class="hover blur-up lazyload" data-src="{{ asset('images/jewellery-products/jewellery-products2-1.jpg') }}" src="{{ asset('images/jewellery-products/jewellery-products2-1.jpg') }}" alt="image" title="product">
                            <!-- End hover image -->
                        </a>
                        <!-- end product image -->
    
                        <!-- Start product button -->
                        <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                            <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                        </form>
                        <div class="button-set">
                            <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                <i class="icon anm anm-search-plus-r"></i>
                            </a>
                            <div class="wishlist-btn">
                                <a class="wishlist add-to-wishlist" href="wishlist.html">
                                    <i class="icon anm anm-heart-l"></i>
                                </a>
                            </div>
                            <div class="compare-btn">
                                <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
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
                            <a href="product-layout-1.html">Cardinal Necklace Set for Women</a>
                        </div>
                        <!-- End product name -->
                        <!-- product price -->
                        <div class="product-price">
                            <span class="price">$70.00</span>
                        </div>
                        <!-- End product price -->
                    </div>
                    <!-- End product details -->
                </div>
                <div class="col-12 item">
                    <!-- start product image -->
                    <div class="product-image">
                        <!-- start product image -->
                       <a href="product-layout-1.html" class="grid-view-item__link">
                            <!-- image -->
                            <img class="primary blur-up lazyload" data-src="{{ asset('images/jewellery-products/jewellery-products3.jpg') }}" src="{{ asset('images/jewellery-products/jewellery-products3.jpg') }}" alt="image" title="product">
                            <!-- End image -->
                            <!-- Hover image -->
                            <img class="hover blur-up lazyload" data-src="{{ asset('images/jewellery-products/jewellery-products3-1.jpg') }}" src="{{ asset('images/jewellery-products/jewellery-products3-1.jpg') }}" alt="image" title="product">
                            <!-- End hover image -->
                        </a>
                        <!-- end product image -->
    
                        <!-- Start product button -->
                        <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                            <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                        </form>
                        <div class="button-set">
                            <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                <i class="icon anm anm-search-plus-r"></i>
                            </a>
                            <div class="wishlist-btn">
                                <a class="wishlist add-to-wishlist" href="wishlist.html">
                                    <i class="icon anm anm-heart-l"></i>
                                </a>
                            </div>
                            <div class="compare-btn">
                                <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
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
                            <a href="product-layout-1.html">Posh Diamond Bracelet</a>
                        </div>
                        <!-- End product name -->
                        <!-- product price -->
                        <div class="product-price">
                            <span class="price">$50.00</span>
                        </div>
                        <!-- End product price -->
                    </div>
                    <!-- End product details -->
                </div>
                <div class="col-12 item">
                    <!-- start product image -->
                    <div class="product-image">
                        <!-- start product image -->
                        <a href="product-layout-1.html" class="grid-view-item__link">
                            <!-- image -->
                            <img class="primary blur-up lazyload" data-src="{{ asset('images/jewellery-products/jewellery-products4.jpg') }}" src="{{ asset('images/jewellery-products/jewellery-products4.jpg') }}" alt="image" title="product" />
                            <!-- End image -->
                            <!-- Hover image -->
                            <img class="hover blur-up lazyload" data-src="{{ asset('images/jewellery-products/jewellery-products4-1.jpg') }}" src="{{ asset('images/jewellery-products/jewellery-products4-1.jpg') }}" alt="image" title="product" />
                            <!-- End hover image -->
                        </a>
                        <!-- end product image -->
    
                        <!-- Start product button -->
                        <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                            <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                        </form>
                        <div class="button-set">
                            <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                <i class="icon anm anm-search-plus-r"></i>
                            </a>
                            <div class="wishlist-btn">
                                <a class="wishlist add-to-wishlist" href="wishlist.html">
                                    <i class="icon anm anm-heart-l"></i>
                                </a>
                            </div>
                            <div class="compare-btn">
                                <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
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
                            <a href="product-layout-1.html">Posh Diamond Bracelet</a>
                        </div>
                        <!-- End product name -->
                        <!-- product price -->
                        <div class="product-price">
                            <span class="old-price">$900.00</span>
                            <span class="price">$788.00</span>
                        </div>
                        <!-- End product price -->
                    </div>
                    <!-- End product details -->
                </div>
                <div class="col-12 item">
                    <!-- start product image -->
                    <div class="product-image">
                        <!-- start product image -->
                        <a href="product-layout-1.html" class="grid-view-item__link">
                            <!-- image -->
                            <img class="primary blur-up lazyload" data-src="{{ asset('images/jewellery-products/jewellery-products5.jpg') }}" src="{{ asset('images/jewellery-products/jewellery-products5.jpg') }}" alt="image" title="product" />
                            <!-- End image -->
                            <!-- Hover image -->
                            <img class="hover blur-up lazyload" data-src="{{ asset('images/jewellery-products/jewellery-products5-1.jpg') }}" src="{{ asset('images/jewellery-products/jewellery-products5-1.jpg') }}" alt="image" title="product" />
                            <!-- End hover image -->
                        </a>
                        <!-- end product image -->
    
                        <!-- Start product button -->
                        <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                            <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                        </form>
                        <div class="button-set">
                            <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                <i class="icon anm anm-search-plus-r"></i>
                            </a>
                            <div class="wishlist-btn">
                                <a class="wishlist add-to-wishlist" href="wishlist.html">
                                    <i class="icon anm anm-heart-l"></i>
                                </a>
                            </div>
                            <div class="compare-btn">
                                <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
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
                            <a href="product-layout-1.html">Eye-Catchy Fancy Bracelet</a>
                        </div>
                        <!-- End product name -->
                        <!-- product price -->
                        <div class="product-price">
                            <span class="price">$55.00</span>
                        </div>
                        <!-- End product price -->
                    </div>
                    <!-- End product details -->
                </div>
                <div class="col-12 item">
                    <!-- start product image -->
                    <div class="product-image">
                        <!-- start product image -->
                        <a href="product-layout-1.html" class="grid-view-item__link">
                            <!-- image -->
                            <img class="primary blur-up lazyload" data-src="{{ asset('images/jewellery-products/jewellery-products6.jpg') }}" src="{{ asset('images/jewellery-products/jewellery-products6.jpg') }}" alt="image" title="product" />
                            <!-- End image -->
                            <!-- Hover image -->
                            <img class="hover blur-up lazyload" data-src="{{ asset('images/jewellery-products/jewellery-products6-1.jpg') }}" src="{{ asset('images/jewellery-products/jewellery-products6-1.jpg') }}" alt="image" title="product" />
                            <!-- End hover image -->
                        </a>
                        <!-- end product image -->
    
                        <!-- Start product button -->
                        <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                            <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                        </form>
                        <div class="button-set">
                            <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                <i class="icon anm anm-search-plus-r"></i>
                            </a>
                            <div class="wishlist-btn">
                                <a class="wishlist add-to-wishlist" href="wishlist.html">
                                    <i class="icon anm anm-heart-l"></i>
                                </a>
                            </div>
                            <div class="compare-btn">
                                <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
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
                            <a href="product-layout-1.html">Tibetan Stone Beads Necklace Set</a>
                        </div>
                        <!-- End product name -->
                        <!-- product price -->
                        <div class="product-price">
                            <span class="price">$55.00</span>
                        </div>
                        <!-- End product price -->
                    </div>
                    <!-- End product details -->
                </div>
            </div>
        </div>
   </div>
   <!--End Hot picks-->
   
       <div class="section collection-box-style1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="section-header text-center">
                        <h2 class="h2">Trendy necklace</h2>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-6 col-sm-6 col-md-4 col-lg-4">
                    <div class="collection-grid-item">
                        <a href="collection-page.html" class="collection-grid-item__link">
                            <img data-src="{{ asset('images/collection/jewellery-collection4.jpg') }}" src="{{ asset('images/collection/jewellery-collection4.jpg') }}" alt="Hot" class="blur-up lazyload"/>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4">
                    <div class="collection-grid-item">
                        <a href="collection-page.html" class="collection-grid-item__link">
                            <img data-src="{{ asset('images/collection/jewellery-collection5.jpg') }}" src="{{ asset('images/collection/jewellery-collection5.jpg') }}" alt="Denim" class="blur-up lazyload"/>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4">
                    <div class="collection-grid-item">
                        <a href="collection-page.html" class="collection-grid-item__link">
                            <img data-src="{{ asset('images/collection/jewellery-collection6.jpg') }}" src="{{ asset('images/collection/jewellery-collection6.jpg') }}" alt="Summer" class="blur-up lazyload"/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
       </div>
    
    <!--Store Feature-->
    <div class="store-feature section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="display-table store-info">
                        <li class="display-table-cell">
                            <i class="icon anm anm-truck-l"></i>
                            <h5>Free Shipping Worldwide</h5>
                            <span class="sub-text">
                                Diam augue augue in fusce voluptatem
                            </span>
                        </li>
                          <li class="display-table-cell">
                            <i class="icon anm anm-money-bill-ar"></i>
                            <h5>Money Back Guarantee</h5>
                            <span class="sub-text">
                                Use this text to display your store information
                            </span>
                          </li>
                          <li class="display-table-cell">
                            <i class="icon anm anm-comments-l"></i>
                            <h5>24/7 Help Center</h5>
                            <span class="sub-text">
                                Use this text to display your store information
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--End Store Feature-->
    
    <!--Hero Banner With Text-->
    <div class="section hero hero--medium hero__overlay bg-size">
        <img class="bg-img" src="{{ asset('images/parallax-banners/jewellery-parallax.jpg') }}') }}" alt="" />
        <div class="hero__inner">
            <div class="container">
                <div class="wrap-text right text-medium font-bold">
                    <h2 class="h2 mega-title">MAKE IT PERSONAL</h2>
                    <div class="rte-setting mega-subtitle">Make your jewels even more meaningful by <br> personalizing them with a name, monogram, coordinates, date,<br>  or a special message.</div>
                    <a href="#" class="btn">personalize Now</a>
                </div>
            </div>
        </div>
    </div>
    <!--End Hero Banner With Text-->
    
    <!-- Instagram Section-->
    <div class="section instagram-feed-section">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="h2 heading-font">Belle On Instagram</h2>
                <p>Phasellus lorem malesuada ligula pulvinar commodo maecenas suscipit auctom.</p>
            </div>
            <!--Instagram ID-->
            <div id="instafeed" class="imlow_resolution"></div>
            <!--End Instagram ID-->
        </div>
    </div>
    <!--End Instagram Section-->
    
</div>
<!--End Body Content-->
@endsection
@section('script')
<script>
/*--------------------------------------
			Promotion / Notification Cookie Bar 
		  -------------------------------------- */
		  if(Cookies.get('promotion') != 'true') {   
			 $(".notification-bar").show();         
		  }
		  $(".close-announcement").on('click',function() {
			$(".notification-bar").slideUp();  
			Cookies.set('promotion', 'true', { expires: 1});  
			return false;
		  });
	</script>
    <!--End For Newsletter Popup-->   
@endsection