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
		   <div class="carousel slide article-slide" id="article-photo-carousel">

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner cont-slider">
		
			<div class="item active">
			  <div class="mag">
                <div class="magnify"><div class="magnify"><img data-toggle="magnify" src="/frontend/img/31.jpg" alt=""><div class="magnify-large" style="background: url(&quot;img/53.jpg&quot;) no-repeat;"></div></div><div class="magnify-large"></div></div>
            </div>
			</div>
			<div class="item">
			  <div class="mag">
                <div class="magnify"><div class="magnify"><img data-toggle="magnify" src="/frontend/img/32.jpg" alt=""><div class="magnify-large" style="background: url(&quot;img/54.jpg&quot;) no-repeat;"></div></div><div class="magnify-large"></div></div>
            </div>
			</div>
			<div class="item">
			  <div class="mag">
                <div class="magnify"><div class="magnify"><img data-toggle="magnify" src="/frontend/img/33.jpg" alt=""><div class="magnify-large" style="background: url(&quot;img/55.jpg&quot;) no-repeat;"></div></div><div class="magnify-large"></div></div>
            </div>
			</div>
			<div class="item ">
			  <div class="mag">
                <div class="magnify"><div class="magnify"><img data-toggle="magnify" src="/frontend/img/34.jpg" alt=""><div class="magnify-large" style="background: url(&quot;img/56.jpg&quot;) -101px -21px no-repeat; display: block; left: 17px; top: -27.5px; opacity: 0;"></div></div><div class="magnify-large"></div></div>
            </div>
			</div>
		  </div>
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
			<li class="active" data-slide-to="0" data-target="#article-photo-carousel">
			  <img alt="" src="/frontend/img/31.jpg">
			</li>
			<li class="" data-slide-to="1" data-target="#article-photo-carousel">
			  <img alt="" src="/frontend/img/32.jpg">
			</li>
			<li class="" data-slide-to="2" data-target="#article-photo-carousel">
			  <img alt="" src="/frontend/img/33.jpg">
			</li>
			<li class="" data-slide-to="3" data-target="#article-photo-carousel">
			  <img alt="" src="/frontend/img/34.jpg">
			</li>
		  </ol>
        </div>
		 </div>
		</div>
		<div class="col-sm-7">
		 <div class="center_detail_2_right clearfix">
		  <div class="center_detail_2_right_inner clearfix">
		    <h3> Nulla quis sem at nibh imperdiet</h3>
			<h4>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star-o"></i>
			<a href="#">(3 user review)</a>
			</h4>
			<h5><span>TLV:</span> NPM96-2</h5>
			<h5><span>Classification:</span> <a href="#">Men</a>, <a href="#">Child</a>, <a href="#">Women</a>, <a href="#">Electricals</a>, <a href="#">Fashion</a>, <a href="#">Tables</a></h5>
			<h5><span>Tags:</span> <a href="#">Fashion Department</a>, <a href="#">Mobile Phones</a></h5>
			<h2>$90.00</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.Praesent mauris.</p>
			<h6>1200 in stock</h6>
			<div class="input-group number-spinner">
				<span class="input-group-btn">
					<button class="btn btn-default" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
				</span>
				<input type="text" class="form-control text-center" value="1">
				<span class="input-group-btn">
					<button class="btn btn-default" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
				</span>
			</div>
			<h5 class="heading_1"><a href="#">WISHLIST</a></h5>
		  </div>
		  <div class="center_detail_2_right_inner_1 clearfix">
		    <ul>
			 <li><a href="#"><i class="fa fa-heart"></i> Add To Cart</a></li>
             <li><a href="#"><i class="fa fa-image"></i> Comparison</a></li>
			</ul>
		  </div>
		  <div class="center_detail_2_right_inner_2 clearfix">
		        <ul class="nav nav-tabs">
			  <li class="active"><a data-toggle="tab" href="#home">Booking</a></li>
			  <li><a data-toggle="tab" href="#menu1">Shopping</a></li>
			  <li><a data-toggle="tab" href="#menu2">Offers</a></li>
           </ul>

				<div class="tab-content clearfix">
				  <div id="home" class="tab-pane fade in active clearfix">
					 <div class="click clearfix">
					  <p class="mgt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.Praesent mauris. Fusce nec tellus sed augue semper porta.
					  </p>
				   </div>
				  </div>
				  <div id="menu1" class="tab-pane fade clearfix">
					 <div class="click clearfix">
					  <p class="mgt">Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitursodales ligula in libero.Sed dignissim lacinia nunc.
					  </p>
				   </div>
				  </div>
				  <div id="menu2" class="tab-pane fade clearfix">
					 <div class="click clearfix">
					  <p class="mgt"> Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitursodales ligula in libero.Sed dignissim lacinia nunc.
					  </p>
				   </div>
				  </div>
				</div>
		</div>
		 </div>
		</div>
	   </div>
	   <div class="center_detail_2 clearfix">
	     <div class="center_detail_2_right_inner_2 clearfix">
		        <ul class="nav nav-tabs">
			  <li class="active"><a data-toggle="tab" href="#home_description">Explanation</a></li>
			  <li class=""><a data-toggle="tab" href="#menu_information">More information</a></li>
			  <li class=""><a data-toggle="tab" href="#menu_review">Comments (1)</a></li>
           </ul>

				<div class="tab-content clearfix">
				  <div id="home_description" class="tab-pane fade clearfix active in">
					 <div class="click clearfix">
					   <div class="click_inner clearfix">
					    <h4 class="mgt">Lorem Ipsum</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitursodales ligula in libero.Sed dignissim lacinia nunc.</p>
					   </div>
					   <div class="click_inner clearfix">
					    <h4>Adipiscing Elit</h4>
						<ul>
						 <li>Sed cursus ante dapibus diam Sed nisi. </li>
						 <li>Nulla quis sem at nibh elementum imperdiet.</li>
						 <li>Duis sagittis ipsum Praesent mauris.</li>
						 <li>Fusce nec tellus sed augue semper porta.</li>
						 <li>Mauris massa Vestibulum lacinia arcu eget nulla.</li>
						</ul>
					   </div>
					   <div class="click_inner clearfix">
					    <h4>Integer Nec </h4>
						<ul>
						 <li>Sed cursus ante dapibus diam Sed nisi. </li>
						 <li>Nulla quis sem at nibh elementum imperdiet.</li>
						 <li>Duis sagittis ipsum Praesent mauris.</li>
						 <li>Fusce nec tellus sed augue semper porta.</li>
						 <li>Mauris massa Vestibulum lacinia arcu eget nulla.</li>
						</ul>
					   </div>
					   <div class="click_inner clearfix">
						<p>Praesent libero Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitursodales ligula in libero.Sed dignissim lacinia nunc.</p>
					   </div>
				    </div>
				  </div>
				  <div id="menu_information" class="tab-pane fade clearfix ">
					 <div class="click clearfix">
					  <div class="click_inner_1  clearfix">
					   <div class="col-sm-2">
					    <div class="click_inner_1_left clearfix">
						 <h4>Dimensions</h4>
						</div>
					   </div>
					   <div class="col-sm-10">
					     <div class="click_inner_1_right clearfix">
						   <h5>112 × 111 × 441 cm</h5>
						 </div>
					   </div>
					  </div>
					  <div class="click_inner_1 border_top_none_1 clearfix">
					   <div class="col-sm-2">
					    <div class="click_inner_1_left clearfix">
						 <h4>Weight</h4>
						</div>
					   </div>
					   <div class="col-sm-10">
					     <div class="click_inner_1_right clearfix">
						   <h5>	66 kg</h5>
						 </div>
					   </div>
					  </div>
				   </div>
				  </div>
				  <div id="menu_review" class="tab-pane fade clearfix">
					 <div class="click clearfix">
					  <div class="click_inner_2 clearfix">
					    <div class="col-sm-1 space_left">
						 <div class="click_inner_2_left text-center clearfix">
						  <h1>
						  <i class="fa fa-user-plus"></i>
						  </h1>
						 </div>
						</div>
						<div class="col-sm-11 space_left">
						 <div class="click_inner_2_right clearfix">
						  <h4 class="mgt">
						   <i class="fa fa-star"></i>
						   <i class="fa fa-star"></i>
						   <i class="fa fa-star"></i>
						   <i class="fa fa-star"></i>
						   <i class="fa fa-star-o"></i>
						  </h4>
						  <h5><span>Author</span> – July 24, 2018</h5>
						  <h5>Nice Product</h5>
						 </div>
						</div>
					  </div>
					  <div class="click_inner_3 clearfix">
					   <h4>Add a Comment</h4>
					   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit *</p>
					   <h5>Your Name * </h5>
					   <input type="text" class="form-control">
					   <h5>Your Email * </h5>
					   <input type="text" class="form-control">
					   <p class="para_1"><input type="checkbox"> Fusce nec tellus sed augue semper porta Mauris massa.</p>
					   <h5>Your Stars</h5>
					   <h3>
					    <i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
					   </h3>
					   <h5>Your Comment *</h5>
					   <textarea class="form-control form_1"></textarea>
					   <h6><a class="button" href="#">SUBMIT</a></h6>
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

