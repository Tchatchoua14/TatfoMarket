@extends('font.master')
@section('title')
@section('content')
   
    <!--Body Content-->
    <div id="page-content">        
        <!-- Lookbook Start -->
        <div class="container">
        	<div class="row">
            	<div class="col-12 col-sm-12 col-md-12 col-lg-12">	
        			<div class="empty-page-content text-center">
                        <h1>404 Page Not Found</h1>
                        <p>The page you requested does not exist.</p>
                        <p><a href="{{ route('index') }}" class="btn btn--has-icon-after">Continue shopping <i class="fa fa-caret-right" aria-hidden="true"></i></a></p>
                      </div>
        		</div>
        	</div>
        </div>
        <!-- Lookbook Start -->



        <!-- <li class="nav-item dropdown">
 <img src="Auth::user()->avatar" alt="Auth::user()->name">
   <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" 
   role="button" data-toggle="dropdown" 
   aria-haspopup="true" aria-expanded="false" v-pre>
              Auth::user()->name
  </a>

 <div class="dropdown-menu dropdown-menu-right" 
       aria-labelledby="navbarDropdown">
  <a class="dropdown-item" href="{{ route('logout') }}" 
     onclick="event.preventDefault();  
       document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
      </a>
  <form id="logout-form" action=" route('logout') " method="POST" class="d-none">
                               @csrf
  </form>
</div>
</li>  -->
        
    </div>
    <!--End Body Content-->
@endsection 