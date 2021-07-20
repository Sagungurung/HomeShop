<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/uploads/sellerPhotos/{{$sellers->image}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Hi {{$sellers->firstname}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
      <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>My Products</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{route('seller.products.indexProducts')}}"><i class="fa fa-circle-o"></i> View Products</a></li>
            <li class="active"><a href="{{route('seller.products.createProducts')}}"><i class="fa fa-circle-o"></i> Add Products</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{route('seller.sellerCategories.index')}}"><i class="fa fa-circle-o"></i> View Category</a></li>
            <li class="active"><a href="{{route('seller.sellerCategories.create')}}"><i class="fa fa-circle-o"></i> Create Category</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-plus"></i> <span>Blog</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{route('seller.sellerblog.index')}}"><i class="fa fa-circle-o"></i> My Blogs</a></li>
            <li class="active"><a href="{{route('seller.sellerblog.create')}}"><i class="fa fa-circle-o"></i> Create Blog</a></li>
          </ul>
        </li>
        <!-- <li class="treeview"><a href="{{route('seller.sellerblog.create')}}"><i class="fa fa-circle-o"></i>Orders</a></li> -->
        <li class="active"><a href="{{route('seller.settings')}}"><i class="fa fa-circle-o"></i> Settings</a></li>
       </ul>  
    </section>
  </aside>