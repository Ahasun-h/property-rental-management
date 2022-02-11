@extends('admin.master')

@section('title', 'Property Rental | Add User')

@section('body')

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            @if(Session::get('message'))
                <div id="msg" class="alert alert-danger left-icon-alert text-center" role="alert">
                    <strong>Oppps! &nbsp;</strong>{{ Session::get('message') }}
                </div>
            @endif
            <h1 class="m-0 text-dark">Add User / User Registration</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      
      <div class="col-md-8" style="margin: 0 auto;">
        <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Add User / User Registration</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('user-save') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
              @csrf
              <div class="card-body">

                <div class="form-group row">
                  <label for="name" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Enter Name ">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="email" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email Address ">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="mobile" class="col-sm-2 col-form-label">Mobile</label>
                  <div class="col-sm-10">
                    <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Enter Mobile Number ">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="user_profile_photo" class="col-sm-2 col-form-label">Profile Photo</label>
                  <div class="col-sm-10">
                    <input type="file" name="user_profile_photo" id="user_profile_photo" accept="image/png,image/jpg,image/jpeg" />
                  </div>
                </div>

                <div class="form-group row">
                  <label for="address" class="col-sm-2 col-form-label">Address</label>
                  <div class="col-sm-10">
                    <textarea name="address" id="address" cols="30" rows="5" class="form-control" placeholder="Enter Address"></textarea>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="password" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="password" class="col-sm-2 col-form-label">Confirm Password</label>
                  <div class="col-sm-10">
                    <input type="password" name="password_confirmation" class="form-control" id="password" placeholder="Confirm Password">
                  </div>
                </div>
                
              </div>
              <!-- /.card-body -->
              <div class="card-footer text-center">
                <button type="submit" class="btn btn-info">Add User</button>
              </div>
              <!-- /.card-footer -->
            </form>
          </div>
      </div>
    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->

@endsection