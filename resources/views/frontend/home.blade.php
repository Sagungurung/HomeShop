<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Shop</title>
	<link href="/frontend/css/bootstrap.min.css" rel="stylesheet">
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
<section id="top">
 <div class="container">
  <div class="row">
   <div class="top_1 clearfix">
	<div class="col-sm-6">
	 <div class="top_1r text-right clearfix">
	  <ul class="mgt">
	   <li><i class="fa fa-user col_1"></i> <a href="#"> My account</a></li>
	   <li class="border_none"><i class="fa fa-power-off col_1"></i> <a href="{{route('frontend.authenticate.login')}}">Customer Login</a></li>
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
	  <h3><a href="{{route('frontend.home')}}">Home Shop</a></h3>
	 </div>
	</div>
	<div class="col-sm-7">
	 <div class="header_1m text-center clearfix">
	 <select class="form-control form_1">
				 <option>All Category</option>
				 <option>Mufflers</option>
				 <option>Chocolates</option>
				 <option>Perfume</option>
				 <option>Sweaters</option>
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
						   <div class="drop_1il clearfix"><h5 class="mgt">2 ITEMS</h5></div>
						  </div>
						  <div class="col-sm-6">
						   <div class="drop_1il text-right clearfix"><h5 class="mgt"><a href="#">VIEW CART</a></h5></div>
						  </div>
						 </div>
						 <div class="drop_1i1 clearfix">
						  <div class="col-sm-8">
						   <div class="drop_1i1l clearfix"><h6 class="mgt bold"><a href="#">Nulla Quis</a> <br> <span class="normal col_2">1x - $89.00</span> <br> <span><i class="fa fa-remove"></i></span></h6></div>
						  </div>
						  <div class="col-sm-4">
						   <div class="drop_1i1r text-right clearfix"><a href="#"><img src="frontend/img/1.jpg" class="iw" alt="abc"></a></div>
						  </div>
						 </div>
						 <div class="drop_1i1 clearfix">
						  <div class="col-sm-8">
						   <div class="drop_1i1l clearfix"><h6 class="mgt bold"><a href="#">Eget Nulla</a> <br> <span class="normal col_2">1x - $49.00</span> <br> <span><i class="fa fa-remove"></i></span></h6></div>
						  </div>
						  <div class="col-sm-4">
						   <div class="drop_1i1r text-right clearfix"><a href="#"><img src="frontend/img/2.jpg" class="iw" alt="abc"></a></div>
						  </div>
						 </div>
						 <div class="drop_1i2 clearfix">
						  <div class="col-sm-6">
						   <div class="drop_1il clearfix"><h5 class="mgt">TOTAL</h5></div>
						  </div>
						  <div class="col-sm-6">
						   <div class="drop_1il text-right clearfix"><h5 class="mgt">$138.00</h5></div>
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
				<a class="navbar-brand" href="{{route('frontend.home')}}"> Home Shop </a>
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
				<li><a class="m_tag active_tab" href="{{route('frontend.home')}}">Home</a></li>
				<li class="dropdown">
					  <a class="m_tag" href="" data-toggle="dropdown" role="button" aria-expanded="false">Product<span class="caret"></span></a>
					  <ul class="dropdown-menu drop_3" role="menu">
						<li><a href="{{route('frontend.frontProduct.showProduct')}}">Product</a></li>
						<li><a class="border_none" href="{{route('frontend.frontProduct.productDetail')}}">Product Detail</a></li>
					  </ul>
                    </li>
				<li class="dropdown">
					  <a class="m_tag" href="#" data-toggle="dropdown" role="button" aria-expanded="false">Blog<span class="caret"></span></a>
					  <ul class="dropdown-menu drop_3" role="menu">
						<li><a href="{{route('frontend.frontBlog.showBlog')}}">Blog</a></li>
						<li><a class="border_none" href="{{route('frontend.frontBlog.blogDetail')}}">Blog Detail</a></li>
					  </ul>
                    </li>
				<!-- <li><a class="m_tag" href="contact.html">Contact</a></li> -->
				<li><a class="m_tag" href="{{route('frontend.cart')}}">Cart</a></li>
				<li><a class="m_tag" href="{{route('frontend.checkout')}}">Checkout</a></li>
			</ul>
		    	
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	
	</section>
	
<section id="center" class="center_home clearfix">
 <div class="container">
  <div class="row">
   <div class="center_home clearfix">
    <div class="col-sm-4">
	 <div class="center_homer clearfix">
	  <img src="/uploads/sellerphotos/products/phpE78A.tmp1625402256.jpg" class="iw" alt="abc">
	 </div>
	</div>
	<div class="col-sm-4">
	 <div class="center_homem clearfix">
	  <h4 class="mgt">UP TO 50% OFF</h4>
	  <h1 class="col_1">Nulla Quis Libero</h1>
	  <p>Maboriosam in a nesciung eget magnae dapibus disting tloctio in the find it pereriodiy maboriosm.</p>
      <h5><a class="button" href="{{route('frontend.authenticate.login')}}">SHOP NOW!</a></h5>
	 </div>
	</div>
	<div class="col-sm-4">
	 <div class="center_homer clearfix">
	  <img src="/uploads/sellerphotos/products/phpBB52.tmp1625407684.jpg" class="iw" alt="abc">
	 </div>
	</div>
   </div>
  </div>
 </div>
</section>

<section id="collection">
 <div class="container">
  <div class="row">
   <div class="collect_1 clearfix">
    <div class="col-sm-4">
	 <div class="collect_1l clearfix">
	  <div class="col-sm-6 space_all">
	   <div class="collect_1ll clearfix">
	    <h5 class="mgt col_1">Knitting</h5>
		<h4>Winter Handmade Collection</h4>
		<h5><a href="#"> DISCOVER NOW</a></h5>
	   </div>
	  </div>
	  <div class="col-sm-6 space_all">
	   <div class="collect_1lr clearfix">
	    <img src="uploads/blogs/winter-fashion1625497364.jpg" alt="abc" class="iw">
	   </div>
	  </div>
	 </div>
	</div>
	<div class="col-sm-4">
	 <div class="collect_1l clearfix">
	  <div class="col-sm-6 space_all">
	   <div class="collect_1ll clearfix">
	    <h5 class="mgt col_1">Shoes Collectons</h5>
		<h4>Awesome Best 2020</h4>
		<h5><a href="#"> DISCOVER NOW</a></h5>
	   </div>
	  </div>
	  <div class="col-sm-6 space_all">
	   <div class="collect_1lr clearfix">
	    <img src="frontend/img/5.jpg" alt="abc" class="iw">
	   </div>
	  </div>
	 </div>
	</div>
	<div class="col-sm-4">
	 <div class="collect_1l clearfix">
	  <div class="col-sm-6 space_all">
	   <div class="collect_1ll clearfix">
	    <h5 class="mgt col_1">Handmade Soap</h5>
		<h4>Mid Season Up To 40% Off</h4>
		<h5><a href="#"> DISCOVER NOW</a></h5>
	   </div>
	  </div>
	  <div class="col-sm-6 space_all">
	   <div class="collect_1lr clearfix">
	    <img src="uploads\blogs\perfumed-soap-blog1625839840.jpg" alt="abc" class="iw">
	   </div>
	  </div>
	 </div>
	</div>
   </div>
  </div>
 </div>
</section>

