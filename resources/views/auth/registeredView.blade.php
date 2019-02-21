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

<center>
<h1>Welcome</h1>

Thank you for registering!
<br>
You have registered sucessfully,to activate your account click on the link sent to your registered email ID.
</center>
{{-- //You are Register Succesfully, Acctivate Your Account on by clicking on link send to your email ID --}}
              




     
        
</body>
</html>
