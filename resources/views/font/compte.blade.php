@extends('font.master')
@section('title', 'compte')
@section('content')
@include('font.partials.header') 
@include('font.partials.menu')
    <!--Body Content-->
    <div id="page-content" class="mt-5">        
        <!-- Lookbook Start -->
         	<!--Page Title-->
    	<div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper">
                    <h1 class="page-width">Your Account</h1>
                 </div>
      		</div>
		</div>
        <!--End Page Title-->
        
        <div class="container">
    <!-- Account Panel Starts -->
    <div class="row">
      <div class="col-md-4">
        <a href="{{route('order.create')}}" class="btn w-100">
          <div class="card">
            <div class="card-body">
              <div class="card-title">
                <i class="fas fa-2x fa-shopping-bag"></i>
                <span class="h4">Your Orders</span>
              </div>
              <small class="text-muted">Track, return or buy things again.</small>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-4">
        <a href="{{route('profile.edit')}}" class="btn w-100">
          <div class="card">
            <div class="card-body">
              <div class="card-title">
                <i class="fas fa-2x fa-key"></i>
                <span class="h4">Mes Données personnelles</span> 
              </div>
              <small class="text-muted">Change your password.</small>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-4">
        <a href="{{route('adresse')}}" class="btn w-100">
          <div class="card">
            <div class="card-body">
              <div class="card-title">
                <i class="fas fa-2x fa-map-marked-alt"></i>
                <span class="h4">Your Addresses</span>
              </div>
              <small class="text-muted">Edit addresses for orders.</small>
            </div>
          </div>
        </a>
      </div>
    </div> <!-- Account Panel Starts -->

  
  </div>
        
    </div> 
    <!--End Body Content-->
@endsection 