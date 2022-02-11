@extends('admin.master')

@section('title', 'Property Rental | Admin Profile')

@section('body')

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0 text-dark">Profile</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6" style="margin: 0 auto;">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{ asset($adminDetails->admin_profile_photo) }}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{ $adminDetails->name }}</h3>

                <p class="text-muted text-center">Software Engineer</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right">{{ $adminDetails->email }}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Mobile</b> <a class="float-right">{{ $adminDetails->mobile }}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Status</b> <a class="float-right">{{ $adminDetails->status == 1 ? 'Active' : '' }}</a>
                  </li>
                </ul>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          </div>
          <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->

@endsection