<script type="text/javascript">
	/*
Credits:
https://github.com/marcaube/bootstrap-magnify
*/


!function ($) {

    "use strict"; // jshint ;_;


    /* MAGNIFY PUBLIC CLASS DEFINITION
     * =============================== */

    var Magnify = function (element, options) {
        this.init('magnify', element, options)
    }

    Magnify.prototype = {

        constructor: Magnify

        , init: function (type, element, options) {
            var event = 'mousemove'
                , eventOut = 'mouseleave';

            this.type = type
            this.$element = $(element)
            this.options = this.getOptions(options)
            this.nativeWidth = 0
            this.nativeHeight = 0

            this.$element.wrap('<div class="magnify" \>');
            this.$element.parent('.magnify').append('<div class="magnify-large" \>');
            this.$element.siblings(".magnify-large").css("background","url('" + this.$element.attr("src") + "') no-repeat");

            this.$element.parent('.magnify').on(event + '.' + this.type, $.proxy(this.check, this));
            this.$element.parent('.magnify').on(eventOut + '.' + this.type, $.proxy(this.check, this));
        }

        , getOptions: function (options) {
            options = $.extend({}, $.fn[this.type].defaults, options, this.$element.data())

            if (options.delay && typeof options.delay == 'number') {
                options.delay = {
                    show: options.delay
                    , hide: options.delay
                }
            }

            return options
        }

        , check: function (e) {
            var container = $(e.currentTarget);
            var self = container.children('img');
            var mag = container.children(".magnify-large");

            // Get the native dimensions of the image
            if(!this.nativeWidth && !this.nativeHeight) {
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

                if(mag.is(":visible"))
                {
                    var rx = Math.round(mx/container.width()*this.nativeWidth - mag.width()/2)*-1;
                    var ry = Math.round(my/container.height()*this.nativeHeight - mag.height()/2)*-1;
                    var bgp = rx + "px " + ry + "px";

                    var px = mx - mag.width()/2;
                    var py = my - mag.height()/2;

                    mag.css({left: px, top: py, backgroundPosition: bgp});
                }
            }

        }
    }


    /* MAGNIFY PLUGIN DEFINITION
     * ========================= */

    $.fn.magnify = function ( option ) {
        return this.each(function () {
            var $this = $(this)
                , data = $this.data('magnify')
                , options = typeof option == 'object' && option
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

    $(window).on('load', function () {
        $('[data-toggle="magnify"]').each(function () {
            var $mag = $(this);
            $mag.magnify()
        })
    })

} ( window.jQuery );
	</script>
	
<script type="text/javascript">
	$(document).on('click', '.number-spinner button', function () {    
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