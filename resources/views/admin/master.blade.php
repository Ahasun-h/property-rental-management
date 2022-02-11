<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>@yield('title')</title>
		<!-- include all style css file --> 
		@include('admin.includes.style')
	</head>
	<body class="hold-transition sidebar-mini layout-fixed">
		<div class="wrapper">

			<!-- Navbar -->
			@include('admin.includes.header')
			 <!-- /.navbar -->

			 <!-- Main Sidebar Container -->
			@include('admin.includes.sidebar_left')
			 <!-- /.Main Sidebar Container -->
			 
			<!-- Content Wrapper. Contains page content -->
			<!-- Dynamic content will go here -->
			@section('body')
			@show
			 <!-- /.content-wrapper -->
			 
			 <!--  include footer content -->
			@include('admin.includes.footer')

		</div>
		<!-- ./wrapper -->

		<!-- include all style css file --> 
		@include('admin.includes.script')
		
	</body>
</html>
