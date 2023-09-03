@extends('font.master')
@section('title', 'wishlist')
@section('content')
@include('font.partials.header') 
@include('font.partials.menu')
   <!--Body Content-->
   <div id="page-content" class="mt-5">
    	<!--Page Title-->
    	<div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width">Wish List</h1></div>
      		</div>
		</div>
        <!--End Page Title-->
        
        <div class="container">
        	<div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                	<form action="#">
                        <div class="wishlist-table table-content table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                    	<th class="product-name text-center alt-font">Remove</th>
                                        <th class="product-price text-center alt-font">Images</th>
                                        <th class="product-name alt-font">Product</th>
                                        <th class="product-price text-center alt-font">Unit Price</th>
                                        <th class="stock-status text-center alt-font">Stock Status</th>
                                        <th class="product-subtotal text-center alt-font">Add to Cart</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($already_wishlist as $wishlist)
                                    <tr>
                                    	<td class="product-remove text-center" valign="middle"><a href="#"><i class="icon icon anm anm-times-l"></i></a></td>
                                        <td class="product-thumbnail text-center">
                                            <a href="#"><img src="{{ asset('images/product-images/product-image8.jpg') }}" alt="" title="" /></a>
                                        </td>
                                        <td class="product-name"><h4 class="no-margin"><a href="#">Minerva Dress black</a></h4></td>
                                        <td class="product-price text-center"><span class="amount">{{$wishlist['amount']}}</span></td>
                                        <td class="stock text-center">
                                            <span class="in-stock">in stock</span>
                                        </td>
                                        <td class="product-subtotal text-center"><button type="button" class="btn btn-small">Add To Cart</button></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </form>                   
               	</div>
            </div>
        </div>
        
    </div>
    <!--End Body Content-->
@endsection