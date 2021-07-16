@extends('frontend.master')
@section('title','Home')
@section('content')

<section id="center" class="center_shop clearfix">
 <div class="container">
  <div class="row">
    <div class="center_shop_1 clearfix">
	 <div class="col-sm-12">
	  <h5 class="mgt">
	   <a href="{{route('frontend.home')}}">Home <i class="fa fa-long-arrow-right"></i> </a>
	   <a href="">Blog Detail</a>
	  </h5>
	 </div>
	</div>
  </div>
 </div>
</section>

<section id="blog">
 <div class="container">
  <div class="row">
   <div class="blog_1 clearfix">
   <div class="col-sm-4">
    <div class="blog_1l clearfix">
	 <div class="input-group">
					<input type="text" class="form-control form_2" placeholder="Search Here...">
					<span class="input-group-btn">
						<button class="btn btn-primary" type="button">
							<i class="fa fa-search"></i></button>
					</span>
      </div><br>
	 <h4><span class="col_1">|</span> Blog Categories</h4><br>
	 <h5><a href="#">Men's Apparel</a></h5>
	 <h5><a href="#">Women's Apparel</a></h5>
	 <h5><a href="#">Bags Collection</a></h5>
	 <h5><a href="#">Accessories</a></h5>
	 <h5><a href="#">Sun Glasses</a></h5><br>
	 <h4><span class="col_1">|</span> Recent Blogs</h4><br>
	   <div class="product_1li clearfix">
	    <img src="/frontend/img/29.jpg" alt="abc">
		<h5 class="mgt"><a href="#">Top 10 Beautyful Women Dress in the world</a></h5>
		<h6 class="col_2"><span class="span_1 col_1"><i class="fa fa-calendar"></i></span> July 10, 2020 <span class="span_2 col_1"><i class="fa fa-comment-o"></i></span> 45</h6>
	   </div>
	   <div class="product_1li border_none pdb clearfix">
	    <img src="/frontend/img/30.jpg" alt="abc">
		<h5 class="mgt"><a href="#">Top 10 Beautyful Women Dress in the world</a></h5>
		<h6 class="col_2"><span class="span_1 col_1"><i class="fa fa-calendar"></i></span> jan 17, 2020 <span class="span_2 col_1"><i class="fa fa-comment-o"></i></span> 23</h6>
	   </div><br>
	   <!-- <ul>
	    <li><a href="#">Business</a></li>
		<li><a href="#">Wordpress</a></li>
		<li><a href="#">Html</a></li>
		<li><a href="#">Multipurpose</a></li>
		<li><a href="#">Education</a></li>
		<li><a href="#">Template</a></li>
		<li><a href="#">Ecommerce</a></li>
	   </ul> -->
	</div>
   </div>
   <div class="col-sm-8">
    <div class="blod_d1 clearfix">
	 <img src="/uploads/blogs/{{$blog->image}}" class="iw" alt="abc">
	 <h3>{{$blog->title}}</h3>
	 <h6 class="col_2"><a class="col_2" href="#"><i class="fa fa-user col_1"></i> By {{$sellers->firstname}}</a> | </i> {{$blog->updated_at}} | <i class="fa fa-comments col_1"></i> Comment (15)</h6>
	 <hr>
	   <p>{{$blog->description}}</p>
	 </div>
	<br>
	<div class="blod_d2 clearfix"> 
	 <h3><span class="col_1">|</span> Comments (3)</h3>
	 <div class="blod_d2i clearfix">
	  <div class="col-sm-2 space_left">
	   <img src="/frontend/img/39.jpg" class="iw img-circle" alt="abc">
	  </div>
	  <div class="col-sm-10">
	   <h4 class="mgt">Lacinia Arcu</h4>
	   <h6 class="mgt">At 8:59 Pm On May 18, 2019</h6>
	   <p>Enthusiastically leverage existing premium quality vectors with enterprise-wide innovation collaboration Phosfluorescently leverage others enterprisee Phosfluorescently leverage.</p>
	   <h5><a href="#"><i class="fa fa-reply"></i> Reply</a></h5>
	  </div>
	 </div>
	 <div class="blod_d2i mgl clearfix">
	  <div class="col-sm-2 space_left">
	   <img src="/frontend/img/40.jpg" class="iw img-circle" alt="abc">
	  </div>
	  <div class="col-sm-10">
	   <h4 class="mgt">Semper Porta</h4>
	   <h6 class="mgt">At 8:59 Pm On May 18, 2019</h6>
	   <p>Enthusiastically leverage existing premium quality vectors with enterprise-wide innovation collaboration Phosfluorescently leverage others enterprisee Phosfluorescently leverage.</p>
	   <h5><a href="#"><i class="fa fa-reply"></i> Reply</a></h5>
	  </div>
	 </div>
	 <div class="blod_d2i clearfix">
	  <div class="col-sm-2 space_left">
	   <img src="/frontend/img/41.jpg" class="iw img-circle" alt="abc">
	  </div>
	  <div class="col-sm-10">
	   <h4 class="mgt">Conubia Nostra</h4>
	   <h6 class="mgt">At 8:59 Pm On May 18, 2019</h6>
	   <p>Enthusiastically leverage existing premium quality vectors with enterprise-wide innovation collaboration Phosfluorescently leverage others enterprisee Phosfluorescently leverage.</p>
	   <h5><a href="#"><i class="fa fa-reply"></i> Reply</a></h5>
	  </div>
	 </div>
	</div><br>
	<div class="blod_d2 clearfix"> 
	 <h3><span class="col_1">|</span> Leave A Comment</h3>
	</div>
	<div class="blod_d3 clearfix"> 
	 <div class="blod_d3i clearfix">
	  <div class="col-sm-6">
	   <h5>Your Name <span>*</span></h5>
	   <input class="form-control" type="text">
	  </div>
	  <div class="col-sm-6">
	   <h5>Your Email <span>*</span></h5>
	   <input class="form-control" type="text">
	  </div>
	 </div>
	 <div class="blod_d3i clearfix">
	  <div class="col-sm-12">
	   <h5>Your Message <span>*</span></h5>
	   <textarea class="form-control form_1"></textarea>
	   <h5><a class="button" href="#">POST COMMENT</a></h5>
	  </div>
	  
	 </div>
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
</body>
 
</html>
@endsection