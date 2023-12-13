<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    @include('layouts.link')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    @section('wrapper')
        <div class="wrapper">

            <!-- Preloader -->
            @include('layouts.loader')

            <!-- Navbar -->
            @include('layouts.nav')
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            @include('layouts.sidebar')
            <!-- Content Wrapper. Contains page content -->
        @section('edit')
            @yield('edit')
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                      
                    </div>


                </div>
                </section>
                <!-- /.content -->
            </div>
        @show
        <!-- /.content-wrapper -->
        @include('layouts.footer')
    </div>
    <!-- ./wrapper -->
@show
@section('scripts')
    @include('layouts.script')
@show
</body>

</html>
