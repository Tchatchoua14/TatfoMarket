@extends('font.master')
@section('title', 'profile')
@section('content')
  <!--Body Content-->
  <div id="page-content">
    	<!--Page Title-->
    	<div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper">
                    <h1 class="page-width">My Profile</h1>
                    @if (session('success'))
                        <h3 class="card-title alert alert-success text-uppercase" role="alert">
                        <i class="icon anm anm-truck-l icon-large"></i> &nbsp;<strong>Congratulations!</strong> {{ session('success') }} 
                        </h3> 
                    @endif
            </div>
      		</div>
		</div>
        <!--End Page Title-->

        <div class="container">

        <div class="row">
        <div class="col-md-4 my-md-0 my-2">
        <a href="add_new_address.html" class="btn bg-transparent m-0 p-0">
          <div class="card" style="width: 256px; height: 206px;border: 2px dashed #C7C7C7; ">
            <div class="card-body mt-5">
              <i class="fas fa-plus fa-3x" style="color: #C7C7C7;"></i>
              <h5 class="card-title">Modifier ma photo</h5>
            </div>
          </div>
        </a>
      </div>
 
      <div class="col-md-4 my-md-0 my-2">
        <a href="add_new_address.html" class="btn bg-transparent m-0 p-0">
          <div class="card" style="width: 256px; height: 206px;border: 2px dashed #C7C7C7; ">
            <div class="card-body mt-5">
              <i class="fas fa-plus fa-3x" style="color: #C7C7C7;"></i>
              <h5 class="card-title"><i class="fas fa-plus"></i> Ajouter une Adresse</h5>
            </div>
          </div>
        </a>
      </div>
        </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
        </div>

 </div>

    <!--End Body Content-->
@endsection
