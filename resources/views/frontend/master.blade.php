<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Shop</title>
	<link href="{{asset('/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="/frontend/css/global.css" rel="stylesheet">
	<link href="/frontend/css/index.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="frontend/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Amaranth&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">
	<script src="/frontend/js/jquery-2.1.1.min.js"></script>
    <script src="/frontend/js/bootstrap.min.js"></script>
  </head>
  <!-- style="background-color: #c59292;" -->
<body>
@include('frontend.frontTop')

@include('frontend.frontHeader')


@yield('content')

<!-- <section id="shipping">
 <div class="container">
  <div class="row">
   <div class="shipping_1 clearfix">
    <div class="col-sm-3">
	 <div class="shipping_1i clearfix">
	  <span><i class="fa fa-rocket"></i></span>
	  <h5 class="mgt">FREE SHIPING <br> <span class="col_2">Orders over $100</span></h5>
	 </div>
	</div>
	<div class="col-sm-3">
	 <div class="shipping_1i clearfix">
	  <span><i class="fa fa-recycle"></i></span>
	  <h5 class="mgt">FREE RETURN <br> <span class="col_2">Within 30 days returns</span></h5>
	 </div>
	</div>
	<div class="col-sm-3">
	 <div class="shipping_1i clearfix">
	  <span><i class="fa fa-lock"></i></span>
	  <h5 class="mgt">SECURE PAYMENT <br> <span class="col_2">100% secure payment</span></h5>
	 </div>
	</div>
	<div class="col-sm-3">
	 <div class="shipping_1i clearfix">
	  <span><i class="fa fa-tags"></i></span>
	  <h5 class="mgt">BEST PEICE <br> <span class="col_2">Guaranteed price</span></h5>
	 </div>
	</div>
   </div>
  </div>
 </div>
</section> -->


<script>
$(document).ready(function(){
	/*****Fixed Menu******/
	var secondaryNav = $('.cd-secondary-nav'),
	   secondaryNavTopPosition = secondaryNav.offset().top;
		$(window).on('scroll', function(){
			if($(window).scrollTop() > secondaryNavTopPosition ) {
				secondaryNav.addClass('is-fixed');	
			} else {
				secondaryNav.removeClass('is-fixed');
			}
		});	
		
});
</script>
</body> 
</html>