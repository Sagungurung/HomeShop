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
	   <a href="#">Blog Page</a>
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
	 <h5><a href="{{route('frontend.frontBlog.blogDetail')}}">Men's Apparel</a></h5>
	 <h5><a href="{{route('frontend.frontBlog.blogDetail')}}">Women's Apparel</a></h5>
	 <h5><a href="{{route('frontend.frontBlog.blogDetail')}}">Bags Collection</a></h5>
	 <h5><a href="{{route('frontend.frontBlog.blogDetail')}}">Accessories</a></h5>
	 <h5><a href="{{route('frontend.frontBlog.blogDetail')}}">Sun Glasses</a></h5><br>
	 <h4><span class="col_1">|</span> Recent Post</h4><br>
	   <div class="product_1li clearfix">
	    <img src="/frontend/img/28.jpg" alt="abc">
		<h5 class="mgt"><a href="{{route('frontend.frontBlog.blogDetail')}}">Top 10 Beautyful Women Dress in the world</a></h5>
		<h6 class="col_2"><span class="span_1 col_1"><i class="fa fa-calendar"></i></span> Feb 11, 2020 <span class="span_2 col_1"><i class="fa fa-comment-o"></i></span> 25</h6>
	   </div>
	   <div class="product_1li clearfix">
	    <img src="/frontend/img/29.jpg" alt="abc">
		<h5 class="mgt"><a href="{{route('frontend.frontBlog.blogDetail')}}">Top 10 Beautyful Women Dress in the world</a></h5>
		<h6 class="col_2"><span class="span_1 col_1"><i class="fa fa-calendar"></i></span> July 10, 2020 <span class="span_2 col_1"><i class="fa fa-comment-o"></i></span> 45</h6>
	   </div>
	   <div class="product_1li border_none pdb clearfix">
	    <img src="/frontend/img/30.jpg" alt="abc">
		<h5 class="mgt"><a href="{{route('frontend.frontBlog.blogDetail')}}">Top 10 Beautyful Women Dress in the world</a></h5>
		<h6 class="col_2"><span class="span_1 col_1"><i class="fa fa-calendar"></i></span> jan 17, 2020 <span class="span_2 col_1"><i class="fa fa-comment-o"></i></span> 23</h6>
	   </div><br>
	   <h4><span class="col_1">|</span> Tags</h4><br>
	   <ul>
	    <li><a href="{{route('frontend.frontBlog.blogDetail')}}">Business</a></li>
		<li><a href="{{route('frontend.frontBlog.blogDetail')}}">Wordpress</a></li>
		<li><a href="{{route('frontend.frontBlog.blogDetail')}}">Html</a></li>
		<li><a href="{{route('frontend.frontBlog.blogDetail')}}">Multipurpose</a></li>
		<li><a href="{{route('frontend.frontBlog.blogDetail')}}">Education</a></li>
		<li><a href="{{route('frontend.frontBlog.blogDetail')}}">Template</a></li>
		<li><a href="{{route('frontend.frontBlog.blogDetail')}}">Ecommerce</a></li>
	   </ul>
	   <h4><span class="col_1">|</span> Newslatter</h4><br>
	   <div class="blog_1li clearfix">
	     <h5 class="bold mgt">Subscribe & Get News
