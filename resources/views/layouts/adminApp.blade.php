<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('include.headDefaultScript')
    @include('include.headAdminScript')
    @yield('headAdminScriptUpdate')
    
</head>
<body class="hold-transition skin-blue sidebar-mini" style="font-size: 13px">
        <!-- wrapper -->
        <div class="wrapper">

            <!-- Navbar -->
            @include('include.navbar')
            <!-- /.navbar -->
            <!-- Main Sidebar Container -->
            @include('include.sidebar')
            <!-- ./Main Sidebar Container -->

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">


                <!-- Content Header (Page header) -->



                {{-- <div class="content-header"> --}}
                <section class="content-header">

                    <!-- /.container-fluid -->
                    {{-- <div class="container-fluid"> --}}
                            @yield('ContentHeader(Page_header)')
                     {{-- </div> --}}
                     <!-- /.container-fluid -->
                {{-- </div> --}}
                </section>
                <!-- Content Header (Page header) -->

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        @yield('MainContent')
                    </div>
                </section>
                <!-- ./Main content -->


                {{-- <!-- Control Sidebar -->
                <aside class="control-sidebar control-sidebar-dark">
                     <!-- Control sidebar content goes here -->
                 </aside>
                <!-- /.control-sidebar --> --}}


            </div>
            <!-- /.Content Wrapper. Contains page content -->
             
            @include('include.footer')
            {{-- Control Sidebar --}}
            {{-- @include('include.controlSidebar') --}}
            {{-- ./Control Sidebar --}}



        </div>
        <!-- ./wrapper -->

        @include('include.bodyScript')

        @yield('bodyScriptUpdate')
        
</body>
</html>
