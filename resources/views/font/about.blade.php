@extends('font.master')
@section('title' , 'about')
@section('content')
@include('font.partials.header') 
@include('font.partials.menu')
   <!--Body Content-->
   <div id="page-content" class="mt-5">
    	<!--Page Title-->
    	<div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width">About Us</h1></div>
      		</div>
		</div>
        <!--End Page Title-->
        
        <div class="container">
        	<div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                	<div class="text-center mb-4">
                        <h2 class="h2">TatfoMarket la nouvelle destination desormais pour vos achats en ligne</h2>
                        <div class="rte-setting">
                            <p><strong>Faites votre premier achat et soyez livré gratuitement</strong></p>
                            <p>A partir de 50% sur vos achat vous abtenez un coupon qui vous permettra des reduction lors de vos prochaines achat en ligne</p>
                        </div>
                    </div>
               	</div>
            </div>
            <div class="row">
            	<div class="col-12 col-sm-4 col-md-4 col-lg-4 mb-4"><img class="blur-up lazyload" data-src="{{ asset('images/about1.jpg') }}" src="{{ asset('images/about1.jpg') }}" alt="About Us" /></div>
                <div class="col-12 col-sm-4 col-md-4 col-lg-4 mb-4"><img class="blur-up lazyload" data-src="{{ asset('images/about2.jpg') }}" src="{{ asset('images/about2.jpg') }}" alt="About Us" /></div>
                <div class="col-12 col-sm-4 col-md-4 col-lg-4 mb-4"><img class="blur-up lazyload" data-src="{{ asset('images/about3.jpg') }}" src="{{ asset('images/about3.jpg') }}" alt="About Us" /></div>
            </div>
            <div class="row">
            	<div class="col-12">
                    <h2>Sed ut perspiciatis unde omnis iste natus error</h2>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain.</p>
                    <p>simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted.</p>
                    <p></p>
                </div>
            </div>
            
            <div class="row">
            	<div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-4">
                	<h2 class="h2">About Annimex Web</h2>
                    <div class="rte-setting"><p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</strong></p>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    <p></p>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p></div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                	<h2 class="h2">Contact Us</h2> 
                    <ul class="addressFooter">
                    <li><i class="icon anm anm-map-marker-al"></i><p>134w. rue grand magasin,<br>Bilongue Entrée bille, Douala-Cameroun</p></li>
                    <li class="phone"><i class="icon anm anm-phone-s"></i><p>(+237) 691 167 590</p></li>
                    <li class="email"><i class="icon anm anm-envelope-l"></i><p>Tchatchouaviny@yahoo.fr</p></li>
                    </ul>
                    <hr />
                    <ul class="list--inline site-footer__social-icons social-icons">
                        <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Facebook"><i class="icon icon-facebook"></i></a></li>
                        <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Twitter"><i class="icon icon-twitter"></i> <span class="icon__fallback-text">Twitter</span></a></li>
                        <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Pinterest"><i class="icon icon-pinterest"></i> <span class="icon__fallback-text">Pinterest</span></a></li>
                        <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Instagram"><i class="icon icon-instagram"></i> <span class="icon__fallback-text">Instagram</span></a></li>
                        <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Tumblr"><i class="icon icon-tumblr-alt"></i> <span class="icon__fallback-text">Tumblr</span></a></li>
                        <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on YouTube"><i class="icon icon-youtube"></i> <span class="icon__fallback-text">YouTube</span></a></li>
                        <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Vimeo"><i class="icon icon-vimeo-alt"></i> <span class="icon__fallback-text">Vimeo</span></a></li>
                    </ul>
                </div>
            </div>
            
            
        </div>
        
    </div>
    <!--End Body Content-->
@endsection 