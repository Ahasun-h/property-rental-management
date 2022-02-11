<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('/') }}" class="brand-link">
      <img src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" alt="Property Rental Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Property Rental</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ \Auth::guard('admin')->user()->admin_profile_photo }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a class="d-block">{{ \Auth::guard('admin')->user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item has-treeview menu-open">
            <span class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </span>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                User
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{ route('add-user') }}" class="nav-link">
                  <i class="nav-icon fa fa-plus text-info"></i>
                  <i class="" aria-hidden="true"></i>
                  <p>Add User</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('manage-user') }}" class="nav-link">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Manage User</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-rss"></i>
              <p>
                Post
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-plus text-info"></i>
                  <i class="" aria-hidden="true"></i>
                  <p>Add Post</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('manage-post') }}" class="nav-link">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Manage Post</p>
                </a>
              </li>

            </ul>
          </li>


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>
                User Interest
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{ route('manage-interest') }}" class="nav-link">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>User Interest</p>
                </a>
              </li>

            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
