@extends('font.master')
@section('title', 'product-layout')
@section('content') 
@include('font.partials.header') 
@include('font.partials.menu')
        <!--Body Content-->
        <div id="page-content" class="mt-5">
            <!--MainContent-->
            <div id="MainContent" class="main-content" role="main">
                <!--Breadcrumb-->
                <div class="bredcrumbWrap">
                    <div class="container breadcrumbs">
                        <a href="{{route('home')}}" title="Back to the home page">Home</a><span aria-hidden="true">›</span><span>Product Layout</span>
                    </div>
                </div>
                <!--End Breadcrumb-->
                
                <div id="ProductSection-product-template" class="product-template__container prstyle1 container">
                    <!--product-single-->
                    <div class="product-single">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="product-details-img">
                                    <div class="product-thumb">
                                        <div id="gallery" class="product-dec-slider-2 product-tab-left">
                                            <a data-image="{{ asset('/images/product-images/'.$product->image1) }}" data-zoom-image="{{ asset('/images/product-images/'.$product->image1) }}" class="slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" tabindex="-1">
                                                <img class="blur-up lazyload" data-src="{{ asset('/images/product-images/'.$product->image2) }}" src="{{ asset('/images/product-images/'.$product->image2) }}" alt="" />
                                            </a>
                                            <a data-image="{{ asset('/images/product-images/'.$product->image2) }}" data-zoom-image="{{ asset('/images/product-images/'.$product->image2) }}" class="slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" tabindex="-1">
                                                <img class="blur-up lazyload" data-src="{{ asset('/images/product-images/'.$product->image1) }}" src="{{ asset('/images/product-images/'.$product->image1) }}" alt="" />
                                            </a>
                                            <a data-image="{{ asset('/images/product-images/'.$product->image1) }}" data-zoom-image="{{ asset('/images/product-images/'.$product->image1) }}" class="slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" tabindex="-1">
                                                <img class="blur-up lazyload" data-src="{{ asset('/images/product-images/'.$product->image2) }}" src="{{ asset('/images/product-images/'.$product->image2) }}" alt="" />
                                            </a>
                                            <a data-image="{{ asset('/images/product-images/'.$product->image2) }}" data-zoom-image="{{ asset('/images/product-images/'.$product->image2) }}" class="slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1">
                                                <img class="blur-up lazyload" data-src="{{ asset('/images/product-images/'.$product->image1) }}" src="{{ asset('/images/product-images/'.$product->image1) }}" alt="" />
                                            </a>
                                            <a data-image="{{ asset('/images/product-images/'.$product->image1) }}" data-zoom-image="{{ asset('/images/product-images/'.$product->image1) }}" class="slick-slide slick-cloned" data-slick-index="0" aria-hidden="true" tabindex="-1">
                                                <img class="blur-up lazyload" data-src="{{ asset('/images/product-images/'.$product->image2) }}" src="{{ asset('/images/product-images/'.$product->image2) }}" alt="" />
                                            </a>
                                            </a>
                                            <a data-image="{{ asset('/images/product-images/'.$product->image1) }}" data-zoom-image="{{ asset('/images/product-images/'.$product->image1) }}" class="slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" tabindex="-1">
                                                <img class="blur-up lazyload" data-src="{{ asset('/images/product-images/'.$product->image2) }}" src="{{ asset('/images/product-images/'.$product->image2) }}" alt="" />
                                            </a>
                                            <a data-image="{{ asset('/images/product-images/'.$product->image2) }}" data-zoom-image="{{ asset('/images/product-images/'.$product->image2) }}" class="slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1">
                                                <img class="blur-up lazyload" data-src="{{ asset('/images/product-images/'.$product->image1) }}" src="{{ asset('/images/product-images/'.$product->image1) }}" alt="" />
                                            </a>
                                            <a data-image="{{ asset('/images/product-images/'.$product->image1) }}" data-zoom-image="{{ asset('/images/product-images/'.$product->image1) }}" class="slick-slide slick-cloned" data-slick-index="0" aria-hidden="true" tabindex="-1">
                                                <img class="blur-up lazyload" data-src="{{ asset('/images/product-images/'.$product->image2) }}" src="{{ asset('/images/product-images/'.$product->image2) }}" alt="" />
                                            </a>

                                    
                                        </div> 
                                    </div>
                                    <div class="zoompro-wrap product-zoom-right pl-20">
                                        <div class="zoompro-span">
                                            <img class="blur-up lazyload zoompro" data-zoom-image="{{ asset('/images/product-images/'.$product->image1) }}" alt="" src="{{ asset('/images/product-images/'.$product->image1) }}" />
                                        </div>
                                        <div class="product-labels"><span class="lbl on-sale">Sale</span><span class="lbl pr-label1">new</span></div>
                                        <div class="product-buttons">
                                            <a href="https://www.youtube.com/watch?v=93A2jOW5Mog" class="btn popup-video" title="View Video"><i class="icon anm anm-play-r" aria-hidden="true"></i></a>
                                            <a href="#" class="btn prlightbox" title="Zoom"><i class="icon anm anm-expand-l-arrows" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="lightboximages">
                                        <a href="{{ asset('images/product-detail-page/camelia-reversible-big1.jpg') }}" data-size="1462x2048"></a>
                                        <a href="{{ asset('images/product-detail-page/camelia-reversible-big2.jpg') }}" data-size="1462x2048"></a>
                                        <a href="{{ asset('images/product-detail-page/camelia-reversible-big3.jpg') }}" data-size="1462x2048"></a>
                                        <a href="{{ asset('images/product-detail-page/camelia-reversible7-big.jpg') }}" data-size="1462x2048"></a>
                                        <a href="{{ asset('images/product-detail-page/camelia-reversible-big4.jpg') }}" data-size="1462x2048"></a>
                                        <a href="{{ asset('images/product-detail-page/camelia-reversible-big5.jpg') }}" data-size="1462x2048"></a>
                                        <a href="{{ asset('images/product-detail-page/camelia-reversible-big6.jpg') }}" data-size="731x1024"></a>
                                        <a href="{{ asset('images/product-detail-page/camelia-reversible-big7.jpg') }}" data-size="731x1024"></a>
                                        <a href="{{ asset('images/product-detail-page/camelia-reversible-big8.jpg') }}" data-size="731x1024"></a>
                                        <a href="{{ asset('images/product-detail-page/camelia-reversible-big9.jpg') }}" data-size="731x1024"></a>
                                        <a href="{{ asset('images/product-detail-page/camelia-reversible-big10.jpg') }}" data-size="731x1024"></a>
                                    </div>
        
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="product-single__meta">
                                        <h1 class="product-single__title">Product Layout Style1</h1>
                                        <div class="product-nav clearfix">					
                                            <a href="#" class="next" title="Next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="prInfoRow">
                                            <div class="product-stock"> <span class="instock ">In Stock</span> <span class="outstock hide">Unavailable</span> </div>
                                            <div class="product-sku">SKU: <span class="variant-sku">19115-rdxs</span></div>
                                            <div class="product-review"><a class="reviewLink" href="#tab2"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><span class="spr-badge-caption">6 reviews</span></a></div>
                                        </div>
                                        <p class="product-single__price product-single__price-product-template">
                                            <span class="visually-hidden">Regular price</span>
                                            <s id="ComparePrice-product-template"><span class="money">{{$product->price}}FCFA</span></s>
                                            <span class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                                <span id="ProductPrice-product-template"><span class="money">{{$product->priceReduction}}FCFA</span></span>
                                            </span>
                                            <span class="discount-badge"> <span class="devider">|</span>&nbsp;
                                                <span>You Save</span>
                                                <span id="SaveAmount-product-template" class="product-single__save-amount">
                                                <span class="money">$100.00</span>
                                                </span>
                                                <span class="off">(<span>16</span>%)</span>
                                            </span>  
                                        </p>
                                        <div class="orderMsg" data-user="23" data-time="24">
                                            <img src="{{ asset('images/order-icon.jpg') }}" alt="" /> <strong class="items">5</strong> sold in last <strong class="time">26</strong> hours</div>
                                        </div>
                                    <div class="product-single__description rte">
                                        <ul>
                                            <li>{{$product->description}}</li>
                                         
                                        </ul>
                                    </div>
                                    <div id="quantity_message">Hurry! Only  <span class="items">{{$product->stock}}</span>  left in stock.</div>
                                    <form method="post" action="{{ route('cart.store') }}" id="product_form_10508262282" accept-charset="UTF-8" class="product-form product-form-product-template hidedropdown" enctype="multipart/form-data">
                                        <div class="swatch clearfix swatch-0 option1" data-option-index="0">
                                            <div class="product-form__item">
                                              <label class="header">Color: <span class="slVariant">{{$product->color}}</span></label>
                                            
                                            </div>
                                        </div>
                                        <div class="swatch clearfix swatch-1 option2" data-option-index="1">
                                            <div class="product-form__item">
                                              <label class="header">Size: <span class="slVariant">{{$product->size}}</span></label>
                                           
                                            </div>
                                        </div>
                                 
                                        <div class="product-action clearfix">
                                                                        
                                            <div class="product-form__item--submit">
                                                   
                                                 <form  class="variants add" action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" value="{{ $product->id }}" name="id">
                                                            <input type="hidden" value="{{ $product->name }}" name="name">
                                                            <input type="hidden" value="{{ $product->price }}" name="price">
                                                            <input type="hidden" value="{{ $product->image1 }}"  name="image1">
                                                            <input type="hidden" value="1" name="quantity">
                                                            <button class="btn btn-addto-cart" tabindex="0" type="submit">{{ __('message.home.panier1') }}</button>
                                                 </form>
                                            </div>
                                            <div class="shopify-payment-button mt-2" data-shopify="payment-button">
                                                <a href="{{route('checkout')}}"><button type="button" class="shopify-payment-button__button shopify-payment-button__button--unbranded">Buy it now</button></a>
                                            </div>
                                        </div>
                                        <!-- End Product Action --> 
                                    </form>
                                    <div class="display-table shareRow">
                                            <div class="display-table-cell medium-up--one-third">
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="{{ route('wishlist') }}" title="Add to Wishlist"><i class="icon anm anm-heart-l" aria-hidden="true"></i> <span>Add to Wishlist</span></a>
                                                </div>
                                            </div>
                                            <div class="display-table-cell text-right">
                                                <div class="social-sharing">
                                                    <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-facebook" title="Share on Facebook">
                                                        <i class="fa fa-facebook-square" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Share</span>
                                                    </a>
                                                    <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-twitter" title="Tweet on Twitter">
                                                        <i class="fa fa-twitter" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Tweet</span>
                                                    </a>
                                                    <a href="#" title="Share on google+" class="btn btn--small btn--secondary btn--share" >
                                                        <i class="fa fa-google-plus" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Google+</span>
                                                    </a>
                                                    <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-pinterest" title="Pin on Pinterest">
                                                        <i class="fa fa-pinterest" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Pin it</span>
                                                    </a>
                                                    <a href="#" class="btn btn--small btn--secondary btn--share share-pinterest" title="Share by Email" target="_blank">
                                                        <i class="fa fa-envelope" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Email</span>
                                                    </a>
                                                 </div>
                                            </div>
                                        </div>
                                        
                                    <p id="freeShipMsg" class="freeShipMsg" data-price="199"><i class="fa fa-truck" aria-hidden="true"></i> GETTING CLOSER! ONLY <b class="freeShip"><span class="money" data-currency-usd="$199.00" data-currency="USD">1000 FCFA</span></b> AWAY FROM <b>FREE SHIPPING!</b></p>
                                    <p class="shippingMsg"><i class="fa fa-clock-o" aria-hidden="true"></i> ESTIMATED DELIVERY BETWEEN <b id="fromDate">Mar 15 Oct</b> et <b id="toDate">Dim 10 Jan</b>.</p>
                                    <div class="userViewMsg" data-user="20" data-time="11000"><i class="fa fa-users" aria-hidden="true"></i> <strong class="uersView">14</strong> PEOPLE ARE LOOKING FOR THIS PRODUCT</div>
                                </div>
                        </div>
                    </div>
                    <!--End-product-single-->
                    <!--Product Fearure-->
                    <div class="prFeatures">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-6 col-lg-3 feature">
                                <img src="{{ asset('images/credit-card.png') }}" alt="Safe Payment" title="Safe Payment" />
                                <div class="details"><h3>Safe Payment</h3>Pay with the world's most payment methods.</div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-3 feature">
                                <img src="{{ asset('images/shield.png') }}" alt="Confidence" title="Confidence" />
                                <div class="details"><h3>Confidence</h3>Protection covers your purchase and personal data.</div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-3 feature">
                                <img src="{{ asset('images/worldwide.png') }}" alt="Worldwide Delivery" title="Worldwide Delivery" />
                                <div class="details"><h3>Worldwide Delivery</h3>FREE &amp; fast shipping to over 200+ countries &amp; regions.</div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-3 feature">
                                <img src="{{ asset('images/phone-call.png') }}" alt="Hotline" title="Hotline" />
                                <div class="details"><h3>Hotline</h3>Talk to help line for your question on 4141 456 789, 4125 666 888</div>
                            </div>
                        </div>
                    </div>
                    <!--End Product Fearure-->
                    <!--Product Tabs-->
                    <div class="tabs-listing">
                        <ul class="product-tabs">
                            <li rel="tab1"><a class="tablink">Product Details</a></li>
                            <li rel="tab2"><a class="tablink">Product Reviews</a></li>
                            <li rel="tab3"><a class="tablink">Size Chart</a></li>
                            <li rel="tab4"><a class="tablink">Shipping &amp; Returns</a></li>
                        </ul>
                        <div class="tab-container">                    
                            
                            <div id="tab2" class="tab-content">
                                <div id="shopify-product-reviews">
                                    <div class="spr-container">
                                        <div class="spr-header clearfix">
                                            <div class="spr-summary">
                                                <span class="product-review"><a class="reviewLink"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i> </a><span class="spr-summary-actions-togglereviews">Based on 6 reviews456</span></span>
                                           
                                            </div>
                                        </div>
                                        <div class="spr-content">
                                            <div class="spr-form clearfix">
                                                <form method="post" action="#" id="new-review-form" class="new-review-form">
                                                    <h3 class="spr-form-title">Write a review</h3>
                                                    <fieldset class="spr-form-contact">
                                                        <div class="spr-form-contact-name">
                                                          <label class="spr-form-label" for="review_author_10508262282">Name</label>
                                                          <input class="spr-form-input spr-form-input-text " id="review_author_10508262282" type="text" name="review[author]" value="" placeholder="Enter your name">
                                                        </div>
                                                        <div class="spr-form-contact-email">
                                                          <label class="spr-form-label" for="review_email_10508262282">Email</label>
                                                          <input class="spr-form-input spr-form-input-email " id="review_email_10508262282" type="email" name="review[email]" value="" placeholder="john.smith@example.com">
                                                        </div>
                                                    </fieldset>
                                                    <fieldset class="spr-form-review">
                                                      <div class="spr-form-review-rating">
                                                        <label class="spr-form-label">Rating</label>
                                                        <div class="spr-form-input spr-starrating">
                                                          <div class="product-review"><a class="reviewLink" href="#"><i class="fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></a></div>
                                                        </div>
                                                      </div>
                                                
                                                      <div class="spr-form-review-title">
                                                        <label class="spr-form-label" for="review_title_10508262282">Review Title</label>
                                                        <input class="spr-form-input spr-form-input-text " id="review_title_10508262282" type="text" name="review[title]" value="" placeholder="Give your review a title">
                                                      </div>
                                                
                                                      <div class="spr-form-review-body">
                                                        <label class="spr-form-label" for="review_body_10508262282">Body of Review <span class="spr-form-review-body-charactersremaining">(1500)</span></label>
                                                        <div class="spr-form-input">
                                                          <textarea class="spr-form-input spr-form-input-textarea " id="review_body_10508262282" data-product-id="10508262282" name="review[body]" rows="10" placeholder="Write your comments here"></textarea>
                                                        </div>
                                                      </div>
                                                    </fieldset>
                                                    <fieldset class="spr-form-actions">
                                                        <input type="submit" class="spr-button spr-button-primary button button-primary btn btn-primary" value="Submit Review">
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            
                            <div id="tab3" class="tab-content">
                                <h3>WOMEN'S BODY SIZING CHART</h3>
                                <table>
                                  <tbody>
                                    <tr>
                                      <th>Size</th>
                                      <th>XS</th>
                                      <th>S</th>
                                      <th>M</th>
                                      <th>L</th>
                                      <th>XL</th>
                                    </tr>
                                    <tr>
                                      <td>Chest</td>
                                      <td>31" - 33"</td>
                                      <td>33" - 35"</td>
                                      <td>35" - 37"</td>
                                      <td>37" - 39"</td>
                                      <td>39" - 42"</td>
                                    </tr>
                                    <tr>
                                      <td>Waist</td>
                                      <td>24" - 26"</td>
                                      <td>26" - 28"</td>
                                      <td>28" - 30"</td>
                                      <td>30" - 32"</td>
                                      <td>32" - 35"</td>
                                    </tr>
                                    <tr>
                                      <td>Hip</td>
                                      <td>34" - 36"</td>
                                      <td>36" - 38"</td>
                                      <td>38" - 40"</td>
                                      <td>40" - 42"</td>
                                      <td>42" - 44"</td>
                                    </tr>
                                    <tr>
                                      <td>Regular inseam</td>
                                      <td>30"</td>
                                      <td>30½"</td>
                                      <td>31"</td>
                                      <td>31½"</td>
                                      <td>32"</td>
                                    </tr>
                                    <tr>
                                      <td>Long (Tall) Inseam</td>
                                      <td>31½"</td>
                                      <td>32"</td>
                                      <td>32½"</td>
                                      <td>33"</td>
                                      <td>33½"</td>
                                    </tr>
                                  </tbody>
                                </table>
                                <h3>MEN'S BODY SIZING CHART</h3>
                                <table>
                                  <tbody>
                                    <tr>
                                      <th>Size</th>
                                      <th>XS</th>
                                      <th>S</th>
                                      <th>M</th>
                                      <th>L</th>
                                      <th>XL</th>
                                      <th>XXL</th>
                                    </tr>
                                    <tr>
                                      <td>Chest</td>
                                      <td>33" - 36"</td>
                                      <td>36" - 39"</td>
                                      <td>39" - 41"</td>
                                      <td>41" - 43"</td>
                                      <td>43" - 46"</td>
                                      <td>46" - 49"</td>
                                    </tr>
                                    <tr>
                                      <td>Waist</td>
                                      <td>27" - 30"</td>
                                      <td>30" - 33"</td>
                                      <td>33" - 35"</td>
                                      <td>36" - 38"</td>
                                      <td>38" - 42"</td>
                                      <td>42" - 45"</td>
                                    </tr>
                                    <tr>
                                      <td>Hip</td>
                                      <td>33" - 36"</td>
                                      <td>36" - 39"</td>
                                      <td>39" - 41"</td>
                                      <td>41" - 43"</td>
                                      <td>43" - 46"</td>
                                      <td>46" - 49"</td>
                                    </tr>
                                  </tbody>
                                </table>
                                <div class="text-center">
                                    <img src="{{ asset('images/size.jpg') }}" alt="" />
                                </div>
                          </div>
                            
                        </div>
                    </div>
                    <!--End Product Tabs-->
                    
   
                    
                    <!--Recently Product Slider-->
                   
                <!--#ProductSection-product-template-->
            </div>
            <!--MainContent-->
        </div>
    	<!--End Body Content-->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        	<div class="pswp__bg"></div>
            <div class="pswp__scroll-wrap"><div class="pswp__container"><div class="pswp__item"></div><div class="pswp__item"></div><div class="pswp__item"></div></div><div class="pswp__ui pswp__ui--hidden"><div class="pswp__top-bar"><div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button><button class="pswp__button pswp__button--share" title="Share"></button><button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button><button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button><div class="pswp__preloader"><div class="pswp__preloader__icn"><div class="pswp__preloader__cut"><div class="pswp__preloader__donut"></div></div></div></div></div><div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap"><div class="pswp__share-tooltip"></div></div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button><button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button><div class="pswp__caption"><div class="pswp__caption__center"></div></div></div></div></div>
