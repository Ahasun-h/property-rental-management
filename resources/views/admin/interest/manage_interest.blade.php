@extends('admin.master')

@section('title', 'Property Rental | Manage Interest')

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
            <h1 class="m-0 text-dark">Manage Interest</h1>
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
                      <th class="text-center">Post Title</th>
                      <th class="text-center">Category</th>
                      <th class="text-center">Division</th>
                      <th class="text-center">City</th>
                      <th class="text-center">Address</th>
                      <th class="text-center">Rent Date</th>
                      <th class="text-center">Price</th>
                      <th class="text-center">User Name</th>
                      <th class="text-center">Mobile</th>
                      <th class="text-center" width="10%">Action</th>
                  </tr>
              </thead>
              <tbody>
              @php($i=1)
              @foreach($userInterest as $interest)
                  <tr class="odd gradeX">
                      <td>{{ $i++ }}</td>
                      <td>{{ $interest->post_title}}</td>
                      <td>{{ $interest->post_category }}</td>
                      <td>{{ $interest->post_division }}</td>
                      <td>{{ $interest->post_city }}</td>
                      <td>{{ $interest->post_address }}</td>
                      <td>{{ $interest->rent_date }}</td>
                      <td>{{ $interest->renters }}</td>
                      <td>{{ $interest->userName }}</td>
                      <td>{{ $interest->mobile }}</td>


                      <td class="text-center">
                        <a class="btn btn-danger btn-xs" href="{{ route('delete-Interest', ['id'=>$interest->id]) }}" onclick="return confirm('Are you sure to delete this Post?');" title="Delete">
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
