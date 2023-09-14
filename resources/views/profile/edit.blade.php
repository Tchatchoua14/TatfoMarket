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
          <div class="col-md-12 my-2 text-center">
            <a href="{{route('adresse')}}" class="btn btn-primary">
                 Ajouter une Adresse
            </a>
          </div>
        </div>

    <div class="py-12 mx-5 p-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="max-w-xl">
            <a href="" class="btn bg-transparent m-0 p-0">
                <img src="{{ asset('/images/faces/'.Auth::user()->photo) }}"alt="" class="mb-3" style="width: 100px;height: 100px;" />
            </a>
            </div>
            <div class="max-w-xl">
            <form action="{{route('user.update', $user->id)}}"  enctype="multipart/form-data" class="mb-5"> 
                 @csrf 
                  @method('PATCH')
               <div class="input-group mb-2">
                        <span class="input-group-btn">
                            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                            <i class="fa fa-picture-o"></i><button type="submit">image</button>
                            </a>
                        </span>
                    </div>
            </form>
            </div>
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
