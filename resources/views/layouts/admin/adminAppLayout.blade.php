<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('layouts.admin.includes.head')
  
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    @include('layouts.admin.includes.headLogo')
    <!-- Header Navbar: style can be found in header.less -->
    @include('layouts.admin.includes.headMenu')
  </header>

@include('layouts.admin.includes.sidebar')

@include('layouts.admin.includes.mainContainer')

@include('layouts.admin.includes.footer')



</body>
</html>