Latest Updates.</h5><br>
       <input class="form-control" placeholder="Enter your email" type="text">
	   <h5><a class="button" href="{{route('frontend.frontBlog.blogDetail')}}">SUBMIT</a></h5>
	   </div>
	</div>
   </div>
   <div class="col-sm-8">
    <div class="blog_home_1 mgt clearfix">
     <div class="col-sm-6">
	  <div class="blog_home_1i clearfix">
	   <img src="/frontend/img/24.jpg" class="iw" alt="abc">
	   <div class="blog_home_1i1 text-center clearfix">
	    <h6 class="col_2 mgt"><span class="span_1 col_1"><i class="fa fa-calendar"></i></span> Feb 11, 2020 <span class="span_2 col_1"><i class="fa fa-comment-o"></i></span> 25 <span class="span_2 col_1"><i class="fa fa-eye"></i></span> 15</h6>
		<h4><a href="{{route('frontend.frontBlog.blogDetail')}}">Sed adipiscing ornare</a></h4>
		<p><a href="{{route('frontend.frontBlog.blogDetail')}}">Continue Reading</a></p>
		<ul class="social-network social-circle">
                        <li><a href="blog_detail.html" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="blog_detail.html" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="blog_detail.html" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="blog_detail.html" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="blog_detail.html" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
       </ul>
	   </div>
	  </div>
	 </div> 
	 <div class="col-sm-6">
	  <div class="blog_home_1i clearfix">
	   <img src="/frontend/img/25.jpg" class="iw" alt="abc">
	   <div class="blog_home_1i1 text-center clearfix">
	    <h6 class="col_2 mgt"><span class="span_1 col_1"><i class="fa fa-calendar"></i></span> Jan 17, 2020 <span class="span_2 col_1"><i class="fa fa-comment-o"></i></span> 25 <span class="span_2 col_1"><i class="fa fa-eye"></i></span> 15</h6>
		<h4><a href="blog_detail.html">Sed adipiscing ornare</a></h4>
		<p><a href="blog_detail.html">Continue Reading</a></p>
		<ul class="social-network social-circle">
                        <li><a href="blog_detail.html" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="blog_detail.html" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="blog_detail.html" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="blog_detail.html" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="blog_detail.html" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
       </ul>
	   </div>
	  </div>
	 </div>
	 
   </div>
    <div class="blog_home_1 clearfix">
     <div class="col-sm-6">
	  <div class="blog_home_1i clearfix">
	   <img src="/frontend/img/26.jpg" class="iw" alt="abc">
	   <div class="blog_home_1i1 text-center clearfix">
	    <h6 class="col_2 mgt"><span class="span_1 col_1"><i class="fa fa-calendar"></i></span> Feb 11, 2020 <span class="span_2 col_1"><i class="fa fa-comment-o"></i></span> 25 <span class="span_2 col_1"><i class="fa fa-eye"></i></span> 15</h6>
		<h4><a href="blog_detail.html">Sed adipiscing ornare</a></h4>
		<p><a href="blog_detail.html">Continue Reading</a></p>
		<ul class="social-network social-circle">
                        <li><a href="blog_detail.html" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="blog_detail.html" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="blog_detail.html" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="blog_detail.html" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="blog_detail.html" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
       </ul>
	   </div>
	  </div>
	 </div> 
	 <div class="col-sm-6">
	  <div class="blog_home_1i clearfix">
	   <img src="/frontend/img/35.jpg" class="iw" alt="abc">
	   <div class="blog_home_1i1 text-center clearfix">
	    <h6 class="col_2 mgt"><span class="span_1 col_1"><i class="fa fa-calendar"></i></span> Jan 17, 2020 <span class="span_2 col_1"><i class="fa fa-comment-o"></i></span> 25 <span class="span_2 col_1"><i class="fa fa-eye"></i></span> 15</h6>
		<h4><a href="blog_detail.html">Sed adipiscing ornare</a></h4>
		<p><a href="blog_detail.html">Continue Reading</a></p>
		<ul class="social-network social-circle">
                        <li><a href="blog_detail.html" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="blog_detail.html" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="blog_detail.html" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="blog_detail.html" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="blog_detail.html" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
       </ul>
	   </div>
	  </div>
	 </div>
	 
   </div>
    <div class="blog_home_1 clearfix">
     <div class="col-sm-6">
	  <div class="blog_home_1i clearfix">
	   <img src="/frontend/img/36.jpg" class="iw" alt="abc">
	   <div class="blog_home_1i1 text-center clearfix">
	    <h6 class="col_2 mgt"><span class="span_1 col_1"><i class="fa fa-calendar"></i></span> Feb 11, 2020 <span class="span_2 col_1"><i class="fa fa-comment-o"></i></span> 25 <span class="span_2 col_1"><i class="fa fa-eye"></i></span> 15</h6>
		<h4><a href="blog_detail.html">Sed adipiscing ornare</a></h4>
		<p><a href="blog_detail.html">Continue Reading</a></p>
		<ul class="social-network social-circle">
                        <li><a href="blog_detail.html" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="blog_detail.html" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="blog_detail.html" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="blog_detail.html" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="blog_detail.html" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
       </ul>
	   </div>
	  </div>
	 </div> 
	 <div class="col-sm-6">
	  <div class="blog_home_1i clearfix">
	   <img src="/frontend/img/37.jpg" class="iw" alt="abc">
	   <div class="blog_home_1i1 text-center clearfix">
	    <h6 class="col_2 mgt"><span class="span_1 col_1"><i class="fa fa-calendar"></i></span> Jan 17, 2020 <span class="span_2 col_1"><i class="fa fa-comment-o"></i></span> 25 <span class="span_2 col_1"><i class="fa fa-eye"></i></span> 15</h6>
		<h4><a href="blog_detail.html">Sed adipiscing ornare</a></h4>
		<p><a href="blog_detail.html">Continue Reading</a></p>
		<ul class="social-network social-circle">
                        <li><a href="blog_detail.html" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="blog_detail.html" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="blog_detail.html" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="blog_detail.html" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="blog_detail.html" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
       </ul>
	   </div>
	  </div>
	 </div>
	 
   </div>
    <div class="product_1_last text-center clearfix">
	  <div class="col-sm-12">
	   <ul>
	    <li class="act"><a href="blog_detail.html">1</a></li>
		<li><a href="blog_detail.html">2</a></li>
		<li><a href="blog_detail.html">3</a></li>
		<li><a href="blog_detail.html">4</a></li>
		<li><a href="blog_detail.html">5</a></li>
		<li><a href="blog_detail.html">6</a></li>
		<li><a href="blog_detail.html"><i class="fa fa-chevron-right"></i></a></li>
	   </ul>
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