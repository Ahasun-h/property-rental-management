<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('/') }}" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <ul class="nav navbar-nav ml-auto navbar-right">
         
          <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fas fa-user-circle"></i> {{ \Auth::guard('admin')->user()->name }}
            </a>
            <ul class="dropdown-menu dropdown-user">
              
                <li>
                  <a class="nav-link" href="{{ route('profile') }}"><i class="fas fa-users"></i> Profile</a> 
                </li>
                <hr>
                <li>
                  <a class="nav-link" href="{{ route('adminLogout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i> Logout</a>

                    <form id="logout-form" action="{{ route('adminLogout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
            
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
          <!-- /.dropdown -->
      </ul>
              
  </nav>