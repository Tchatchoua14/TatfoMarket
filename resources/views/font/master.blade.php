<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
    <!-- Bootstap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <script src="https://www.google.com/recaptcha/enterprise.js?render=6LcYROknAAAAAA1LK4Kbc93hJ4dcWggf5cLYpyUA"></script>
    <title>TatfoMarket - @yield('title')</title>
</head>


<script>
function onClick(e) {
  e.preventDefault();
  grecaptcha.enterprise.ready(async () => {
    const token = await grecaptcha.enterprise.execute('6LcBDbgnAAAAAFuEMR0dWKE5m0oo9495WeD4Aaxg', {action: 'LOGIN'});
    // IMPORTANT: The 'token' that results from execute is an encrypted response sent by
    // reCAPTCHA Enterprise to the end user's browser.
    // This token must be validated by creating an assessment.
    // See https://cloud.google.com/recaptcha-enterprise/docs/create-assessment
  });
}
</script>
<body>
<div id="pre-loader">
    <img src="{{ asset('images/loader.gif') }}" alt="Loading..." />
</div>
<div class="pageWrapper">
    @yield('content1')
    @include('font.partials.navbar')
    @yield('content2')
    @include('font.partials.menu')
    @yield('content')
    @include('font.partials.footer')

</div>
         <!-- Including Jquery -->
     <script src="{{ asset('js/vendor/jquery-3.3.1.min.js') }}"></script>
     <script src="{{ asset('js/vendor/modernizr-3.6.0.min.js') }}"></script>
     <script src="{{ asset('js/vendor/jquery.cookie.js') }}"></script>
     <script src="{{ asset('js/vendor/wow.min.js') }}"></script>
     <!-- Including Javascript -->
     <script src="{{ asset('js/bootstrap.min.js') }}"></script>
     <script src="{{ asset('js/plugins.js') }}"></script>
     <script src="{{ asset('js/popper.min.js') }}"></script>
     <script src="{{ asset('js/lazysizes.js') }}"></script>
     <script src="{{ asset('js/main.js') }}"></script>
     <!--For Newsletter Popup-->
     <script>
		jQuery(document).ready(function(){  
		  jQuery('.closepopup').on('click', function () {
			  jQuery('#popup-container').fadeOut();
			  jQuery('#modalOverly').fadeOut();
		  });
		  
		  var visits = jQuery.cookie('visits') || 0;
		  visits++;
		  jQuery.cookie('visits', visits, { expires: 1, path: '/' });
		  console.debug(jQuery.cookie('visits')); 
		  if ( jQuery.cookie('visits') > 1 ) {
			jQuery('#modalOverly').hide();
			jQuery('#popup-container').hide();
		  } else {
			  var pageHeight = jQuery(document).height();
			  jQuery('<div id="modalOverly"></div>').insertBefore('body');
			  jQuery('#modalOverly').css("height", pageHeight);
			  jQuery('#popup-container').show();
		  }
		  if (jQuery.cookie('noShowWelcome')) { jQuery('#popup-container').hide(); jQuery('#active-popup').hide(); }
		}); 
		
		jQuery(document).mouseup(function(e){
		  var container = jQuery('#popup-container');
		  if( !container.is(e.target)&& container.has(e.target).length === 0)
		  {
			container.fadeOut();
			jQuery('#modalOverly').fadeIn(200);
			jQuery('#modalOverly').hide();
		  }
		});
	</script>
    <!--End For Newsletter Popup-->
    @yield('script')
</body> 
</html>