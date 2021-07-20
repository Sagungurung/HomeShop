@extends('frontend.master')
@section('title','Checkout')
@section('content')

<section id="checkout" class="clearfix">
 <div class="container">
  <div class="row">
   <div class="checkout_1 clearfix">
    <div class="col-sm-8">
	  <div class="checkout_1l clearfix">
	   <h3 class="mgt">Make Your Checkout Here</h3>
	   <!-- <p>Please register in order to checkout more quickly</p> -->
	  </div><br>
	  <div class="checkout_1l1 clearfix">
       <div class="col-sm-6 space_left">
	    <h5>First Name <span class="col_3">*</span></h5>
		<input class="form-control" type="text">
	   </div>
	   <div class="col-sm-6 space_left">
	    <h5>Last Name <span class="col_3">*</span></h5>
		<input class="form-control" type="text">
	   </div>
	  </div>
	  <div class="checkout_1l1 clearfix">
       <div class="col-sm-6 space_left">
	    <h5>Email Address <span class="col_3">*</span></h5>
		<input class="form-control" type="text">
	   </div>
	   <div class="col-sm-6 space_left">
	    <h5>Phone Number <span class="col_3">*</span></h5>
		<input class="form-control" type="text">
	   </div>
	  </div>
	  <div class="checkout_1l1 clearfix">
       <div class="col-sm-6 space_left">
	    <h5>Country <span class="col_3">*</span></h5>
		<select class="form-control">
				 <option>India</option>
				 <option>Paksitan</option>
				 <option>Russia</option>
				 <option>England</option>
				 <option>Nepal</option>
			 </select>
	   </div>
	   <div class="col-sm-6 space_left">
	    <h5>State / Divition <span class="col_3">*</span></h5>
		<select class="form-control">
				 <option>UP</option>
				 <option>MP</option>
				 <option>Bihar</option>
				 <option>Delhi</option>
				 <option>Jharkhand</option>
			 </select>
	   </div>
	  </div>
	  <div class="checkout_1l1 clearfix">
       <div class="col-sm-6 space_left">
	    <h5>Address Line 1 <span class="col_3">*</span></h5>
		<input class="form-control" type="text">
	   </div>
	   <!-- <div class="col-sm-6 space_left">
	    <h5>Address Line 2 <span class="col_3">*</span></h5>
		<input class="form-control" type="text">
	   </div> -->
	  </div>
	  <div class="checkout_1l1 clearfix">
       <div class="col-sm-6 space_left">
	    <h5>Postal Code <span class="col_3">*</span></h5>
		<input class="form-control" type="text">
	   </div>
	   <!-- <div class="col-sm-6 space_left">
	    <h5>Company <span class="col_3">*</span></h5>
		<select class="form-control">
				 <option>Microsoft</option>
				 <option>Xaiomi</option>
				 <option>Apple</option>
				 <option>Samsung</option>
				 <option>Motorola</option>
			 </select>
	   </div> -->
	  </div>
	  <div class="checkout_1l clearfix">
	   <p><input type="checkbox"> Create an account?</p>
	  </div>
	</div>
	 <div class="col-sm-4">
       <div class="checkout_1r clearfix">
	     <h4 class="mgt">CART TOTALS</h4>
	     <hr class="hr_1">
		<h5>Sub Total <span class="pull-right">$230.00</span></h5>
		<h5>(+) Shipping <span class="pull-right">$20.00</span></h5>
		<hr> 
		<h5>Total <span class="pull-right">$250.00</span></h5><br>
		 <h4>PAYMENTS</h4>
	     <hr class="hr_1">
		 <p><input type="radio"> <span>Check Payments</span></p>
		 <p><input type="radio"> <span>Cash On Delivery</span></p>
		 <p><input type="radio"> <span>PayPal</span></p><br>
		 <h6><a class="button" href="#">PROCEED TO CHECKOUT</a></h6>
	   </div>
	  </div>
   </div>
  </div>
 </div>
</section>

<section id="enquiry">
 <div class="container">
  <div class="row">
    <div class="enquiry_1 text-center clearfix">
	 <div class="col-sm-12">
	  <h4 class="mgt">NEWSLETTER</h4>
	  <p>Subscribe to our newsletter and get <span class="col_1">20%</span> off your first purchase</p>
	  <div class="input-group">
		<input type="text" class="form-control form_2" placeholder="Your Email">
		<span class="input-group-btn">
			<button class="btn btn-primary" type="button">
				SUBSCRIBE</button>
		</span>
      </div>
	 </div>
	</div>
  </div>
 </div>
</section>

<section id="shipping">
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
	  <h5 class="mgt">SUCURE PAYMENT <br> <span class="col_2">100% secure payment</span></h5>
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
</section>


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

@endsection