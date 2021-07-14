<!-- @extends('frontend.master')
@section('title','Home')
@section('content')
<section id="center" class="center_home clearfix">
 <div class="container">
  <div class="row">
   <div class="center_home clearfix">
    <div class="col-sm-4">
	 <div class="center_homer clearfix">
	  <img src="\uploads\sellerPhotos\products\cxampptmpphpc467tmp1626094071.jpg" class="iw" alt="abc">
	 </div>
	</div>
	<div class="col-sm-4">
	 <div class="center_homem clearfix">
	  <h1 class="col_1">Welcome to the Home Shop</h1>
	  <p>Do you wnat to sell the product you made??? Then this is the perfect place for you. If you are a buyer then no problem
		  just click the button below and get started!!!
	  </p>
      <h5><a class="button" href="{{route('frontend.authenticate.login')}}">SHOP NOW!</a></h5>
	 </div>
	</div>
	<div class="col-sm-4">
	 <div class="center_homer clearfix">
	  <img src="\uploads\sellerPhotos\products\cxampptmpphp871dtmp1626092745.jpg" class="iw" alt="abc">
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
@endsection -->