<!-- jQuery -->
<script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin/dist/js/adminlte.js') }}"></script>
<script src="{{ asset('admin/assets/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/sweetalert.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom.js') }}"></script>

{{-- message remove every page --}}
<script>
    $(document).ready(function() {
        $('#msg').click(function() {
            $(this).text(' ');
        });
        
        $('.alert').click(function() {
            $(this).remove();
        });
    });
</script>