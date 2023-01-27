<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('images/logoperusahaan.JPG') }}" type="image" sizes="16x16">
    <title>SIM ASET | @yield('title')</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"
        type='text/css'>
    <link rel="stylesheet" href="{{ asset('v_templates_lte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Datatables Style -->
    <link rel="stylesheet"
        href="{{ asset('v_templates_lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('v_templates_lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('v_templates_lte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('v_templates_lte/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('v_templates_lte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
</head>

<body class="hold-transition sidebar-mini">
    @include('sweetalert::alert')
    <!-- Navbar -->
    @include('partials.v_navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('partials.v_sidebar')
    <!-- /.sidebar -->

    <!-- Content Wrapper. Contains page content -->
    @include('partials.v_content')
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    @include('partials.v_footer')
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ asset('v_templates_lte/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('v_templates_lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('v_templates_lte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('v_templates_lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('v_templates_lte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('v_templates_lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('v_templates_lte/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('v_templates_lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('v_templates_lte/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('v_templates_lte/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('v_templates_lte/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('v_templates_lte/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('v_templates_lte/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('v_templates_lte/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('v_templates_lte/plugins/sweetalert2.all.min.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.com/libraries/bootstrap-modal"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('v_templates_lte/dist/js/adminlte.min.js') }}"></script>

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["excel", "pdf", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>