@endsection 
@section('script')
         <!-- Photoswipe Gallery -->
         <script src="{{ asset('js/vendor/photoswipe.min.js') }}"></script>
     <script src="{{ asset('js/vendor/photoswipe-ui-default.min.js') }}"></script>
     <script>
        $(function(){
            var $pswp = $('.pswp')[0],
                image = [],
                getItems = function() {
                    var items = [];
                    $('.lightboximages a').each(function() {
                        var $href   = $(this).attr('href'),
                            $size   = $(this).data('size').split('x'),
                            item = {
                                src : $href,
                                w: $size[0],
                                h: $size[1]
                            }
                            items.push(item);
                    });
                    return items;
                }
            var items = getItems();
        
            $.each(items, function(index, value) {
                image[index]     = new Image();
                image[index].src = value['src'];
            });
            $('.prlightbox').on('click', function (event) {
                event.preventDefault();
              
                var $index = $(".active-thumb").parent().attr('data-slick-index');
                $index++;
                $index = $index-1;
        
                var options = {
                    index: $index,
                    bgOpacity: 0.9,
                    showHideOpacity: true
                }
                var lightBox = new PhotoSwipe($pswp, PhotoSwipeUI_Default, items, options);
                lightBox.init();
            });
        });
        </script>
@endsection 