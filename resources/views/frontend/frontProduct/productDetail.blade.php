@extends('frontend.master')
@section('title','Product Details')
@section('content')

<section id="product" class="clearfix">
	<div class="container">
		<div class="row">
			<div class="product_1 clearfix">
				<div class="col-sm-3">
					<div class="product_1l mgt clearfix">
						<h4 class="mgt">Categories</h4>
						<h5><a href="#">T-Shirts</a></h5>
						<h5><a href="#">Jacket</a></h5>
						<h5><a href="#">Jeans</a></h5>
						<h5><a href="#">Sweatshirts</a></h5>
						<h5><a href="#">Trousers</a></h5>
						<h5><a href="#">Kitwears</a></h5>
						<h5><a href="#">Accessories</a></h5>
					</div>
				</div>
				<div class="col-sm-9">
					<div class="center_detail_2 clearfix">
						<div class="col-sm-5">
							<div class="center_detail_2_left clearfix">
								<img src="/uploads/sellerPhotos/products/{{$products->pimage}}" class="iw">
							</div>
						</div>
						<div class="col-sm-7">
							<div class="center_detail_2_right clearfix">
								<div class="center_detail_2_right_inner clearfix">
									<h5><span>Product Name: </span>{{$products->pname}}</h5>
									<h5><span>Classification:</span> <a href="#">{{$products->category->name}}</a>
										<h5><span>Price: </span>Rs {{$products->pprice}}</h5>
										<h6><span>Quantity: </span>{{$products->pquantity}} in stock</h6>
								</div>
								<div class="center_detail_2_right_inner_1 clearfix">
									<ul>
										<li><a href="{{route('frontend.createCart')}}"><i class="fa fa-heart"></i> Add To Cart</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="center_detail_2 clearfix">
						<div class="center_detail_2_right_inner_2 clearfix">
							<ul class="nav nav-tabs">
								<li class=""><a data-toggle="tab" href="#menu_review">Comments {{count($comments)}}</a></li>
							</ul>

							<div class="tab-content clearfix">

								<div class="click clearfix">
									@if(count($comments)>0)
									@foreach($comments as $comment)
									<div class="click_inner_2 clearfix">
										<div class="col-sm-11 space_left">
											<div class="col-sm-2 space_left">
												<img src="/frontend/img/39.jpg" class="iw img-circle" alt="abc">
											</div>
											<div class="click_inner_2_right clearfix">
												<h4>{{$comment->visitor->firstname}}</h4>
												<h7>{{$comment->created_at->format('F d, Y')}}</h7>
												<p>{{$comment->comment}}</p>
											</div>
										</div>
									</div>
									@endforeach
									@else
									<div class="click_inner_2_right clearfix">
										<h5><span class="col_1"></span>No Comments to show yet...</h5>
									</div>
									@endif
									<br>

									@if(Auth::guard('visitor')->check())
									<form method="get" action="{{route('frontend.comment')}}">
										@csrf
										<div class="click_inner_3 clearfix">
											<h4>Add a Comment</h4>
											<input type="hidden" name="product_id" value="{{$products->id}}">
											<input type="hidden" name="visitor_id" value="{{Auth::guard('visitor')->user()->id}}" />
											<h5>Your Comment *</h5>
											<textarea class="form-control form_1" name="comment"></textarea>
											<h5><input type="submit" class="button" value="COMMENT"></h5>
										</div>
									</form>
									@endif
								</div>

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
			<div class="related clearfix">
				<div class="col-sm-12">
					<h2 class="mgt">Related Products</h2>
				</div>
			</div>
			<div class="home_inner clearfix">
				<div class="col-sm-3">
					<div class="workout_1_inner clearfix">
						<div class="workout_1_in1 clearfix">
							<a href="#"><img src="/frontend/img/7.jpg" class="iw" alt="abc"></a>
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
							<a href="#"><img src="/frontend/img/8.jpg" class="iw" alt="abc"></a>
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
							<a href="#"><img src="/frontend/img/9.jpg" class="iw" alt="abc"></a>
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
							<a href="#"><img src="/frontend/img/10.jpg" class="iw" alt="abc"></a>
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
	/*
Credits:
https://github.com/marcaube/bootstrap-magnify
*/


	! function($) {

		"use strict"; // jshint ;_;


		/* MAGNIFY PUBLIC CLASS DEFINITION
		 * =============================== */

		var Magnify = function(element, options) {
			this.init('magnify', element, options)
		}

		Magnify.prototype = {

			constructor: Magnify

				,
			init: function(type, element, options) {
					var event = 'mousemove',
						eventOut = 'mouseleave';

					this.type = type
					this.$element = $(element)
					this.options = this.getOptions(options)
					this.nativeWidth = 0
					this.nativeHeight = 0

					this.$element.wrap('<div class="magnify" \>');
					this.$element.parent('.magnify').append('<div class="magnify-large" \>');
					this.$element.siblings(".magnify-large").css("background", "url('" + this.$element.attr("src") + "') no-repeat");

					this.$element.parent('.magnify').on(event + '.' + this.type, $.proxy(this.check, this));
					this.$element.parent('.magnify').on(eventOut + '.' + this.type, $.proxy(this.check, this));
				}

				,
			getOptions: function(options) {
					options = $.extend({}, $.fn[this.type].defaults, options, this.$element.data())

					if (options.delay && typeof options.delay == 'number') {
						options.delay = {
							show: options.delay,
							hide: options.delay
						}
					}

					return options
				}

				,
			check: function(e) {
				var container = $(e.currentTarget);
				var self = container.children('img');
				var mag = container.children(".magnify-large");

				// Get the native dimensions of the image
				if (!this.nativeWidth && !this.nativeHeight) {
					var image = new Image();
					image.src = self.attr("src");

					this.nativeWidth = image.width;
					this.nativeHeight = image.height;

				} else {

					var magnifyOffset = container.offset();
					var mx = e.pageX - magnifyOffset.left;
					var my = e.pageY - magnifyOffset.top;

					if (mx < container.width() && my < container.height() && mx > 0 && my > 0) {
						mag.fadeIn(100);
					} else {
						mag.fadeOut(100);
					}

					if (mag.is(":visible")) {
						var rx = Math.round(mx / container.width() * this.nativeWidth - mag.width() / 2) * -1;
						var ry = Math.round(my / container.height() * this.nativeHeight - mag.height() / 2) * -1;
						var bgp = rx + "px " + ry + "px";

						var px = mx - mag.width() / 2;
						var py = my - mag.height() / 2;

						mag.css({
							left: px,
							top: py,
							backgroundPosition: bgp
						});
					}
				}

			}
		}


		/* MAGNIFY PLUGIN DEFINITION
		 * ========================= */

		$.fn.magnify = function(option) {
			return this.each(function() {
				var $this = $(this),
					data = $this.data('magnify'),
					options = typeof option == 'object' && option
				if (!data) $this.data('tooltip', (data = new Magnify(this, options)))
				if (typeof option == 'string') data[option]()
			})
		}

		$.fn.magnify.Constructor = Magnify

		$.fn.magnify.defaults = {
			delay: 0
		}


		/* MAGNIFY DATA-API
		 * ================ */

		$(window).on('load', function() {
			$('[data-toggle="magnify"]').each(function() {
				var $mag = $(this);
				$mag.magnify()
			})
		})

	}(window.jQuery);
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
</body>

</html>
@endsection