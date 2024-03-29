<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{asset('/admin/main')}}" class="brand-link">
        <img src="{{asset('/template/admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{url('/template/admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{asset('/admin/main')}}" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Sidebar Menu -->
         <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="{{asset('/admin/main')}}" class="nav-link">
                <i class="nav-icon fas fa-align-justify"></i>
                <p>
                  Danh Mục
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{asset('/admin/menus/add')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Thêm Danh Mục</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{asset('/admin/menus/list')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Danh sách danh mục</p>
                  </a>
                </li>
              </ul>
            </li>
  
        </nav> 

        
        <!-- /.sidebar-product -->
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="{{asset('/admin/main')}}" class="nav-link">
                <i class="nav-icon fas fal fa-shopping-bag"></i>
                <p>
                  Sản Phẩm
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{asset('/admin/product/add')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Thêm Sản Phẩm</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{asset('/admin/product/list')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Danh sách sản phẩm</p>
                  </a>
                </li>
              </ul>
            </li>
  
        </nav> 
        <!-- /.Slider -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="{{asset('/admin/main')}}" class="nav-link">
                <i class="nav-icon fas fa-images"></i>
                <p>
                  Slider
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{asset('/admin/sliders/add')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Thêm Slider</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{asset('/admin/sliders/list')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Danh sách Slider</p>
                  </a>
                </li>
              </ul>
            </li>
  
        </nav> 
    </div>

    
</aside>
