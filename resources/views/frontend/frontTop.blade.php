@if(Auth::guard('visitor')->check())
<section id="top">
 <div class="container">
  <div class="row">
   <div class="top_1 clearfix">
	<div class="col-sm-6">
	 <div class="top_1r text-right clearfix">
	  <ul class="mgt">
        <li>Welcome to Home Shop  </li>
	   <!-- <li><i class="fa fa-user col_1"></i> <a href="#"> My account</a></li> -->
	   <li class="border_none"><i class="fa fa-power-off col_1"></i> <a href="{{route('frontend.authenticate.logout')}}"> Logout</a></li>
	  </ul>
	 </div>
	</div>
   </div>
  </div>
 </div>
</section>
@else
<section id="top">
 <div class="container">
  <div class="row">
   <div class="top_1 clearfix">
	<div class="col-sm-6">
	 <div class="top_1r text-right clearfix">
	  <ul class="mgt">
	   <li class="border_none"><i class="fa fa-power-off col_1"></i> <a href="{{route('frontend.authenticate.login')}}">Customer Login</a></li>
	   <li class="border_none"><i class="fa fa-power-off col_1"></i> <a href="{{route('seller.login')}}"> Perhaps A Seller??</a></li>
	  </ul>
	 </div>
	</div>
   </div>
  </div>
 </div>
</section>
@endif