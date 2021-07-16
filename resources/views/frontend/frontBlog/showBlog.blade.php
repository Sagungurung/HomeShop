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
					</div>
				</div>

				<div class="col-sm-8">
					<div class="blog_home_1 mgt clearfix">
						@foreach($blogs as $blog)
						<div class="col-sm-4">
							<img src="/uploads/blogs/{{$blog->image}}" class="img-responsive" alt="{{$blog->image}}">
							<div class="blog_home_1i1 text-center clearfix">
								<h6 class="mgt col_2">{{$blog->updated_at}}</h6>
								<h4><a href="">{{$blog->title}}</a></h4>
								<p>{{Str::limit($blog->description,100)}}</p>
							</div>
						</div>
						@endforeach
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
</body>

</html>
@endsection