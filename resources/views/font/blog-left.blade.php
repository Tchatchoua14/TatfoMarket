@extends('font.master')
@section('title')
@section('content')
@include('font.partials.header') 
@include('font.partials.menu')
    <!--Body Content-->
    <div id="page-content" class="mt-5">
    	<!--Page Title-->
    	<div class="page section-header text-center mb-0">
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width">Blog Left Sidebar</h1></div>
      		</div>
		</div>
        <!--End Page Title-->
	    <div class="bredcrumbWrap">
            <div class="container breadcrumbs">
                <a href="index.html" title="Back to the home page">Home</a><span aria-hidden="true">›</span><span>Blog Left Sidebar</span>
            </div>
        </div>
        <div class="container">
        	<div class="row">
            	<!--Sidebar-->
            	<div class="col-12 col-sm-12 col-md-3 col-lg-3 sidebar">
                	<div class="sidebar_tags">
                    	<div class="sidebar_widget categories">
                            <div class="widget-title"><h2>Category</h2></div>
                            <div class="widget-content">
                                <ul class="sidebar_categories">
                                	<li class="lvl-1 "><a href="http://annimexweb.com/" class="site-nav lvl-1">Beauty</a></li>
                                    <li class="lvl-1  active"><a href="#" class="site-nav lvl-1">fashion</a></li>
                                    <li class="lvl-1 "><a href="#" class="site-nav lvl-1">summer</a></li>
                                    <li class="lvl-1 "><a href="#" class="site-nav lvl-1">trend</a></li>
                                    <li class="lvl-1 "><a href="#" class="site-nav lvl-1">winter</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar_widget">
                        	<div class="widget-title"><h2>Recent Posts</h2></div>
							<div class="widget-content">
                                <div class="list list-sidebar-products">
                                  <div class="grid">
                                    <div class="grid__item">
                                      <div class="mini-list-item">
                                        <div class="mini-view_image">
                                            <a class="grid-view-item__link" href="#">
                                                <img class="grid-view-item__image blur-up lazyload" data-src="{{ asset('images/blog/blog-post-sml-1.jpg') }}" src="{{ asset('images/blog/blog-post-sml-1.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="details"> <a class="grid-view-item__title" href="#">It's all about how you wear</a>
                                          <div class="grid-view-item__meta"><span class="article__date"> <time datetime="2017-05-02T14:33:00Z">May 02, 2017</time></span></div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="grid__item">
                                      <div class="mini-list-item">
                                        <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image blur-up lazyload" data-src="{{ asset('images/blog/blog-post-sml-2.jpg') }}" src="{{ asset('images/blog/blog-post-sml-2.jpg') }}" alt="" /></a> </div>
                                        <div class="details"> <a class="grid-view-item__title" href="#">27 Days of Spring Fashion Recap</a>
                                          <div class="grid-view-item__meta"><span class="article__date"> <time datetime="2017-05-02T14:33:00Z">May 02, 2017</time> </span></div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="grid__item">
                                      <div class="mini-list-item">
                                        <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image blur-up lazyload" data-src="{{ asset('images/blog/blog-post-sml-3.jpg') }}" src="{{ asset('images/blog/blog-post-sml-3.jpg') }}" alt="" /></a> </div>
                                        <div class="details"> <a class="grid-view-item__title" href="#">How to Wear The Folds Trend Four Ways</a>
                                          <div class="grid-view-item__meta"><span class="article__date"> <time datetime="2017-05-02T14:14:00Z">May 02, 2017</time> </span></div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="grid__item">
                                      <div class="mini-list-item">
                                        <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image blur-up lazyload" data-src="{{ asset('images/blog/blog-post-sml-4.jpg') }}" src="{{ asset('images/blog/blog-post-sml-4.jpg') }}" alt="" /></a> </div>
                                        <div class="details"> <a class="grid-view-item__title" href="#">Accusantium doloremque</a>
                                          <div class="grid-view-item__meta"><span class="article__date"> <time datetime="2017-05-02T14:12:00Z">May 02, 2017</time> </span></div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                          	</div>
						</div>
                        <div class="sidebar_widget">
                        	<div class="widget-title"><h2>Recent Comments</h2></div>
							<div class="widget-content">
                                <div class="list list-sidebar-products">
                                  <div class="grid">
                                    <div class="grid__item">
                                      <div class="mini-list-item">
                                        <div class="mini-view_image">
                                            <a class="grid-view-item__link" href="#">
                                                <img class="grid-view-item__image blur-up lazyload" data-src="{{ asset('images/recent-commnet-img.jpg') }}" src="{{ asset('images/recent-commnet-img.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="details">
                                        	<div class="grid-view-item__meta"><strong>Tim</strong> On <a href="#">Lorem Ipsum</a></div>
                                        	<a class="grid-view-item__title" href="#">On sait depuis longtemps que travailler avec</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="grid__item">
                                      <div class="mini-list-item">
                                        <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image blur-up lazyload" data-src="{{ asset('images/recent-commnet-img.jpg') }}" src="{{ asset('images/recent-commnet-img.jpg') }}" alt="" /></a> </div>
                                        <div class="details">
                                        	<div class="grid-view-item__meta"><strong>Joy</strong> On <a href="#">Lorem Ipsum</a></div>
                                        	<a class="grid-view-item__title" href="#">On sait depuis longtemps que travailler avec</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="grid__item">
                                      <div class="mini-list-item">
                                        <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image blur-up lazyload" data-src="{{ asset('images/recent-commnet-img.jpg') }}" src="{{ asset('images/recent-commnet-img.jpg') }}" alt="" /></a> </div>
                                        <div class="details">
                                        	<div class="grid-view-item__meta"><strong>Jhon</strong> On <a href="#">Lorem Ipsum</a></div>
                                        	<a class="grid-view-item__title" href="#">On sait depuis longtemps que travailler avec</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="grid__item">
                                      <div class="mini-list-item">
                                        <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image blur-up lazyload" data-src="{{ asset('images/recent-commnet-img.jpg') }}" src="{{ asset('images/recent-commnet-img.jpg') }}" alt="" /></a> </div>
                                        <div class="details">
                                        	<div class="grid-view-item__meta"><strong>Tim</strong> On <a href="#">Lorem Ipsum</a></div>
                                        	<a class="grid-view-item__title" href="#">On sait depuis longtemps que travailler avec</a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                          	</div>
						</div>
                        <div class="sidebar_widget tags-clouds">
                        	<div class="widget-title"><h2>Tags Cloud</h2></div>
							<div class="widget-content">
								<ul>
                                	<li><a href="#">Fashion</a></li>
                                    <li><a href="#">Clothes</a></li>
                                    <li><a href="#">Shoes</a></li>
                                    <li><a href="#">Jeans</a></li>
                                    <li><a href="#">Furniture</a></li>
                                    <li><a href="#">Sun Glasses</a></li>
                                    <li><a href="#">Winter</a></li>
                                    <li><a href="#">Autoparts</a></li>
                                </ul>
                          	</div>
						</div>
						<div class="sidebar_widget">
                        	<div class="widget-title"><h2>Trending Now</h2></div>
							<div class="widget-content">
                                <div class="list list-sidebar-products">
                                  <div class="grid">
                                    <div class="grid__item">
                                      <div class="mini-list-item">
                                        <div class="mini-view_image">
                                            <a class="grid-view-item__link" href="#">
                                                <img class="grid-view-item__image blur-up lazyload" data-src="{{ asset('images/product-images/mini-product-img.jpg') }}" src="{{ asset('images/product-images/mini-product-img.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="details"> <a class="grid-view-item__title" href="#">Cena Skirt</a>
                                          <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$173.60</span></span></div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="grid__item">
                                      <div class="mini-list-item">
                                        <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image blur-up lazyload" data-src="{{ asset('images/product-images/mini-product-img1.jpg') }}" src="{{ asset('images/product-images/mini-product-img1.jpg') }}" alt="" /></a> </div>
                                        <div class="details"> <a class="grid-view-item__title" href="#">Block Button Up</a>
                                          <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$378.00</span></span></div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="grid__item">
                                      <div class="mini-list-item">
                                        <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image blur-up lazyload" data-src="{{ asset('images/product-images/mini-product-img2.jpg') }}" src="{{ asset('images/product-images/mini-product-img2.jpg') }}" alt="" /></a> </div>
                                        <div class="details"> <a class="grid-view-item__title" href="#">Balda Button Pant</a>
                                          <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$278.60</span></span></div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="grid__item">
                                      <div class="mini-list-item">
                                        <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image blur-up lazyload" data-src="{{ asset('images/product-images/mini-product-img3.jpg') }}" src="{{ asset('images/product-images/mini-product-img3.jpg') }}" alt="" /></a> </div>
                                        <div class="details"> <a class="grid-view-item__title" href="#">Border Dress in Black/Silver</a>
                                          <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$228.00</span></span></div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                          	</div>
						</div>
                    </div>
                </div>
                <!--End Sidebar-->
                <!--Main Content-->
                <div class="col-12 col-sm-12 col-md-9 col-lg-9 main-col">
                	<div class="custom-search">
                        <form action="http://annimexweb.com/search" method="get" class="input-group search-header search" role="search" style="position: relative;">
                            <input class="search-header__input search__input input-group__field" type="search" name="q" placeholder="Search" aria-label="Search" autocomplete="off">
                            <span class="input-group__btn"><button class="btnSearch" type="submit"> <i class="icon anm anm-search-l"></i> </button></span>
                        </form>
                    </div>
                    <div class="blog--list-view blog--grid-load-more">
                    	<div class="article"> 
                            <!-- Article Image --> 
                             <a class="article_featured-image" href="#"><img class="blur-up lazyload" data-src="{{ asset('images/blog/blog-post-1.jpg') }}" src="{{ asset('images/blog/blog-post-1.jpg') }}" alt="It's all about how you wear"></a> 
                            <h2 class="h3"><a href="blog-left-sidebar.html">It's all about how you wear</a></h2>
                            <ul class="publish-detail">                      
                                <li><i class="anm anm-user-al" aria-hidden="true"></i>  User</li>
                                <li><i class="icon anm anm-clock-r"></i> <time datetime="2017-05-02">May 02, 2017</time></li>
                                <li>
                                    <ul class="inline-list">   
                                        <li><i class="icon anm anm-comments-l"></i> <a href="#"> 0 comments</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="rte"> 
                                <p>On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de......</p>
                                 </div>
                            <p><a href="#" class="btn btn-secondary btn--small">Read more <i class="fa fa-caret-right" aria-hidden="true"></i></a></p>
                        </div>
                        <div class="article"> 
                            <!-- Article Image --> 
                             <a class="article_featured-image" href="#"><img class="blur-up lazyload" data-src="{{ asset('images/blog/blog-post-2.jpg') }}" src="{{ asset('images/blog/blog-post-2.jpg') }}" alt="27 Days of Spring Fashion Recap"></a> 
                            <h2 class="h3"><a href="blog-right-sidebar.html">27 Days of Spring Fashion Recap</a></h2>
                            <ul class="publish-detail">                      
                                <li><i class="anm anm-user-al" aria-hidden="true"></i>  User</li>
                                <li><i class="icon anm anm-clock-r"></i> <time datetime="2017-05-02">May 02, 2017</time></li>
                                <li>
                                    <ul class="inline-list">   
                                        <li><i class="icon anm anm-comments-l"></i> <a href="#"> 0 comments</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="rte"> 
                                <p>Plusieurs variations de Lorem Ipsum peuvent être trouvées ici ou là, mais la majeure partie d'entre elles a été altérée par l'addition d'humour ou de mots aléatoires qui ne ressemblent pas une seconde à du texte standard. Si vous voulez utiliser un passage du Lorem Ipsum, vous devez être sûr qu'il n'y a rien d'embarrassant caché dans le texte. Tous les générateurs de Lorem Ipsum sur Internet tendent à reproduire......</p>
                                 </div>
                            <p><a href="#" class="btn btn-secondary btn--small">Read more <i class="fa fa-caret-right" aria-hidden="true"></i></a></p>
                        </div>
                        <div class="article"> 
                            <!-- Article Image --> 
                             <a class="article_featured-image" href="#"><img class="blur-up lazyload" data-src="{{ asset('images/blog/blog-post-3.jpg') }}" src="{{ asset('images/blog/blog-post-3.jpg') }}" alt="How to Wear The Folds Trend Four Ways"></a> 
                            <h2 class="h3"><a href="#">How to Wear The Folds Trend Four Ways</a></h2>
                            <ul class="publish-detail">                      
                                <li><i class="anm anm-user-al" aria-hidden="true"></i>  User</li>
                                <li><i class="icon anm anm-clock-r"></i> <time datetime="2017-05-02">May 02, 2017</time></li>
                                <li>
                                    <ul class="inline-list">   
                                        <li><i class="icon anm anm-comments-l"></i> <a href="#"> 10 comments</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="rte"> 
                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure......</p>
                                 </div>
                            <p><a href="#" class="btn btn-secondary btn--small">Read more <i class="fa fa-caret-right" aria-hidden="true"></i></a></p>
                        </div>
                        <div class="article"> 
                            <!-- Article Image --> 
                             <a class="article_featured-image" href="#"><img class="blur-up lazyload" data-src="{{ asset('images/blog/blog-post-4.jpg') }}" src="{{ asset('images/blog/blog-post-4.jpg') }}" alt="Accusantium doloremque"></a> 
                            <h2 class="h3"><a href="#">Accusantium doloremque</a></h2>
                            <ul class="publish-detail">                      
                                <li><i class="anm anm-user-al" aria-hidden="true"></i>  User</li>
                                <li><i class="icon anm anm-clock-r"></i> <time datetime="2017-05-02">May 02, 2017</time></li>
                                <li>
                                    <ul class="inline-list">   
                                        <li><i class="icon anm anm-comments-l"></i> <a href="#"> 3 comments</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="rte"> 
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat......</p>
                                 </div>
                            <p><a href="#" class="btn btn-secondary btn--small">Read more <i class="fa fa-caret-right" aria-hidden="true"></i></a></p>
                        </div>
                        <div class="loadmore-post">	
                            <a href="#;" class="btn loadMorepost">Load More</a>
                        </div>
                    </div>
                </div>
                <!--End Main Content-->
            </div>
        </div>
        
    </div>
    <!--End Body Content-->
@endsection