<section id="product_list">
 <div class="container">
  <div class="row">
   <div class="product_list text-center clearfix">
     <div class="col-sm-12">
	  <h3 class="mgt">Trending Item</h3>
	  <hr>
	 </div> 
   </div>
   <div class="gallery_1 clearfix">
    <div class="col-sm-12">
      <div class="workout_page_1_left clearfix">

	    <ul class="nav nav-tabs">
			  <li class="active"><a data-toggle="tab" href="#home">Homemade Sweaters</a></li>
			  <li class=""><a data-toggle="tab" href="#menu1">Chocolates</a></li>
			  <li><a data-toggle="tab" href="#menu2">Cookies</a></li>
			  <li class=""><a data-toggle="tab" href="#menu3">Soaps </a></li>
			  <li class=""><a data-toggle="tab" href="#menu4">Perfumes</a></li>
			  <li class=""><a data-toggle="tab" href="#menu5">Handmade Gloves</a></li>
          </ul>

	    <div class="tab-content clearfix">
			  <div id="home" class="tab-pane fade  clearfix active in">
				 <div class="click clearfix">
					<div class="home_inner clearfix">
					       <div class="col-sm-3">
							 <div class="workout_1_inner clearfix">
							   <div class="workout_1_in1 clearfix">
							    <a href="#"><img src="frontend/img/7.jpg" class="iw" alt="abc"></a>
								<h5><a href="#">Semper Porta</a></h5>
								<h5>$39.00</h5>
							   </div> 
							   <div class="workout_1_in2 clearfix">
							     <div class="col-sm-6 space_all">
								  <h6 class="mgt"><a href="#">ADD TO CART</a></h6>
								 </div>
								 <div class="col-sm-6 space_all">
								  <ul class="mgt pull-right">
								   <li><a href="#"><i class="fa fa-eye"></i></a></li>
								   <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
								   <li><a href="#"><i class="fa fa-bar-chart-o"></i></a></li>
								  </ul>
								 </div>
							   </div>
							   <div class="workout_1_in3 clearfix">
							    <h6 class="mgt bg">NEW</h6>
							   </div>
							 </div>
						   </div>
						   <div class="col-sm-3">
							 <div class="workout_1_inner clearfix">
							   <div class="workout_1_in1 clearfix">
							    <a href="#"><img src="frontend/img/8.jpg" class="iw" alt="abc"></a>
								<h5><a href="#">Eget Nulla</a></h5>
								<h5>$39.00</h5>
							   </div> 
							   <div class="workout_1_in2 clearfix">
							     <div class="col-sm-6 space_all">
								  <h6 class="mgt"><a href="#">ADD TO CART</a></h6>
								 </div>
								 <div class="col-sm-6 space_all">
								  <ul class="mgt pull-right">
								   <li><a href="#"><i class="fa fa-eye"></i></a></li>
								   <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
								   <li><a href="#"><i class="fa fa-bar-chart-o"></i></a></li>
								  </ul>
								 </div>
							   </div>
							   <div class="workout_1_in3 clearfix">
							    <h6 class="mgt bg1">HOT</h6>
							   </div>
							 </div>
						   </div>
						   <div class="col-sm-3">
							 <div class="workout_1_inner clearfix">
							   <div class="workout_1_in1 clearfix">
							    <a href="#"><img src="frontend/img/9.jpg" class="iw" alt="abc"></a>
								<h5><a href="#">Lacinia Nunc</a></h5>
								<h5>$39.00</h5>
							   </div> 
							   <div class="workout_1_in2 clearfix">
							     <div class="col-sm-6 space_all">
								  <h6 class="mgt"><a href="#">ADD TO CART</a></h6>
								 </div>
								 <div class="col-sm-6 space_all">
								  <ul class="mgt pull-right">
								   <li><a href="#"><i class="fa fa-eye"></i></a></li>
								   <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
								   <li><a href="#"><i class="fa fa-bar-chart-o"></i></a></li>
								  </ul>
								 </div>
							   </div>
							   <div class="workout_1_in3 clearfix">
							    <h6 class="mgt bg2">5% OFF</h6>
							   </div>
							 </div>
						   </div>
						   <div class="col-sm-3">
							 <div class="workout_1_inner clearfix">
							   <div class="workout_1_in1 clearfix">
							    <a href="#"><img src="frontend/img/10.jpg" class="iw" alt="abc"></a>
								<h5><a href="#">Nulla Quis</a></h5>
								<h5>$39.00</h5>
							   </div> 
							   <div class="workout_1_in2 clearfix">
							     <div class="col-sm-6 space_all">
								  <h6 class="mgt"><a href="#">ADD TO CART</a></h6>
								 </div>
								 <div class="col-sm-6 space_all">
								  <ul class="mgt pull-right">
								   <li><a href="#"><i class="fa fa-eye"></i></a></li>
								   <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
								   <li><a href="#"><i class="fa fa-bar-chart-o"></i></a></li>
								  </ul>
								 </div>
							   </div>
							   <div class="workout_1_in3 clearfix">
							    <h6 class="mgt bg">NEW</h6>
							   </div>
							 </div>
						   </div>
					</div>
					<div class="home_inner clearfix">
					       <div class="col-sm-3">
							 <div class="workout_1_inner clearfix">
							   <div class="workout_1_in1 clearfix">
							    <a href="#"><img src="frontend/img/11.jpg" class="iw" alt="abc"></a>
								<h5><a href="#">Semper Porta</a></h5>
								<h5>$39.00</h5>
							   </div> 
							   <div class="workout_1_in2 clearfix">
							     <div class="col-sm-6 space_all">
								  <h6 class="mgt"><a href="#">ADD TO CART</a></h6>
								 </div>
								 <div class="col-sm-6 space_all">
								  <ul class="mgt pull-right">
								   <li><a href="#"><i class="fa fa-eye"></i></a></li>
								   <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
								   <li><a href="#"><i class="fa fa-bar-chart-o"></i></a></li>
								  </ul>
								 </div>
							   </div>
							   <div class="workout_1_in3 clearfix">
							    <h6 class="mgt bg">NEW</h6>
							   </div>
							 </div>
						   </div>
						   <div class="col-sm-3">
							 <div class="workout_1_inner clearfix">
							   <div class="workout_1_in1 clearfix">
							    <a href="#"><img src="frontend/img/12.jpg" class="iw" alt="abc"></a>
								<h5><a href="#">Eget Nulla</a></h5>
								<h5>$39.00</h5>
							   </div> 
							   <div class="workout_1_in2 clearfix">
							     <div class="col-sm-6 space_all">
								  <h6 class="mgt"><a href="#">ADD TO CART</a></h6>
								 </div>
								 <div class="col-sm-6 space_all">
								  <ul class="mgt pull-right">
								   <li><a href="#"><i class="fa fa-eye"></i></a></li>
								   <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
								   <li><a href="#"><i class="fa fa-bar-chart-o"></i></a></li>
								  </ul>
								 </div>
							   </div>
							   <div class="workout_1_in3 clearfix">
							    <h6 class="mgt bg1">HOT</h6>
							   </div>
							 </div>
						   </div>
						   <div class="col-sm-3">
							 <div class="workout_1_inner clearfix">
							   <div class="workout_1_in1 clearfix">
							    <a href="#"><img src="frontend/img/13.jpg" class="iw" alt="abc"></a>
								<h5><a href="#">Lacinia Nunc</a></h5>
								<h5>$39.00</h5>
							   </div> 
							   <div class="workout_1_in2 clearfix">
							     <div class="col-sm-6 space_all">
								  <h6 class="mgt"><a href="#">ADD TO CART</a></h6>
								 </div>
								 <div class="col-sm-6 space_all">
								  <ul class="mgt pull-right">
								   <li><a href="#"><i class="fa fa-eye"></i></a></li>
								   <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
								   <li><a href="#"><i class="fa fa-bar-chart-o"></i></a></li>
								  </ul>
								 </div>
							   </div>
							   <div class="workout_1_in3 clearfix">
							    <h6 class="mgt bg2">5% OFF</h6>
							   </div>
							 </div>
						   </div>
						   <div class="col-sm-3">
							 <div class="workout_1_inner clearfix">
							   <div class="workout_1_in1 clearfix">
							    <a href="#"><img src="frontend/img/14.jpg" class="iw" alt="abc"></a>
								<h5><a href="#">Nulla Quis</a></h5>
								<h5>$39.00</h5>
							   </div> 
							   <div class="workout_1_in2 clearfix">
							     <div class="col-sm-6 space_all">
								  <h6 class="mgt"><a href="#">ADD TO CART</a></h6>
								 </div>
								 <div class="col-sm-6 space_all">
								  <ul class="mgt pull-right">
								   <li><a href="#"><i class="fa fa-eye"></i></a></li>
								   <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
								   <li><a href="#"><i class="fa fa-bar-chart-o"></i></a></li>
								  </ul>
								 </div>
							   </div>
							   <div class="workout_1_in3 clearfix">
							    <h6 class="mgt bg">NEW</h6>
							   </div>
							 </div>
						   </div>
					</div>
			   </div>
			  </div>
			  <div id="menu1" class="tab-pane fade   clearfix">
				 <div class="click clearfix">
				    <div class="home_inner clearfix">
					       <div class="col-sm-3">
							 <div class="workout_1_inner clearfix">
							   <div class="workout_1_in1 clearfix">
							    <a href="#"><img src="frontend/img/11.jpg" class="iw" alt="abc"></a>
								<h5><a href="#">Semper Porta</a></h5>
								<h5>$39.00</h5>
							   </div> 
							   <div class="workout_1_in2 clearfix">
							     <div class="col-sm-6 space_all">
								  <h6 class="mgt"><a href="#">ADD TO CART</a></h6>
								 </div>
								 <div class="col-sm-6 space_all">
								  <ul class="mgt pull-right">
								   <li><a href="#"><i class="fa fa-eye"></i></a></li>
								   <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
								   <li><a href="#"><i class="fa fa-bar-chart-o"></i></a></li>
								  </ul>
								 </div>
							   </div>
							   <div class="workout_1_in3 clearfix">
							    <h6 class="mgt bg">NEW</h6>
							   </div>
							 </div>
						   </div>
						   <div class="col-sm-3">
							 <div class="workout_1_inner clearfix">
							   <div class="workout_1_in1 clearfix">
							    <a href="#"><img src="frontend/img/12.jpg" class="iw" alt="abc"></a>
								<h5><a href="#">Eget Nulla</a></h5>
								<h5>$39.00</h5>
							   </div> 
							   <div class="workout_1_in2 clearfix">
							     <div class="col-sm-6 space_all">
								  <h6 class="mgt"><a href="#">ADD TO CART</a></h6>
								 </div>
								 <div class="col-sm-6 space_all">
								  <ul class="mgt pull-right">
								   <li><a href="#"><i class="fa fa-eye"></i></a></li>
								   <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
								   <li><a href="#"><i class="fa fa-bar-chart-o"></i></a></li>
								  </ul>
								 </div>
							   </div>
							   <div class="workout_1_in3 clearfix">
							    <h6 class="mgt bg1">HOT</h6>
							   </div>
							 </div>
						   </div>
						   <div class="col-sm-3">
							 <div class="workout_1_inner clearfix">
							   <div class="workout_1_in1 clearfix">
							    <a href="#"><img src="frontend/img/13.jpg" class="iw" alt="abc"></a>
								<h5><a href="#">Lacinia Nunc</a></h5>
								<h5>$39.00</h5>
							   </div> 
							   <div class="workout_1_in2 clearfix">
							     <div class="col-sm-6 space_all">
								  <h6 class="mgt"><a href="#">ADD TO CART</a></h6>
								 </div>
								 <div class="col-sm-6 space_all">
								  <ul class="mgt pull-right">
								   <li><a href="#"><i class="fa fa-eye"></i></a></li>
								   <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
								   <li><a href="#"><i class="fa fa-bar-chart-o"></i></a></li>
								  </ul>
								 </div>
							   </div>
							   <div class="workout_1_in3 clearfix">
							    <h6 class="mgt bg2">5% OFF</h6>
							   </div>
							 </div>
						   </div>
						   <div class="col-sm-3">
							 <div class="workout_1_inner clearfix">
							   <div class="workout_1_in1 clearfix">
							    <a href="#"><img src="frontend/img/14.jpg" class="iw" alt="abc"></a>
								<h5><a href="#">Nulla Quis</a></h5>
								<h5>$39.00</h5>
							   </div> 
							   <div class="workout_1_in2 clearfix">
							     <div class="col-sm-6 space_all">
								  <h6 class="mgt"><a href="#">ADD TO CART</a></h6>
								 </div>
								 <div class="col-sm-6 space_all">
								  <ul class="mgt pull-right">
								   <li><a href="#"><i class="fa fa-eye"></i></a></li>
								   <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
								   <li><a href="#"><i class="fa fa-bar-chart-o"></i></a></li>
								  </ul>
								 </div>
							   </div>
							   <div class="workout_1_in3 clearfix">
							    <h6 class="mgt bg">NEW</h6>
							   </div>
							 </div>
						   </div>
					</div>
					<div class="home_inner clearfix">
					       <div class="col-sm-3">
							 <div class="workout_1_inner clearfix">
							   <div class="workout_1_in1 clearfix">
							    <a href="#"><img src="frontend/img/7.jpg" class="iw" alt="abc"></a>
								<h5><a href="#">Semper Porta</a></h5>
								<h5>$39.00</h5>
							   </div> 
							   <div class="workout_1_in2 clearfix">
							     <div class="col-sm-6 space_all">
								  <h6 class="mgt"><a href="#">ADD TO CART</a></h6>
								 </div>
								 <div class="col-sm-6 space_all">
								  <ul class="mgt pull-right">
								   <li><a href="#"><i class="fa fa-eye"></i></a></li>
								   <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
								   <li><a href="#"><i class="fa fa-bar-chart-o"></i></a></li>
								  </ul>
								 </div>
							   </div>
							   <div class="workout_1_in3 clearfix">
							    <h6 class="mgt bg">NEW</h6>
							   </div>
							 </div>
						   </div>
						   <div class="col-sm-3">
							 <div class="workout_1_inner clearfix">
							   <div class="workout_1_in1 clearfix">
							    <a href="#"><img src="frontend/img/8.jpg" class="iw" alt="abc"></a>
								<h5><a href="#">Eget Nulla</a></h5>
								<h5>$39.00</h5>
							   </div> 
							   <div class="workout_1_in2 clearfix">
							     <div class="col-sm-6 space_all">
								  <h6 class="mgt"><a href="#">ADD TO CART</a></h6>
								 </div>
								 <div class="col-sm-6 space_all">
								  <ul class="mgt pull-right">
								   <li><a href="#"><i class="fa fa-eye"></i></a></li>
								   <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
								   <li><a href="#"><i class="fa fa-bar-chart-o"></i></a></li>
								  </ul>
								 </div>
							   </div>
							   <div class="workout_1_in3 clearfix">
							    <h6 class="mgt bg1">HOT</h6>
							   </div>
							 </div>
						   </div>
						   <div class="col-sm-3">
							 <div class="workout_1_inner clearfix">
							   <div class="workout_1_in1 clearfix">
							    <a href="#"><img src="frontend/img/9.jpg" class="iw" alt="abc"></a>
								<h5><a href="#">Lacinia Nunc</a></h5>
								<h5>$39.00</h5>
							   </div> 
							   <div class="workout_1_in2 clearfix">
							     <div class="col-sm-6 space_all">
								  <h6 class="mgt"><a href="#">ADD TO CART</a></h6>
								 </div>
								 <div class="col-sm-6 space_all">
								  <ul class="mgt pull-right">
								   <li><a href="#"><i class="fa fa-eye"></i></a></li>
								   <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
								   <li><a href="#"><i class="fa fa-bar-chart-o"></i></a></li>
								  </ul>
								 </div>
							   </div>
							   <div class="workout_1_in3 clearfix">
							    <h6 class="mgt bg2">5% OFF</h6>
							   </div>
							 </div>
						   </div>
						   <div class="col-sm-3">
							 <div class="workout_1_inner clearfix">
							   <div class="workout_1_in1 clearfix">
							    <a href="#"><img src="frontend/img/10.jpg" class="iw" alt="abc"></a>
								<h5><a href="#">Nulla Quis</a></h5>
								<h5>$39.00</h5>
							   </div> 
							   <div class="workout_1_in2 clearfix">
							     <div class="col-sm-6 space_all">
								  <h6 class="mgt"><a href="#">ADD TO CART</a></h6>
								 </div>
								 <div class="col-sm-6 space_all">
								  <ul class="mgt pull-right">
								   <li><a href="#"><i class="fa fa-eye"></i></a></li>
								   <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
								   <li><a href="#"><i class="fa fa-bar-chart-o"></i></a></li>
								  </ul>
								 </div>
							   </div>
							   <div class="workout_1_in3 clearfix">
							    <h6 class="mgt bg">NEW</h6>
							   </div>
							 </div>
						   </div>
					</div>
			   </div>
			  </div>
			  <div id="menu2" class="tab-pane fade  clearfix ">
				 <div class="click clearfix">
					<div class="home_inner clearfix">
					       <div class="col-sm-3">
							 <div class="workout_1_inner clearfix">
							   <div class="workout_1_in1 clearfix">
							    <a href="#"><img src="frontend/img/7.jpg" class="iw" alt="abc"></a>
								<h5><a href="#">Semper Porta</a></h5>
								<h5>$39.00</h5>
							   </div> 
							   <div class="workout_1_in2 clearfix">
							     <div class="col-sm-6 space_all">
								  <h6 class="mgt"><a href="#">ADD TO CART</a></h6>
								 </div>
								 <div class="col-sm-6 space_all">
								  <ul class="mgt pull-right">
								   <li><a href="#"><i class="fa fa-eye"></i></a></li>
								   <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
								   <li><a href="#"><i class="fa fa-bar-chart-o"></i></a></li>
								  </ul>
								 </div>
							   </div>
							   <div class="workout_1_in3 clearfix">
							    <h6 class="mgt bg">NEW</h6>
							   </div>
							 </div>
						   </div>
						   <div class="col-sm-3">
							 <div class="workout_1_inner clearfix">
							   <div class="workout_1_in1 clearfix">
							    <a href="#"><img src="frontend/img/8.jpg" class="iw" alt="abc"></a>
								<h5><a href="#">Eget Nulla</a></h5>
								<h5>$39.00</h5>
							   </div> 
							   <div class="workout_1_in2 clearfix">
							     <div class="col-sm-6 space_all">
								  <h6 class="mgt"><a href="#">ADD TO CART</a></h6>
								 </div>
								 <div class="col-sm-6 space_all">
								  <ul class="mgt pull-right">
								   <li><a href="#"><i class="fa fa-eye"></i></a></li>
								   <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
								   <li><a href="#"><i class="fa fa-bar-chart-o"></i></a></li>
								  </ul>
								 </div>
							   </div>
							   <div class="workout_1_in3 clearfix">
							    <h6 class="mgt bg1">HOT</h6>
							   </div>
							 </div>
						   </div>
						   <div class="col-sm-3">
							 <div class="workout_1_inner clearfix">
							   <div class="workout_1_in1 clearfix">
							    <a href="#"><img src="frontend/img/9.jpg" class="iw" alt="abc"></a>
								<h5><a href="#">Lacinia Nunc</a></h5>
								<h5>$39.00</h5>
							   </div> 
							   <div class="workout_1_in2 clearfix">
							     <div class="col-sm-6 space_all">
								  <h6 class="mgt"><a href="#">ADD TO CART</a></h6>
								 </div>
								 <div class="col-sm-6 space_all">
								  <ul class="mgt pull-right">
								   <li><a href="#"><i class="fa fa-eye"></i></a></li>
								   <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
								   <li><a href="#"><i class="fa fa-bar-chart-o"></i></a></li>
								  </ul>
								 </div>
							   </div>
							   <div class="workout_1_in3 clearfix">
							    <h6 class="mgt bg2">5% OFF</h6>
							   </div>
							 </div>
						   </div>
						   <div class="col-sm-3">
							 <div class="workout_1_inner clearfix">
							   <div class="workout_1_in1 clearfix">
							    <a href="#"><img src="frontend/img/10.jpg" class="iw" alt="abc"></a>
								<h5><a href="#">Nulla Quis</a></h5>
								<h5>$39.00</h5>
							   </div> 
							   <div class="workout_1_in2 clearfix">
							     <div class="col-sm-6 space_all">
								  <h6 class="mgt"><a href="#">ADD TO CART</a></h6>
								 </div>
								 <div class="col-sm-6 space_all">
								  <ul class="mgt pull-right">
								   <li><a href="#"><i class="fa fa-eye"></i></a></li>
								   <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
								   <li><a href="#"><i class="fa fa-bar-chart-o"></i></a></li>
								  </ul>
								 </div>
							   </div>
							   <div class="workout_1_in3 clearfix">
							    <h6 class="mgt bg">NEW</h6>
							   </div>
							 </div>
						   </div>
					</div>
					<div class="home_inner clearfix">
					       <div class="col-sm-3">
							 <div class="workout_1_inner clearfix">
							   <div class="workout_1_in1 clearfix">
							    <a href="#"><img src="frontend/img/11.jpg" class="iw" alt="abc"></a>
								<h5><a href="#">Semper Porta</a></h5>
								<h5>$39.00</h5>
							   </div> 
							   <div class="workout_1_in2 clearfix">
							     <div class="col-sm-6 space_all">
								  <h6 class="mgt"><a href="#">ADD TO CART</a></h6>
								 </div>
								 <div class="col-sm-6 space_all">
								  <ul class="mgt pull-right">
								   <li><a href="#"><i class="fa fa-eye"></i></a></li>
								   <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
								   <li><a href="#"><i class="fa fa-bar-chart-o"></i></a></li>
								  </ul>
								 </div>
							   </div>
							   <div class="workout_1_in3 clearfix">
							    <h6 class="mgt bg">NEW</h6>
							   </div>
							 </div>
						   </div>
						   <div class="col-sm-3">
							 <div class="workout_1_inner clearfix">
							   <div class="workout_1_in1 clearfix">
							    <a href="#"><img src="frontend/img/12.jpg" class="iw" alt="abc"></a>
								<h5><a href="#">Eget Nulla</a></h5>
								<h5>$39.00</h5>
							   </div> 
							   <div class="workout_1_in2 clearfix">
							     <div class="col-sm-6 space_all">
								  <h6 class="mgt"><a href="#">ADD TO CART</a></h6>
								 </div>
								 <div class="col-sm-6 space_all">
								  <ul class="mgt pull-right">
								   <li><a href="#"><i class="fa fa-eye"></i></a></li>
								   <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
								   <li><a href="#"><i class="fa fa-bar-chart-o"></i></a></li>
								  </ul>
								 </div>
							   </div>
							   <div class="workout_1_in3 clearfix">
							    <h6 class="mgt bg1">HOT</h6>
							   </div>
							 </div>
						   </div>
						   <div class="col-sm-3">
							 <div class="workout_1_inner clearfix">
							   <div class="workout_1_in1 clearfix">
							    <a href="#"><img src="frontend/img/13.jpg" class="iw" alt="abc"></a>
								<h5><a href="#">Lacinia Nunc</a></h5>
								<h5>$39.00</h5>
							   </div> 
							   <div class="workout_1_in2 clearfix">
							     <div class="col-sm-6 space_all">
								  <h6 class="mgt"><a href="#">ADD TO CART</a></h6>
								 </div>
								 <div class="col-sm-6 space_all">
								  <ul class="mgt pull-right">
								   <li><a href="#"><i class="fa fa-eye"></i></a></li>
								   <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
								   <li><a href="#"><i class="fa fa-bar-chart-o"></i></a></li>
								  </ul>
								 </div>
							   </div>
							   <div class="workout_1_in3 clearfix">
							    <h6 class="mgt bg2">5% OFF</h6>
							   </div>
							 </div>
						   </div>
						   <div class="col-sm-3">
							 <div class="workout_1_inner clearfix">
							   <div class="workout_1_in1 clearfix">
							    <a href="#"><img src="frontend/img/14.jpg" class="iw" alt="abc"></a>
								<h5><a href="#">Nulla Quis</a></h5>
								<h5>$39.00</h5>
							   </div> 
							   <div class="workout_1_in2 clearfix">
							     <div class="col-sm-6 space_all">
								  <h6 class="mgt"><a href="#">ADD TO CART</a></h6>
								 </div>
								 <div class="col-sm-6 space_all">
								  <ul class="mgt pull-right">
								   <li><a href="#"><i class="fa fa-eye"></i></a></li>
								   <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
								   <li><a href="#"><i class="fa fa-bar-chart-o"></i></a></li>
								  </ul>
								 </div>
							   </div>
							   <div class="workout_1_in3 clearfix">
							    <h6 class="mgt bg">NEW</h6>
							   </div>
							 </div>
						   </div>
					</div>
			   </div>
			  </div>
			  <div id="menu3" class="tab-pane fade  clearfix ">
				 <div class="click clearfix">
					<div class="home_inner clearfix">
					       <div class="col-sm-3">
							 <div class="workout_1_inner clearfix">
							   <div class="workout_1_in1 clearfix">
							    <a href="#"><img src="frontend/img/11.jpg" class="iw" alt="abc"></a>
								<h5><a href="#">Semper Porta</a></h5>
								<h5>$39.00</h5>
							   </div> 
							   <div class="workout_1_in2 clearfix">
							     <div class="col-sm-6 space_all">
								  <h6 class="mgt"><a href="#">ADD TO CART</a></h6>
								 </div>
								 <div class="col-sm-6 space_all">
								  <ul class="mgt pull-right">
								   <li><a href="#"><i class="fa fa-eye"></i></a></li>
								   <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
								   <li><a href="#"><i class="fa fa-bar-chart-o"></i></a></li>
								  </ul>
								 </div>
							   </div>
							   <div class="workout_1_in3 clearfix">
							    <h6 class="mgt bg">NEW</h6>
							   </div>
							 </div>
						   </div>
						   <div class="col-sm-3">
							 <div class="workout_1_inner clearfix">
							   <div class="workout_1_in1 clearfix">
							    <a href="#"><img src="frontend/img/12.jpg" class="iw" alt="abc"></a>
								<h5><a href="#">Eget Nulla</a></h5>
								<h5>$39.00</h5>
							   </div> 
							   <div class="workout_1_in2 clearfix">
							     <div class="col-sm-6 space_all">
								  <h6 class="mgt"><a href="#">ADD TO CART</a></h6>
								 </div>
								 <div class="col-sm-6 space_all">
								  <ul class="mgt pull-right">
								   <li><a href="#"><i class="fa fa-eye"></i></a></li>
								   <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
								   <li><a href="#"><i class="fa fa-bar-chart-o"></i></a></li>
								  </ul>
								 </div>
							   </div>
							   <div class="workout_1_in3 clearfix">
							    <h6 class="mgt bg1">HOT</h6>
							   </div>
							 </div>
						   </div>
						   <div class="col-sm-3">
							 <div class="workout_1_inner clearfix">
							   <div class="workout_1_in1 clearfix">
							    <a href="#"><img src="frontend/img/13.jpg" class="iw" alt="abc"></a>
								<h5><a href="#">Lacinia Nunc</a></h5>
								<h5>$39.00</h5>
							   </div> 
							   <div class="workout_1_in2 clearfix">
							     <div class="col-sm-6 space_all">
								  <h6 class="mgt"><a href="#">ADD TO CART</a></h6>
								 </div>
								 <div class="col-sm-6 space_all">
								  <ul class="mgt pull-right">
								   <li><a href="#"><i class="fa fa-eye"></i></a></li>
								   <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
								   <li><a href="#"><i class="fa fa-bar-chart-o"></i></a></li>
								  </ul>
								 </div>
							   </div>
							   <div class="workout_1_in3 clearfix">
							    <h6 class="mgt bg2">5% OFF</h6>
							   </div>
							 </div>
						   </div>
						   <div class="col-sm-3">
							 <div class="workout_1_inner clearfix">
							   <div class="workout_1_in1 clearfix">
							    <a href="#"><img src="frontend/img/14.jpg" class="iw" alt="abc"></a>
								<h5><a href="#">Nulla Quis</a></h5>
								<h5>$39.00</h5>
							   </div> 
							   <div class="workout_1_in2 clearfix">
							     <div class="col-sm-6 space_all">
								  <h6 class="mgt"><a href="#">ADD TO CART</a></h6>
								 </div>
								 <div class="col-sm-6 space_all">
								  <ul class="mgt pull-right">
								   <li><a href="#"><i class="fa fa-eye"></i></a></li>
								   <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
								   <li><a href="#"><i class="fa fa-bar-chart-o"></i></a></li>
								  </ul>
								 </div>
							   </div>
							   <div class="workout_1_in3 clearfix">
							    <h6 class="mgt bg">NEW</h6>
							   </div>
							 </div>
						   </div>
					</div>
					<div class="home_inner clearfix">
					       <div class="col-sm-3">
							 <div class="workout_1_inner clearfix">
							   <div class="workout_1_in1 clearfix">
							    <a href="#"><img src="frontend/img/7.jpg" class="iw" alt="abc"></a>
								<h5><a href="#">Semper Porta</a></h5>
								<h5>$39.00</h5>
							   </div> 
							   <div class="workout_1_in2 clearfix">
							     <div class="col-sm-6 space_all">
								  <h6 class="mgt"><a href="#">ADD TO CART</a></h6>
								 </div>
								 <div class="col-sm-6 space_all">
								  <ul class="mgt pull-right">
								   <li><a href="#"><i class="fa fa-eye"></i></a></li>
								   <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
								   <li><a href="#"><i class="fa fa-bar-chart-o"></i></a></li>
								  </ul>
								 </div>
							   </div>
							   <div class="workout_1_in3 clearfix">
							    <h6 class="mgt bg">NEW</h6>
							   </div>
							 </div>
						   </div>
						   <div class="col-sm-3">
							 <div class="workout_1_inner clearfix">
							   <div class="workout_1_in1 clearfix">
							    <a href="#"><img src="frontend/img/8.jpg" class="iw" alt="abc"></a>
								<h5><a href="#">Eget Nulla</a></h5>
								<h5>$39.00</h5>
							   </div> 
							   <div class="workout_1_in2 clearfix">
							     <div class="col-sm-6 space_all">
								  <h6 class="mgt"><a href="#">ADD TO CART</a></h6>
								 </div>
								 <div class="col-sm-6 space_all">
								  <ul class="mgt pull-right">
								   <li><a href="#"><i class="fa fa-eye"></i></a></li>
								   <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
								   <li><a href="#"><i class="fa fa-bar-chart-o"></i></a></li>
								  </ul>
								 </div>
							   </div>
							   <div class="workout_1_in3 clearfix">
							    <h6 class="mgt bg1">HOT</h6>
							   </div>
							 </div>
						   </div>
						   <div class="col-sm-3">
							 <div class="workout_1_inner clearfix">
							   <div class="workout_1_in1 clearfix">
							    <a href="#"><img src="frontend/img/9.jpg" class="iw" alt="abc"></a>
								<h5><a href="#">Lacinia Nunc</a></h5>
								<h5>$39.00</h5>
							   </div> 
							   <div class="workout_1_in2 clearfix">
							     <div class="col-sm-6 space_all">
								  <h6 class="mgt"><a href="#">ADD TO CART</a></h6>
								 </div>
								 <div class="col-sm-6 space_all">
								  <ul class="mgt pull-right">
								   <li><a href="#"><i class="fa fa-eye"></i></a></li>
								   <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
								   <li><a href="#"><i class="fa fa-bar-chart-o"></i></a></li>
								  </ul>
								 </div>
							   </div>
							   <div class="workout_1_in3 clearfix">
							    <h6 class="mgt bg2">5% OFF</h6>
							   </div>
							 </div>
						   </div>
						   <div class="col-sm-3">
							 <div class="workout_1_inner clearfix">
							   <div class="workout_1_in1 clearfix">
							    <a href="#"><img src="frontend/img/10.jpg" class="iw" alt="abc"></a>
								<h5><a href="#">Nulla Quis</a></h5>
								<h5>$39.00</h5>
							   </div> 
							   <div class="workout_1_in2 clearfix">
							     <div class="col-sm-6 space_all">
								  <h6 class="mgt"><a href="#">ADD TO CART</a></h6>
								 </div>
								 <div class="col-sm-6 space_all">
								  <ul class="mgt pull-right">
								   <li><a href="#"><i class="fa fa-eye"></i></a></li>
								   <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
								   <li><a href="#"><i class="fa fa-bar-chart-o"></i></a></li>
								  </ul>
								 </div>
							   </div>
							   <div class="workout_1_in3 clearfix">
							    <h6 class="mgt bg">NEW</h6>
							   </div>
							 </div>
						   </div>
					</div>
			   </div>
			  </div>
			  <div id="menu4" class="tab-pane fade  clearfix ">
				 <div class="click clearfix">
					<div class="home_inner clearfix">
					       <div class="col-sm-3">
							 <div class="workout_1_inner clearfix">
							   <div class="workout_1_in1 clearfix">
							    <a href="#"><img src="frontend/img/7.jpg" class="iw" alt="abc"></a>
								<h5><a href="#">Semper Porta</a></h5>
								<h5>$39.00</h5>
							   </div> 
							   <div class="workout_1_in2 clearfix">
							     <div class="col-sm-6 space_all">
								  <h6 class="mgt"><a href="#">ADD TO CART</a></h6>
								 </div>
								 <div class="col-sm-6 space_all">
								  <ul class="mgt pull-right">
								   <li><a href="#"><i class="fa fa-eye"></i></a></li>
								   <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
								   <li><a href="#"><i class="fa fa-bar-chart-o"></i></a></li>
								  </ul>
								 </div>
							   </div>
							   <div class="workout_1_in3 clearfix">
							    <h6 class="mgt bg">NEW</h6>
							   </div>
							 </div>
						   </div>
						   <div class="col-sm-3">
							 <div class="workout_1_inner clearfix">
							   <div class="workout_1_in1 clearfix">
							    <a href="#"><img src="frontend/img/8.jpg" class="iw" alt="abc"></a>
								<h5><a href="#">Eget Nulla</a></h5>
								<h5>$39.00</h5>
							   </div> 
							   <div class="workout_1_in2 clearfix">
							     <div class="col-sm-6 space_all">
								  <h6 class="mgt"><a href="#">ADD TO CART</a></h6>
								 </div>
								 <div class="col-sm-6 space_all">
								  <ul class="mgt pull-right">
								   <li><a href="#"><i class="fa fa-eye"></i></a></li>
								   <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
								   <li><a href="#"><i class="fa fa-bar-chart-o"></i></a></li>
								  </ul>
								 </div>
							   </div>
							   <div class="workout_1_in3 clearfix">
							    <h6 class="mgt bg1">HOT</h6>
							   </div>
							 </div>
						   </div>
						   <div class="col-sm-3">
							 <div class="workout_1_inner clearfix">
							   <div class="workout_1_in1 clearfix">
							    <a href="#"><img src="frontend/img/9.jpg" class="iw" alt="abc"></a>
								<h5><a href="#">Lacinia Nunc</a></h5>
								<h5>$39.00</h5>
							   </div> 
							   <div class="workout_1_in2 clearfix">
							     <div class="col-sm-6 space_all">
								  <h6 class="mgt"><a href="#">ADD TO CART</a></h6>
								 </div>
								 <div class="col-sm-6 space_all">
								  <ul class="mgt pull-right">
								   <li><a href="#"><i class="fa fa-eye"></i></a></li>
								   <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
								   <li><a href="#"><i class="fa fa-bar-chart-o"></i></a></li>
								  </ul>
								 </div>
							   </div>
							   <div class="workout_1_in3 clearfix">
							    <h6 class="mgt bg2">5% OFF</h6>
							   </div>
							 </div>
						   </div>
						   <div class="col-sm-3">
							 <div class="workout_1_inner clearfix">
							   <div class="workout_1_in1 clearfix">
							    <a href="#"><img src="frontend/img/10.jpg" class="iw" alt="abc"></a>
								<h5><a href="#">Nulla Quis</a></h5>
								<h5>$39.00</h5>
							   </div> 
							   <div class="workout_1_in2 clearfix">
							     <div class="col-sm-6 space_all">
								  <h6 class="mgt"><a href="#">ADD TO CART</a></h6>
								 </div>
								 <div class="col-sm-6 space_all">
								  <ul class="mgt pull-right">
								   <li><a href="#"><i class="fa fa-eye"></i></a></li>
								   <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
								   <li><a href="#"><i class="fa fa-bar-chart-o"></i></a></li>
								  </ul>
								 </div>
							   </div>
							   <div class="workout_1_in3 clearfix">
							    <h6 class="mgt bg">NEW</h6>
							   </div>
							 </div>
						   </div>
					</div>
					<div class="home_inner clearfix">
					       <div class="col-sm-3">
							 <div class="workout_1_inner clearfix">
							   <div class="workout_1_in1 clearfix">
							    <a href="#"><img src="frontend/img/11.jpg" class="iw" alt="abc"></a>
								<h5><a href="#">Semper Porta</a></h5>
								<h5>$39.00</h5>
							   </div> 
							   <div class="workout_1_in2 clearfix">
							     <div class="col-sm-6 space_all">
								  <h6 class="mgt"><a href="#">ADD TO CART</a></h6>
								 </div>
								 <div class="col-sm-6 space_all">
								  <ul class="mgt pull-right">
								   <li><a href="#"><i class="fa fa-eye"></i></a></li>
								   <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
								   <li><a href="#"><i class="fa fa-bar-chart-o"></i></a></li>
								  </ul>
								 </div>
							   </div>
							   <div class="workout_1_in3 clearfix">
							    <h6 class="mgt bg">NEW</h6>
							   </div>
							 </div>
						   </div>
						   <div class="col-sm-3">
							 <div class="workout_1_inner clearfix">
							   <div class="workout_1_in1 clearfix">
							    <a href="#"><img src="frontend/img/12.jpg" class="iw" alt="abc"></a>
								<h5><a href="#">Eget Nulla</a></h5>
								<h5>$39.00</h5>
							   </div> 
							   <div class="workout_1_in2 clearfix">
							     <div class="col-sm-6 space_all">
								  <h6 class="mgt"><a href="#">ADD TO CART</a></h6>
								 </div>
								 <div class="col-sm-6 space_all">
								  <ul class="mgt pull-right">
								   <li><a href="#"><i class="fa fa-eye"></i></a></li>
								   <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
								   <li><a href="#"><i class="fa fa-bar-chart-o"></i></a></li>
								  </ul>
								 </div>
							   </div>
							   <div class="workout_1_in3 clearfix">
							    <h6 class="mgt bg1">HOT</h6>
							   </div>
							 </div>
						   </div>
						   <div class="col-sm-3">
							 <div class="workout_1_inner clearfix">
							   <div class="workout_1_in1 clearfix">
							    <a href="#"><img src="frontend/img/13.jpg" class="iw" alt="abc"></a>
								<h5><a href="#">Lacinia Nunc</a></h5>
								<h5>$39.00</h5>
							   </div> 
							   <div class="workout_1_in2 clearfix">
							     <div class="col-sm-6 space_all">
								  <h6 class="mgt"><a href="#">ADD TO CART</a></h6>
								 </div>
								 <div class="col-sm-6 space_all">
								  <ul class="mgt pull-right">
								   <li><a href="#"><i class="fa fa-eye"></i></a></li>
								   <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
								   <li><a href="#"><i class="fa fa-bar-chart-o"></i></a></li>
								  </ul>
								 </div>
							   </div>
							   <div class="workout_1_in3 clearfix">
							    <h6 class="mgt bg2">5% OFF</h6>
							   </div>
							 </div>
						   </div>
						   <div class="col-sm-3">
							 <div class="workout_1_inner clearfix">
							   <div class="workout_1_in1 clearfix">
							    <a href="#"><img src="frontend/img/14.jpg" class="iw" alt="abc"></a>
								<h5><a href="#">Nulla Quis</a></h5>
								<h5>$39.00</h5>
							   </div> 
							   <div class="workout_1_in2 clearfix">
							     <div class="col-sm-6 space_all">
								  <h6 class="mgt"><a href="#">ADD TO CART</a></h6>
								 </div>
								 <div class="col-sm-6 space_all">
								  <ul class="mgt pull-right">
								   <li><a href="#"><i class="fa fa-eye"></i></a></li>
								   <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
								   <li><a href="#"><i class="fa fa-bar-chart-o"></i></a></li>
								  </ul>
								 </div>
							   </div>
							   <div class="workout_1_in3 clearfix">
							    <h6 class="mgt bg">NEW</h6>
							   </div>
							 </div>
						   </div>
					</div>
			   </div>
			  </div>
			  <div id="menu5" class="tab-pane fade  clearfix ">
				 <div class="click clearfix">
				    <div class="home_inner clearfix">
					       <div class="col-sm-3">
							 <div class="workout_1_inner clearfix">
							   <div class="workout_1_in1 clearfix">
							    <a href="#"><img src="frontend/img/11.jpg" class="iw" alt="abc"></a>
								<h5><a href="#">Semper Porta</a></h5>
								<h5>$39.00</h5>
							   </div> 
							   <div class="workout_1_in2 clearfix">
							     <div class="col-sm-6 space_all">
								  <h6 class="mgt"><a href="#">ADD TO CART</a></h6>
								 </div>
								 <div class="col-sm-6 space_all">
								  <ul class="mgt pull-right">
								   <li><a href="#"><i class="fa fa-eye"></i></a></li>
								   <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
								   <li><a href="#"><i class="fa fa-bar-chart-o"></i></a></li>
								  </ul>
								 </div>
							   </div>
							   <div class="workout_1_in3 clearfix">
							    <h6 class="mgt bg">NEW</h6>
							   </div>
							 </div>
						   </div>
						   <div class="col-sm-3">
							 <div class="workout_1_inner clearfix">
							   <div class="workout_1_in1 clearfix">
							    <a href="#"><img src="frontend/img/12.jpg" class="iw" alt="abc"></a>
								<h5><a href="#">Eget Nulla</a></h5>
								<h5>$39.00</h5>
							   </div> 
							   <div class="workout_1_in2 clearfix">
							     <div class="col-sm-6 space_all">
								  <h6 class="mgt"><a href="#">ADD TO CART</a></h6>
								 </div>
								 <div class="col-sm-6 space_all">
								  <ul class="mgt pull-right">
								   <li><a href="#"><i class="fa fa-eye"></i></a></li>
								   <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
								   <li><a href="#"><i class="fa fa-bar-chart-o"></i></a></li>
								  </ul>
								 </div>
							   </div>
							   <div class="workout_1_in3 clearfix">
							    <h6 class="mgt bg1">HOT</h6>
							   </div>
							 </div>
						   </div>
						   <div class="col-sm-3">
							 <div class="workout_1_inner clearfix">
							   <div class="workout_1_in1 clearfix">
							    <a href="#"><img src="frontend/img/13.jpg" class="iw" alt="abc"></a>
								<h5><a href="#">Lacinia Nunc</a></h5>
								<h5>$39.00</h5>
							   </div> 
							   <div class="workout_1_in2 clearfix">
							     <div class="col-sm-6 space_all">
								  <h6 class="mgt"><a href="#">ADD TO CART</a></h6>
								 </div>
								 <div class="col-sm-6 space_all">
								  <ul class="mgt pull-right">
								   <li><a href="#"><i class="fa fa-eye"></i></a></li>
								   <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
								   <li><a href="#"><i class="fa fa-bar-chart-o"></i></a></li>
								  </ul>
								 </div>
							   </div>
							   <div class="workout_1_in3 clearfix">
							    <h6 class="mgt bg2">5% OFF</h6>
							   </div>
							 </div>
						   </div>
						   <div class="col-sm-3">
							 <div class="workout_1_inner clearfix">
							   <div class="workout_1_in1 clearfix">
							    <a href="#"><img src="frontend/img/14.jpg" class="iw" alt="abc"></a>
								<h5><a href="#">Nulla Quis</a></h5>
								<h5>$39.00</h5>
							   </div> 
							   <div class="workout_1_in2 clearfix">
							     <div class="col-sm-6 space_all">
								  <h6 class="mgt"><a href="#">ADD TO CART</a></h6>
								 </div>
								 <div class="col-sm-6 space_all">
								  <ul class="mgt pull-right">
								   <li><a href="#"><i class="fa fa-eye"></i></a></li>
								   <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
								   <li><a href="#"><i class="fa fa-bar-chart-o"></i></a></li>
								  </ul>
								 </div>
							   </div>
							   <div class="workout_1_in3 clearfix">
							    <h6 class="mgt bg">NEW</h6>
							   </div>
							 </div>
						   </div>
					</div>
					<div class="home_inner clearfix">
					       <div class="col-sm-3">
							 <div class="workout_1_inner clearfix">
							   <div class="workout_1_in1 clearfix">
							    <a href="#"><img src="frontend/img/7.jpg" class="iw" alt="abc"></a>
								<h5><a href="#">Semper Porta</a></h5>
								<h5>$39.00</h5>
							   </div> 
							   <div class="workout_1_in2 clearfix">
							     <div class="col-sm-6 space_all">
								  <h6 class="mgt"><a href="#">ADD TO CART</a></h6>
								 </div>
								 <div class="col-sm-6 space_all">
								  <ul class="mgt pull-right">
								   <li><a href="#"><i class="fa fa-eye"></i></a></li>
								   <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
								   <li><a href="#"><i class="fa fa-bar-chart-o"></i></a></li>
								  </ul>
								 </div>
							   </div>
							   <div class="workout_1_in3 clearfix">
							    <h6 class="mgt bg">NEW</h6>
							   </div>
							 </div>
						   </div>
						   <div class="col-sm-3">
							 <div class="workout_1_inner clearfix">
							   <div class="workout_1_in1 clearfix">
							    <a href="#"><img src="frontend/img/8.jpg" class="iw" alt="abc"></a>
								<h5><a href="#">Eget Nulla</a></h5>
								<h5>$39.00</h5>
							   </div> 
							   <div class="workout_1_in2 clearfix">
							     <div class="col-sm-6 space_all">
								  <h6 class="mgt"><a href="#">ADD TO CART</a></h6>
								 </div>
								 <div class="col-sm-6 space_all">
								  <ul class="mgt pull-right">
								   <li><a href="#"><i class="fa fa-eye"></i></a></li>
								   <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
								   <li><a href="#"><i class="fa fa-bar-chart-o"></i></a></li>
								  </ul>
								 </div>
							   </div>
							   <div class="workout_1_in3 clearfix">
							    <h6 class="mgt bg1">HOT</h6>
							   </div>
							 </div>
						   </div>
						   <div class="col-sm-3">
							 <div class="workout_1_inner clearfix">
							   <div class="workout_1_in1 clearfix">
							    <a href="#"><img src="frontend/img/9.jpg" class="iw" alt="abc"></a>
								<h5><a href="#">Lacinia Nunc</a></h5>
								<h5>$39.00</h5>
							   </div> 
							   <div class="workout_1_in2 clearfix">
							     <div class="col-sm-6 space_all">
								  <h6 class="mgt"><a href="#">ADD TO CART</a></h6>
								 </div>
								 <div class="col-sm-6 space_all">
								  <ul class="mgt pull-right">
								   <li><a href="#"><i class="fa fa-eye"></i></a></li>
								   <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
								   <li><a href="#"><i class="fa fa-bar-chart-o"></i></a></li>
								  </ul>
								 </div>
							   </div>
							   <div class="workout_1_in3 clearfix">
							    <h6 class="mgt bg2">5% OFF</h6>
							   </div>
							 </div>
						   </div>
						   <div class="col-sm-3">
							 <div class="workout_1_inner clearfix">
							   <div class="workout_1_in1 clearfix">
							    <a href="#"><img src="frontend/img/10.jpg" class="iw" alt="abc"></a>
								<h5><a href="#">Nulla Quis</a></h5>
								<h5>$39.00</h5>
							   </div> 
							   <div class="workout_1_in2 clearfix">
							     <div class="col-sm-6 space_all">
								  <h6 class="mgt"><a href="#">ADD TO CART</a></h6>
								 </div>
								 <div class="col-sm-6 space_all">
								  <ul class="mgt pull-right">
								   <li><a href="#"><i class="fa fa-eye"></i></a></li>
								   <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
								   <li><a href="#"><i class="fa fa-bar-chart-o"></i></a></li>
								  </ul>
								 </div>
							   </div>
							   <div class="workout_1_in3 clearfix">
							    <h6 class="mgt bg">NEW</h6>
							   </div>
							 </div>
						   </div>
					</div>
			   </div>
			  </div>
			</div>

	   </div>
	</div>
   </div>
  </div>
 </div>
