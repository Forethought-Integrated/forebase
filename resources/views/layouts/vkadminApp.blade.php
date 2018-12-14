<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('inc.headDefaultScript')
    @include('inc.headAdminScript')
    @yield('headAdminScriptUpdate')
    
</head>
<body class="hold-transition sidebar-mini" style="font-size: 13px">
        <!-- wrapper -->
        <div class="wrapper">

            <!-- Navbar -->
            @include('inc.navbar')
            <!-- /.navbar -->
            <!-- Main Sidebar Container -->
            @include('inc.sidebar')
            <!-- ./Main Sidebar Container -->

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">


                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <!-- /.container-fluid -->
                    <div class="container-fluid">
                            @yield('ContentHeader(Page_header)')
                     </div><!-- /.container-fluid -->
                </div><!-- Content Header (Page header) -->

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        @yield('MainContent')
                    </div>
                </section>
                <!-- ./Main content -->


                <!-- Control Sidebar -->
                <aside class="control-sidebar control-sidebar-dark">
                     <!-- Control sidebar content goes here -->
                 </aside>
                <!-- /.control-sidebar -->


            </div>
            <!-- /.Content Wrapper. Contains page content -->
             
            @include('inc.footer')

        </div>
        <!-- ./wrapper -->

        @include('inc.bodyScript')

        @yield('bodyScriptUpdate')
        
</body>
</html>
