<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('include.headDefaultScript')
    @include('include.headAdminScript')
    @yield('headAdminScriptUpdate')
    
</head>
<body>
    <!--  @if(Session::has('flash_message'))
            <div class="container">      
                <div class="alert alert-success"><em> {!! session('flash_message') !!}</em>
                </div>
            </div>
        @endif  -->
        <!-- wrapper -->
     
                <!-- Content Header (Page header) -->


<h1>Welcome</h1>

You Are Register Succesfully, Acctivate Your Account on by clicking on link send to your email ID
              




     
        
</body>
</html>
