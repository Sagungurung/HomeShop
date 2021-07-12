<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Shop</title>
	<link href="/frontend/css/bootstrap.min.css" rel="stylesheet">
	<link href="/frontend/css/global.css" rel="stylesheet">
	<link href="/frontend/css/product.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/frontend/css/font-awesome.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Amaranth&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">
	<script src="/frontend/js/jquery-2.1.1.min.js"></script>
	<script src="/frontend/js/bootstrap.min.js"></script>
</head>

<body>
	<section id="top">
		<div class="container">
			<div class="row">
				<div class="top_1 clearfix">
					<div class="col-sm-3">
						<div class="top_1l clearfix">
							<h5 class="mgt"><i class="fa fa-headphones col_1"></i> <a href="#"> +091 (123) 456-789</a></h5>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="top_1l clearfix">
							<h5 class="mgt"><i class="fa fa-envelope col_1"></i> <a href="#"> info@gmail.com</a></h5>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="top_1r text-right clearfix">
							<ul class="mgt">
								<li><i class="fa fa-map-marker col_1"></i> <a href="#"> Store location</a></li>
								<li><i class="fa fa-clock-o col_1"></i> <a href="#"> Daily deal</a></li>
								<li><i class="fa fa-user col_1"></i> <a href="#"> My account</a></li>
								<li class="border_none"><i class="fa fa-power-off col_1"></i> <a href="{{route('frontend.authenticate.login')}}"> Login</a></li>
								<li class="border_none"><i class="fa fa-power-off col_1"></i> <a href="{{route('seller.login')}}"> Perhaps A Seller??</a></li>

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="header">
		<div class="container">
			<div class="row">
				<div class="header_1 clearfix">
					<div class="col-sm-2">
						<div class="header_1l clearfix">
							<h3><a href="">Home Shop</a></h3>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="header_1m text-center clearfix">
							<select class="form-control form_1">
								<option>All Category</option>
								<option>Watch</option>
								<option>Mobile</option>
								<option>Kids</option>
								<option>Fashion</option>
							</select>
							<div class="input-group">
								<input type="text" class="form-control form_2" placeholder="Search Products Here...">
								<span class="input-group-btn">
									<button class="btn btn-primary" type="button">
										<i class="fa fa-search"></i></button>
								</span>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="header_1r clearfix">
							<ul class="nav navbar-nav mgt navbar-right">
								<li><a class="tag_m1" href="#"><i class="fa fa-heart-o"></i></a></li>
								<li><a class="tag_m1" href="#"><i class="fa fa-user"></i></a></li>
								<li class="dropdown">
									<a class="tag_m1" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-shopping-bag"></i></a>
									<ul class="dropdown-menu drop_1" role="menu">
										<li>
											<div class="drop_1i clearfix">
												<div class="col-sm-6">
													<div class="drop_1il clearfix">
														<h5 class="mgt">2 ITEMS</h5>
													</div>
												</div>
												<div class="col-sm-6">
													<div class="drop_1il text-right clearfix">
														<h5 class="mgt"><a href="#">VIEW CART</a></h5>
													</div>
												</div>
											</div>
											<div class="drop_1i1 clearfix">
												<div class="col-sm-8">
													<div class="drop_1i1l clearfix">
														<h6 class="mgt bold"><a href="#">Nulla Quis</a> <br> <span class="normal col_2">1x - $89.00</span> <br> <span><i class="fa fa-remove"></i></span></h6>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="drop_1i1r text-right clearfix"><a href="#"><img src="/frontend/img/1.jpg" class="iw" alt="abc"></a></div>
												</div>
											</div>
											<div class="drop_1i1 clearfix">
												<div class="col-sm-8">
													<div class="drop_1i1l clearfix">
														<h6 class="mgt bold"><a href="#">Eget Nulla</a> <br> <span class="normal col_2">1x - $49.00</span> <br> <span><i class="fa fa-remove"></i></span></h6>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="drop_1i1r text-right clearfix"><a href="#"><img src="/frontend/img/2.jpg" class="iw" alt="abc"></a></div>
												</div>
											</div>
											<div class="drop_1i2 clearfix">
												<div class="col-sm-6">
													<div class="drop_1il clearfix">
														<h5 class="mgt">TOTAL</h5>
													</div>
												</div>
												<div class="col-sm-6">
													<div class="drop_1il text-right clearfix">
														<h5 class="mgt">$138.00</h5>
													</div>
												</div>
											</div>
											<div class="drop_1i3 text-center clearfix">
												<div class="col-sm-12">
													<h5><a class="button" href="#">CHECKOUT</a></h5>
												</div>
											</div>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="menu" class="clearfix cd-secondary-nav">
		<nav class="navbar nav_t">
			<div class="container">
				<div class="navbar-header page-scroll">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html"> Shop On </a>
				</div>
				<!-- Brand and toggle get grouped for better mobile display -->
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a class="m_tag1" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-bars"></i> CATEGORIES</a>
							<ul class="dropdown-menu drop_2" role="menu">
								<li><a href="#">New Arrivals</a></li>
								<li><a href="#">Best Selling</a></li>
								<li><a href="#">Accessories</a></li>
								<li><a href="#">Top 100 Offer</a></li>
								<li><a href="#">Sunglass</a></li>
								<li><a href="#">Watch</a></li>
								<li><a href="#">Man’s Product</a></li>
								<li><a href="#">Ladies</a></li>
								<li><a href="#">Sunglass</a></li>
								<li><a href="#">Watch</a></li>
								<li><a href="#">Man’s Product</a></li>
							</ul>
						</li>
						<li><a class="m_tag" href="index.html">Home</a></li>
						<li class="dropdown">
							<a class="m_tag active_tab" href="#" data-toggle="dropdown" role="button" aria-expanded="false">Product<span class="caret"></span></a>
							<ul class="dropdown-menu drop_3" role="menu">
								<li><a href="product.html">Product</a></li>
								<li><a class="border_none" href="detail.html">Product Detail</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a class="m_tag" href="#" data-toggle="dropdown" role="button" aria-expanded="false">Blog<span class="caret"></span></a>
							<ul class="dropdown-menu drop_3" role="menu">
								<li><a href="blog.html">Blog</a></li>
								<li><a class="border_none" href="blog_detail.html">Blog Detail</a></li>
							</ul>
						</li>
						<li><a class="m_tag" href="contact.html">Contact</a></li>
						<li><a class="m_tag" href="cart.html">Cart</a></li>
						<li><a class="m_tag" href="checkout.html">Checkout</a></li>
					</ul>

				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>

	</section>

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

	<!-- <section id="products" class="clearfix">
		@foreach($product as $products)
		<div class="col-lg-2 col-md-2 col-sm-2">
			<a href="" class="portfolio-box">
				<img src="/uploads/sellerPhotos/products/{{$products->pimage}}" class="img-responsive" alt="{{$products->pimage}}" width="500" height="1000">
				<div class="portfolio-box-caption">
					<div class="portfolio-box-caption-content">
						<span class="glyphicon glyphicon-zoom-in" style="font-size: 10px">{{$products->pname}}</span>
					</div>
				</div>
			</a>
		</div>
		@endforeach
	</section> -->
	
	<section id="products" class="clearfix">
		@foreach($product as $products)
		<div class="home_inner clearfix">
			<div class="col-sm-4">
				<div class="workout_1_inner clearfix">
					<div class="workout_1_in1 clearfix">
						<img src="/uploads/sellerPhotos/products/{{$products->pimage}}" class="img-responsive" alt="{{$products->pimage}}" width="500" height="1000">
						<h5><a href="">{{$products->pname}}</a></h5>
						<h5>Price: {{$products->pprice}}</h5>
					</div>
					<div class="workout_1_in2 clearfix">
						<div class="col-sm-6 space_all">
							<h6 class="mgt"><a href="">ADD TO CART</a></h6>
						</div>
					</div>
				</div>
			</div>	
		</div>	
		@endforeach
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

	<section id="footer_last">
		<div class="container">
			<div class="row">
				<div class="footer_last text-center clearfix">
					<div class="col-sm-12">
						<p class="mgt">© 2013 Your Website Name. All Rights Reserved | Design by <a class="col_1" href="http://www.templateonweb.com">TemplateOnWeb</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script>
		$(document).ready(function() {
			/*****Fixed Menu******/
			var secondaryNav = $(".cd-secondary-nav"),
				secondaryNavTopPosition = secondaryNav.offset().top;
			$(window).on("scroll", function() {
				if ($(window).scrollTop() > secondaryNavTopPosition) {
					secondaryNav.addClass("is-fixed");
				} else {
					secondaryNav.removeClass("is-fixed");
				}
			});

		});
	</script>
</body>

</html>