</section>

<section id="trending">
 <div class="container">
  <div class="row">
   <div class="trending_1 mgt clearfix">
    <div class="col-sm-4">
	 <div class="trending_1i1 clearfix">
	  <div class="col-sm-12">
       <h4 class="mgt">On Sale</h4>
	   <hr>
	  </div>
	 </div>
	 <div class="trending_1i clearfix">
	  <div class="col-sm-5 space_left">
	   <div class="trending_1il clearfix">
	    <div class="trending_1il1 clearfix">
		 <img src="frontend/img/15.jpg" class="iw" alt="abc">
		</div>
		<div class="trending_1il2 text-center clearfix">
		  <span><a href="#"><i class="fa fa-shopping-bag"></i></a></span>
		</div>
	   </div>
	  </div>
	  <div class="col-sm-7 space_right">
	   <div class="trending_1ir clearfix">
	    <h5 class="mgt"><a href="#">Licity jelly leg flat Sandals</a></h5>
		<h6>$79</h6>
	   </div> 
	  </div>
	 </div>
	</div>
	<div class="col-sm-4">
	 <div class="trending_1i1 clearfix">
	  <div class="col-sm-12">
       <h4 class="mgt">Best Seller</h4>
	   <hr>
	  </div>
	 </div>
	 <div class="trending_1i clearfix">
	  <div class="col-sm-5 space_left">
	   <div class="trending_1il clearfix">
	    <div class="trending_1il1 clearfix">
		 <img src="frontend/img/16.jpg" class="iw" alt="abc">
		</div>
		<div class="trending_1il2 text-center clearfix">
		  <span><a href="#"><i class="fa fa-shopping-bag"></i></a></span>
		</div>
	   </div>
	  </div>
	  <div class="col-sm-7 space_right">
	   <div class="trending_1ir clearfix">
	    <h5 class="mgt"><a href="#">Licity jelly leg flat Sandals</a></h5>
		<h6>$79</h6>
	   </div> 
	  </div>
	 </div>
	</div>
	<div class="col-sm-4">
	 <div class="trending_1i1 clearfix">
	  <div class="col-sm-12">
       <h4 class="mgt">Top Viewed</h4>
	   <hr>
	  </div>
	 </div>
	 <div class="trending_1i clearfix">
	  <div class="col-sm-5 space_left">
	   <div class="trending_1il clearfix">
	    <div class="trending_1il1 clearfix">
		 <img src="frontend/img/17.jpg" class="iw" alt="abc">
		</div>
		<div class="trending_1il2 text-center clearfix">
		  <span><a href="#"><i class="fa fa-shopping-bag"></i></a></span>
		</div>
	   </div>
	  </div>
	  <div class="col-sm-7 space_right">
	   <div class="trending_1ir clearfix">
	    <h5 class="mgt"><a href="#">Licity jelly leg flat Sandals</a></h5>
		<h6>$79</h6>
	   </div> 
	  </div>
	 </div>
	</div>
   </div>
   <div class="trending_1 clearfix">
    <div class="col-sm-4">
	 <div class="trending_1i clearfix">
	  <div class="col-sm-5 space_left">
	   <div class="trending_1il clearfix">
	    <div class="trending_1il1 clearfix">
		 <img src="frontend/img/18.jpg" class="iw" alt="abc">
		</div>
		<div class="trending_1il2 text-center clearfix">
		  <span><a href="#"><i class="fa fa-shopping-bag"></i></a></span>
		</div>
	   </div>
	  </div>
	  <div class="col-sm-7 space_right">
	   <div class="trending_1ir clearfix">
	    <h5 class="mgt"><a href="#">Licity jelly leg flat Sandals</a></h5>
		<h6>$79</h6>
	   </div> 
	  </div>
	 </div>
	</div>
	<div class="col-sm-4">
	 <div class="trending_1i clearfix">
	  <div class="col-sm-5 space_left">
	   <div class="trending_1il clearfix">
	    <div class="trending_1il1 clearfix">
		 <img src="frontend/img/19.jpg" class="iw" alt="abc">
		</div>
		<div class="trending_1il2 text-center clearfix">
		  <span><a href="#"><i class="fa fa-shopping-bag"></i></a></span>
		</div>
	   </div>
	  </div>
	  <div class="col-sm-7 space_right">
	   <div class="trending_1ir clearfix">
	    <h5 class="mgt"><a href="#">Licity jelly leg flat Sandals</a></h5>
		<h6>$79</h6>
	   </div> 
	  </div>
	 </div>
	</div>
	<div class="col-sm-4">
	 <div class="trending_1i clearfix">
	  <div class="col-sm-5 space_left">
	   <div class="trending_1il clearfix">
	    <div class="trending_1il1 clearfix">
		 <img src="frontend/img/20.jpg" class="iw" alt="abc">
		</div>
		<div class="trending_1il2 text-center clearfix">
		  <span><a href="#"><i class="fa fa-shopping-bag"></i></a></span>
		</div>
	   </div>
	  </div>
	  <div class="col-sm-7 space_right">
	   <div class="trending_1ir clearfix">
	    <h5 class="mgt"><a href="#">Licity jelly leg flat Sandals</a></h5>
		<h6>$79</h6>
	   </div> 
	  </div>
	 </div>
	</div>
   </div>
   <div class="trending_1 clearfix">
    <div class="col-sm-4">
	 <div class="trending_1i clearfix">
	  <div class="col-sm-5 space_left">
	   <div class="trending_1il clearfix">
	    <div class="trending_1il1 clearfix">
		 <img src="frontend/img/21.jpg" class="iw" alt="abc">
		</div>
		<div class="trending_1il2 text-center clearfix">
		  <span><a href="#"><i class="fa fa-shopping-bag"></i></a></span>
		</div>
	   </div>
	  </div>
	  <div class="col-sm-7 space_right">
	   <div class="trending_1ir clearfix">
	    <h5 class="mgt"><a href="#">Licity jelly leg flat Sandals</a></h5>
		<h6>$79</h6>
	   </div> 
	  </div>
	 </div>
	</div>
	<div class="col-sm-4">
	 <div class="trending_1i clearfix">
	  <div class="col-sm-5 space_left">
	   <div class="trending_1il clearfix">
	    <div class="trending_1il1 clearfix">
		 <img src="frontend/img/22.jpg" class="iw" alt="abc">
		</div>
		<div class="trending_1il2 text-center clearfix">
		  <span><a href="#"><i class="fa fa-shopping-bag"></i></a></span>
		</div>
	   </div>
	  </div>
	  <div class="col-sm-7 space_right">
	   <div class="trending_1ir clearfix">
	    <h5 class="mgt"><a href="#">Licity jelly leg flat Sandals</a></h5>
		<h6>$79</h6>
	   </div> 
	  </div>
	 </div>
	</div>
	<div class="col-sm-4">
	 <div class="trending_1i clearfix">
	  <div class="col-sm-5 space_left">
	   <div class="trending_1il clearfix">
	    <div class="trending_1il1 clearfix">
		 <img src="frontend/img/23.jpg" class="iw" alt="abc">
		</div>
		<div class="trending_1il2 text-center clearfix">
		  <span><a href="#"><i class="fa fa-shopping-bag"></i></a></span>
		</div>
	   </div>
	  </div>
	  <div class="col-sm-7 space_right">
	   <div class="trending_1ir clearfix">
	    <h5 class="mgt"><a href="#">Licity jelly leg flat Sandals</a></h5>
		<h6>$79</h6>
	   </div> 
	  </div>
	 </div>
	</div>
   </div>
  </div>
 </div>
