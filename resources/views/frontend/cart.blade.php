@extends('frontend.master')
@section('title','Cart')
@section('content')
<section id="center" class="center_shop clearfix">
	<div class="container">
		<div class="row">
			<div class="center_shop_1 clearfix">
				<div class="col-sm-12">
					<h5 class="mgt">
						<a href="#">Home <i class="fa fa-long-arrow-right"></i> </a>
						<a href="#">Cart</a>
					</h5>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="cart" class="clearfix">
	<div class="container">
		<div class="row">
			<div class="cart_1 clearfix">
				<div class="col-sm-2">
					<div class="cart_1i clearfix">
						<h4 class="mgt col">PRODUCT</h4>
					</div>
				</div>
				<div class="col-sm-2">
					<div class="cart_1i clearfix">
						<h4 class="mgt col">NAME</h4>
					</div>
				</div>
				<div class="col-sm-2">
					<div class="cart_1i clearfix">
						<h4 class="mgt col">UNIT PRICE</h4>
					</div>
				</div>
				<div class="col-sm-2">
					<div class="cart_1i clearfix">
						<h4 class="mgt col">QUANTITY</h4>
					</div>
				</div>
				<div class="col-sm-2">
					<div class="cart_1i clearfix">
						<h4 class="mgt col">TOTAL</h4>
					</div>
				</div>
				<div class="col-sm-2">
					<div class="cart_1i clearfix">
						<h4 class="mgt col"><i class="fa fa-trash"></i></h4>
					</div>
				</div>
			</div>


			@if(count($carts)>0)
			@foreach($carts as $cart)


			<div class="cart_2 clearfix">

				<div class="col-sm-2">
					<div class="cart_2i clearfix">
						<img src="/uploads/sellerPhotos/products/{{$cart->product->pimage}}" class="iw" alt="abc" width="600" height="200">
					</div>
				</div>
				<div class="col-sm-2">
					<div class="cart_2i clearfix">
						<h4 class="mgt"><a href="#">{{$cart->product->pname}}</a></h4>
						<p class="mgt">Rs {{$cart->product->pprice}} per piece</p>
					</div>
				</div>
				<form action="{{route('frontend.cart.edit',$cart->id)}}" method="POST">
					@csrf
					<div class="col-sm-2">
						<input type="hidden" name="product_id" value="{{$cart->product_id}}">
						<input type="text" name="qty" class="form-control text-center" value="{{$cart->quantity}}">
					</div>
					<div class="col-sm-2">
						<div class="cart_2i clearfix">
							<input type="hidden" name="totals" value="{{$cart->product->pprice * $cart->quantity}}">
							<p class="mgt">Rs {{$cart->product->pprice * $cart->quantity}}</p>
						</div>
					</div>
				
				<div class="col-sm-3">
					<div class="cart_2i clearfix">
						<p class="mgt">
							<button>Update Quantity</button>
							<a href="{{route('frontend.cart.delete', $cart->id)}}" onclick="return confirm('Are You Sure?')">
								<button class="btn btn-danger"><i class="fa fa-trash"></i></button>
							</a>
						</p>
					</div>
				</div>
				</form>
			</div>

			@endforeach
			@else
			<div class="col-sm-2">
				<div class="cart_2i clearfix">
					<p class="mgt" name="">No Products Added To Cart Yet..</p>
				</div>
			</div>
			@endif

			<div class="cart_3 clearfix">
				<div class="col-sm-4 space_left">
					<div class="cart_3i clearfix">
						<!-- <h6><a class="button" href="{{route('frontend.cartInfo')}}">UPDATE</a></h6> -->
						<h6><a class="button" href="{{route('frontend.home')}}">CONTINUE SHOPPING</a></h6>
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

<script type="text/javascript">
	$(document).on('click', '.number-spinner button', function() {
		var btn = $(this),
			oldValue = btn.closest('.number-spinner').find('input').val().trim(),
			newVal = 0;

		if (btn.attr('data-dir') == 'up') {
			newVal = parseInt(oldValue) + 1;
		} else {
			if (oldValue > 1) {
				newVal = parseInt(oldValue) - 1;
			} else {
				newVal = 1;
			}
		}
		btn.closest('.number-spinner').find('input').val(newVal);
	});
</script>

<!-- <script>

	$('.changeQuantity').click(function(e) {

		e.preventDefault();

		$.ajaxSetup({
			headers:{
				'X-CSRF-TOKEN': $('meta[name="csrf-token]').attr('content')
			}
		});

		var products_id = $(this).closest('.product_data').find('.products_id').val();
		var qty = $(this).closest('.product_data').find('.qty-input').val();

		data = {
			'products_id': products_id,
			'products_qty': qty,
		}

		$.ajax({
			method: "POST",
			url: "/update/cart",
			data: data,
			success: function(response){
				alert(response);
			}
		});

	});
</script> -->

@endsection