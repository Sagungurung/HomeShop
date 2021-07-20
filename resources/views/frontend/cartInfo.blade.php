@extends('frontend.master')
@section('title','Checkout')
@section('content')

<section id="center" class="center_shop clearfix">
	<div class="container">
		<div class="row">
			<div class="center_shop_1 clearfix">
				<div class="col-sm-12">
					<h5 class="mgt">
						<a href="#">Home <i class="fa fa-long-arrow-right"></i> </a>
						<a href="#">Seller Info: Please contact to sellers for the products you've chosen</a>
					</h5>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- <section id="checkout" class="clearfix">
	<div class="container"> -->
<!-- <div class="row">
			<div class="checkout_1 clearfix">
				<div class="col-sm-8">
					<div class="checkout_1l1 clearfix">
						<div class="col-sm-6 space_left">
							<h4>Seller</h4>
						</div>
						<div class="col-sm-6 space_left">
							<h4>Contact</h4>
						</div>
					</div>

					@if(count($carts)>0)
					@foreach($products as $product)
					@foreach($carts as $cart)
					@if($cart->product_id == $product->id)
					
					<div class="checkout_1l1 clearfix">
						<div class="col-sm-6 space_left">
							<h5>{{$product->seller->firstname}} {{$product->seller->lastname}} for {{$cart->product->pname}}</h5>
						</div>
						<div class="col-sm-6 space_left">
							<h5>{{$product->seller->phone_no}}</h5>
						</div>
					</div>
					@endif
					@endforeach
					@endforeach
					@else
					<div class="checkout_1l1 clearfix">
						<div class="col-sm-6 space_left">
							<h5><span class="col_3">Please add product to cart to contact Sellers</span></h5>
						</div>
					</div>
					@endif
				</div>
				<br>
				<!-- <div class="checkout_1l clearfix">
						<p></p>
					</div><br> -->

<!-- <div class="col-sm-4">
					<div class="checkout_1r clearfix">
						<h4 class="mgt">CART TOTALS</h4>
						<hr class="hr_1">
						<h5>You have chosen the product worth of Rs<span class="pull-right">{{$cart->total}}</span></h5>
					</div>
				</div>
			</div>
		</div> -->

<table id="example1" class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>Product Image</th>
			<th>Product Name</th>
			<th>Quantity</th>
			<th>Seller</th>
			<th>Contact</th>
		</tr>
	</thead>
	<tbody>

		@if(count($carts)>0)
		@foreach($products as $product)
		@foreach($carts as $cart)
		@if($cart->product_id == $product->id)
		<tr>
			<td><img src="/uploads/sellerPhotos/products/{{$cart->product->pimage}}" alt="{{$cart->product->pimage}}" width="100" height="80"></td>
			<td>{{$product->pname}}</td>
			<td>{{$cart->quantity}}</td>
			<td>{{$product->seller->firstname}} {{$product->seller->lastname}}</td>
			<td>{{$product->seller->phone_no}}</td>
		</tr>
		@endif
		@endforeach
		@endforeach
		@else
		<tr>
			<td colspan="4" class="text-center">No Records Found...</td>
		</tr>
		@endif
		</tr>
	</tbody>
	</div>
	</section>

	<!-- <section id="enquiry">
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
</section> -->

	<script>
		$(document).ready(function() {
			/*****Fixed Menu******/
			var secondaryNav = $('.cd-secondary-nav'),
				secondaryNavTopPosition = secondaryNav.offset().top;
			$(window).on('scroll', function() {
				if ($(window).scrollTop() > secondaryNavTopPosition) {
					secondaryNav.addClass('is-fixed');
				} else {
					secondaryNav.removeClass('is-fixed');
				}
			});

		});
	</script>

	@endsection