</section>	

<section id="blog_home">
 <div class="container">
  <div class="row">
   <div class="product_list text-center clearfix">
     <div class="col-sm-12">
	  <h3 class="mgt">From Our Blog</h3>
	  <hr>
	 </div> 
   </div>
   <div class="blog_home_1 clearfix">
     <div class="col-sm-4">
	  <div class="blog_home_1i clearfix">
	   <img src="/frontend/img/24.jpg" class="iw" alt="abc">
	   <div class="blog_home_1i1 text-center clearfix">
	    <h6 class="mgt col_2">22 July , 2020. Monday</h6>
		<h4><a href="#">Sed adipiscing ornare</a></h4>
		<p><a href="#">Continue Reading</a></p>
	   </div>
	  </div>
	 </div> 
	 <div class="col-sm-4">
	  <div class="blog_home_1i clearfix">
	   <img src="frontend/img/25.jpg" class="iw" alt="abc">
	   <div class="blog_home_1i1 text-center clearfix">
	    <h6 class="mgt col_2">22 July , 2020. Monday</h6>
		<h4><a href="#">Sed adipiscing ornare</a></h4>
		<p><a href="#">Continue Reading</a></p>
	   </div>
	  </div>
	 </div>
	 <div class="col-sm-4">
	  <div class="blog_home_1i clearfix">
	   <img src="frontend/img/26.jpg" class="iw" alt="abc">
	   <div class="blog_home_1i1 text-center clearfix">
	    <h6 class="mgt col_2">22 July , 2020. Monday</h6>
		<h4><a href="#">Sed adipiscing ornare</a></h4>
		<p><a href="#">Continue Reading</a></p>
	   </div>
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
@stack('scripts')
</body> 
</html>