@extends('frontend.master')
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

<!-- <section id="collection">
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
								<img src="uploads/blogs/perfumed-soap-blog1625839840.jpg" alt="abc" class="iw">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->

<section id="product_list">
	<div class="container">
		<div class="row">
			<div class="product_list text-center clearfix">
				<div class="col-sm-12">
					<h3 class="mgt">Our Popular Item</h3>
					<hr>
				</div>
			</div>
			<div class="gallery_1 clearfix">
				<div class="col-sm-12">
					<div class="workout_page_1_left clearfix">

						<ul class="nav nav-tabs">
						@foreach($categories as $category)
							<li>
								<a data-toggle="tab" href="{{route('frontend.includes.showCategories', $category->id)}}">{{$category->name}}</a>
							</li>
						@endforeach
						</ul>
						
						<div class="tab-content clearfix">
							<div id="home" class="tab-pane fade  clearfix active in">
								<div class="click clearfix">
									<div class="home_inner clearfix">
									@foreach($product as $products)
									@if($loop->index < 8)
										<div class="col-sm-3">
											<div class="workout_1_inner clearfix">
												<div class="workout_1_in1 clearfix">
													<a href="#"><img src="/uploads/sellerPhotos/products/{{$products->pimage}}" class="iw" alt="abc"></a>
													<h5><a href="#">{{$products->pname}}</a></h5>
													<h5>Rs {{$products->pprice}}</h5>
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
													<div class="col-sm-6 space_all">
														<ul class="mgt pull-right">
															<li><a href="#"><i class="fa fa-heart-o"></i></a></li>
														</ul>
													</div>
												</div>
												<!-- <div class="workout_1_in3 clearfix">
													<h6 class="mgt bg">NEW</h6>
												</div> -->
											</div>
										</div>
										@endif
									@endforeach
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

<!-- <section id="trending">
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
</section> -->

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

				@foreach($blogs as $blog)
				@if($loop->index < 3)
				<div class="col-sm-4">
					<img src="/uploads/blogs/{{$blog->image}}" class="img-responsive" alt="{{$blog->image}}">
					<div class="blog_home_1i1 text-center clearfix">
						<h6 class="mgt col_2">{{$blog->updated_at}}</h6>
						<h4><a href="{{route('frontend.frontBlog.blogDetail', $blog)}}">{{$blog->title}}</a></h4>
						<p>{{Str::limit($blog->description,100)}}</p>
					</div>
			</div>
			@endif
			@endforeach

		</div>
	</div>
	</div>
</section>
@endsection