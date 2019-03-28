@extends('layouts.adminApp')

@section('title', 'Administration Dashboard')

@section('headAdminScriptUpdate')
<script language="JavaScript" type="text/javascript" src="{{ asset('/js/app.js')}}" async></script>
@endsection

@section('ContentHeader(Page_header)')

 <h1>
        Admin
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{asset('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Admin</li>
      </ol>


@endsection

@section('MainContent')

@can('permissions')

  <div class="row" style="padding: 25px">

    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="{{ asset('/permissions')}}" title="">
          <img src="{{asset("/img/administration/permission-&-role.jpg")}}" alt="Snow" style="width:100%">
        </a>
      </div>
    </div>
@endcan

 @can('users')
    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="{{ asset('/users')}}" title="">
          <img src="{{asset("/img/administration/user.jpg")}}" alt="Snow" style="width:100%">
        </a>
        
      </div>
    </div>
  @endcan
    
  @can('roles')

    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="{{ asset('/roles')}}" title="">
          <img src="{{asset("/img/administration/role.jpg")}}" alt="Snow" style="width:100%">
        </a>
      
      </div>
    </div>
   @endcan
      
  @can('menus')
    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="{{ asset('/menus')}}" title="">
          <img src="{{asset("/img/administration/menu.jpg")}}" alt="Snow" style="width:100%">
        </a>
        
      </div>
    </div>
  @endcan

  @can('menudetails')
    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="{{asset('/menudetails')}}" title="">
          <img src="{{asset("/img/administration/customize.jpg")}}" alt="Snow" style="width:100%">
        </a>
        
      </div>
    </div>
  @endcan

  @can('datamapper')

    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="{{ asset('/datamapper')}}" title="">
          <img src="{{asset("/img/administration/mapper.jpg")}}" alt="Snow" style="width:100%">
        </a>
        
      </div>
    </div>
    @endcan

    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="{{ asset('/foldericon')}}" title="">
          <img src="{{asset("/img/administration/mapper.jpg")}}" alt="Snow" style="width:100%">
        </a>
        
      </div>
    </div>

    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="{{ asset('/UsersDomains')}}" title="">
          <img src="{{asset("/img/administration/menu.jpg")}}" alt="Snow" style="width:100%">
          <label>User Settings</label>
        </a>
      </div>
    </div>

    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="{{ asset('/location')}}" title="">
          <img src="{{asset("/img/administration/menu.jpg")}}" alt="Snow" style="width:100%">
          <label>Location</label>
        </a>
      </div>
    </div>

    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="{{ asset('/department')}}" title="">
          <img src="{{asset("/img/administration/menu.jpg")}}" alt="Snow" style="width:100%">
          <label>Department</label>
        </a>
      </div>
    </div>


      
    
    

       


</div>
@endsection

@section('bodyScriptUpdate')

<style>
.logo_inner{background: #f4f6f9;}
  .col_logo{padding: 25px;}
}
.file_img img {
    width: 75px;
}
</style>


@endsection