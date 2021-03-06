@extends('frontend.master')
@section('title','Home')
@section('content')
<section id="center" class="center_shop clearfix">
	<div class="container">
		<div class="row">
			<div class="center_shop_1 clearfix">
				<div class="col-sm-12">
					<h5 class="mgt">
						<a href="#">Home <i class="fa fa-long-arrow-right"></i> </a>
						<a href="#">Product List</a>
					</h5>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="products" class="clearfix">
	<div class="row col-md-12">
		@foreach($product as $products)
		<div class="col-md-3">
			<div class="workout_1_inner clearfix">
				<div class="workout_1_in1 clearfix">
					<a href="{{route('frontend.frontProduct.productDetail', $products->id)}}">
						<img src="/uploads/sellerPhotos/products/{{$products->pimage}}" class="img-responsive" alt="{{$products->pimage}}" width="500" height="1000">
						<h5>{{$products->pname}}</h5>
						<h5>Price: Rs {{$products->pprice}}</h5>
					</a>
				</div>
				<div class="workout_1_in2 clearfix">
					<div class="col-sm-6 space_all">
						<form action="{{route('frontend.createCart')}}" method="POST">
							@csrf
							<input type="hidden" name="product_id" value="{{$products->id}}">
							<h6 class="mgt"><button style="border:none;	background:none;">ADD TO CART<button</h6>
										<!-- <h6 class="mgt"><a href="{{route('frontend.createCart')}}">ADD TO CART</a></h6> -->
						</form>
					</div>
					<!-- <div class="col-sm-6 space_all">
						<ul class="mgt pull-right">
							<li><a href="#"><i class="fa fa-heart-o"></i></a></li>
						</ul>
					</div> -->
				</div>
			</div>
		</div>
		@endforeach
	</div>
</section>



<section id="footer">
	<div class="container">
		<div class="row">
			<div class="footer_1 clearfix">
				<div class="col-sm-3">
					<div class="footer_1i clearfix">
						<h3 class="mgt"><a href="#">Shop On</a></h3>
						<p> Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
						<p>Got Question? Call us 24/7</p>
						<h4 class="mgt"><a class="col_1" href="#">+0123 456 789</a></h4>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="footer_1i1 clearfix">
						<h4 class="mgt">Useful links</h4>
						<ul class="normal">
							<li><a href="#">How it works</a></li>
							<li><a href="#">About us</a></li>
							<li><a href="#">Babysitters</a></li>
							<li><a href="#">Contact us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="footer_1i1 clearfix">
						<h4 class="mgt">My Account</h4>
						<ul class="normal">
							<li><a href="#">Track my order</a></li>
							<li><a href="#">Terms of use</a></li>
							<li><a href="#">Wishlist</a></li>
							<li><a href="#">Submit Your feedback</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="footer_1i2 clearfix">
						<h4 class="mgt">Get In Tuch</h4>
						<p>NO. 172 - Kingdom Oxford Street.<br>000 United Kingdom.<br>info@gmail.com<br>+012 3456 7890</p>
						<ul class="social-network social-circle">
							<li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
							<li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection