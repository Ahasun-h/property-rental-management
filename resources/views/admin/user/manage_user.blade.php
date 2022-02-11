@extends('admin.master')

@section('title', 'Property Rental | Manage User')

@section('body')

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            @if(Session::get('message'))
                <div id="msg" class="alert alert-success left-icon-alert text-center" role="alert">
                    <strong>Well Done! &nbsp;</strong>{{ Session::get('message') }}
                </div>
            @endif
            <h1 class="m-0 text-dark">Manage User</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      
      <div class="col-md-12" style="margin: 0 auto;">
          <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables">
              <thead>
                  <tr>
                      <th class="text-center">Sl No.</th>
                      <th class="text-center">Name</th>
                      <th class="text-center">Email</th>
                      <th class="text-center">Mobile</th>
                      <th class="text-center">Profile Photo</th>
                      <th class="text-center">Address</th>
                      <th class="text-center">Status</th>
                      <th class="text-center" width="10%">Action</th>
                  </tr>
              </thead>
              <tbody>
              @php($i=1)
              @foreach($users as $user)
                  <tr class="odd gradeX">
                      <td>{{ $i++ }}</td>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->email }}</td>
                      <td>{{ $user->mobile }}</td>
                      <td><img src="{{ asset(  $user->user_profile_photo ) }}" width="50px" height="50px"></td>
                      <td>{{ $user->address }}</td>
                      <td>{{ $user->status == 1 ? 'Active' : 'Banned' }}</td>

                      <td class="text-center">
                        @if($user->status == 1)
                          <a class="btn btn-info btn-xs" href="{{ route('ban-user', ['id'=>$user->id]) }}" onclick="return confirm('Are you sure to Ban this User?');" title="Ban User">
                            <i class="fas fa-arrow-up"></i>
                          </a>
                        @else
                          <a class="btn btn-warning btn-xs" href="{{ route('active-user', ['id'=>$user->id]) }}" onclick="return confirm('Are you sure to Active this user?');" title="Active">
                            <i class="fas fa-arrow-down"></i>
                          </a>
                        @endif
                        <a class="btn btn-success btn-xs" href="{{ route('edit-user', ['id'=>$user->id]) }}" title="Edit">
                          <i class="fas fa-edit"></i>
                        </a>
                        <a class="btn btn-danger btn-xs" href="{{ route('delete-user', ['id'=>$user->id]) }}" onclick="return confirm('Are you sure to delete this user?');" title="Delete">
                          <i class="fas fa-trash-alt"></i>
                        </a>
                      </td>
                  </tr>
              @endforeach
              </tbody>
          </table>
      </div>
    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->

@endsection