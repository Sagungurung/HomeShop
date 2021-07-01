<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Hi</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
      <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Products</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{route('admin.category.index')}}"><i class="fa fa-circle-o"></i> View Products</a></li>
            <li class="active"><a href="{{route('admin.category.create')}}"><i class="fa fa-circle-o"></i> Add Products</a></li>
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
            <li class="active"><a href="{{route('admin.category.index')}}"><i class="fa fa-circle-o"></i> View Category</a></li>
            <li class="active"><a href="{{route('admin.category.create')}}"><i class="fa fa-circle-o"></i> Create Category</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Orders</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{route('admin.category.index')}}"><i class="fa fa-circle-o"></i> View Products</a></li>
            <li class="active"><a href="{{route('admin.category.create')}}"><i class="fa fa-circle-o"></i> Add Products</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{route('admin.category.index')}}"><i class="fa fa-circle-o"></i> Change Profile</a></li>
            <li class="active"><a href="{{route('admin.category.create')}}"><i class="fa fa-circle-o"></i> Add Products</a></li>
          </ul>
        </li>
        
      
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-plus"></i> <span>Blog</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{route('admin.blog.index')}}"><i class="fa fa-circle-o"></i> View Blog</a></li>
            <li class="active"><a href="{{route('admin.blog.create')}}"><i class="fa fa-circle-o"></i> Create Blog</a></li>
          </ul>
        </li> --> -->
      </ul>  
    </section>
    <!-- /.sidebar -->
  </aside>