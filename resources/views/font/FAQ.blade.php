@extends('font.master')
@section('title', 'FAQ')
@section('content')
@include('font.partials.header') 
@include('font.partials.menu')
   
    <!--Body Content-->
    <div id="page-content" class="mt-5">        
        <!-- Lookbook Start -->
        <div class="container">
        	<div class="row">
            	<div class="col-12 col-sm-12 col-md-12 col-lg-12">	
        			<div class="empty-page-content text-center">
                    <h1 align="center" class="black-text col-md-12" style="font-weight:bold;">Shipping & Returns</h1>
  
  <p align="center">Gainaloe will give more priority to the customer's happiness.We deliver the orders at the best quality with the best pricing</p>
  <div class="row text-center text-md-left">
    <div class="col-md-6 mb-4">
    <img class="card-img-top  animated pulse infinite slow" src="https://codyhouse.co/demo-templates/mercurio/assets/img/card-v8-img-3.jpg" alt="Card image cap">
    </div>
    
    <div class="col-md-6 mb-4">
   
    <p class="text-muted" style="margin-top:-20px;">
        <strong>
            <ul align="left">
            <li>Customers should be responsible for what they are ordering.</li>
            <li>If you notice any delay in the delivery of your order, please be patient. Due to some technical issues, it happens rarely. You will receive your order within 3-5 working days.</li>
            <li>We will deliver your order to the address that you provided, while placing the order.</li>
            <li>If there any damage occurs to the product in the process of delivering your order. We will replace it as soon as possible.</li>
            <li>Currently, COD is Not Available for any Orders.</li>
            <li>You can cancel your Order at any time, within 24 hours from the Order Delivered.</li>
            <li>When the order is delivered, Customers are not permitted to reject their order unless if any damage occurs.</li>
            <li>If you cancelled your order, Refund will be done within 2-3 working days.</li>
            <li>For any enquiry regarding your order you can directly contact us by using the contact us page “link”.</li>
           
            </ul>
        </strong>
    </p>
    </div>
    </div>
                        <p><a href="{{ route('index') }}" class="btn btn--has-icon-after">Continue shopping <i class="fa fa-caret-right" aria-hidden="true"></i></a></p>
                      </div>
        		</div>
        	</div>
        </div>
 
        
    </div>
    <!--End Body Content-->
@endsection 