@extends('layouts.adminApp')

@section('title', 'Administration Dashboard')

@section('headAdminScriptUpdate')
<script language="JavaScript" type="text/javascript" src="{{ asset('/js/app.js')}}" async></script>
<link type= "text/css" href="{{ ('/css/custom.css')}}" async>

@endsection

@section('ContentHeader(Page_header)')

 <h1>
        Admin
        <small>Control panel</small>
      </h1>
      <!-- <ol class="breadcrumb">
        <li><a href="{{asset('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Admin</li>
      </ol> -->


@endsection

@section('MainContent')

@can('permissions')

  <div class="row dashboard">

    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="{{ asset('/permissions')}}" title="">
          <img src="{{asset("/img/administration/permission-&-role.png")}}" alt="Snow" class="img-dashboard">
         <span class="dashboard-text-lineheight">Permissions</span>
        </a>
      </div>
    </div>
@endcan

 @can('users')
    <div  class="col-md-2 text-center">
      <div class="column col_logo">
        <a href="{{ asset('/users')}}" title="">
          <img src="{{asset("/img/administration/user.png")}}" alt="Snow" class="img-dashboard">
          <br>
          <span class="dashboard-text-lineheight">Users</span>
        </a>
        
      </div>
    </div>
  @endcan
    
  @can('roles')

    <div  class="col-md-2 text-center">
      <div class="column col_logo">
        <a href="{{ asset('/roles')}}" title="">
          <img src="{{asset("/img/administration/role.png")}}" alt="Snow" class="img-dashboard">
          <br>
         <span class="dashboard-text-lineheight">Role</span>
        </a>
      
      </div>
    </div>
   @endcan
      
  @can('menus')
    <div  class="col-md-2 text-center">
      <div class="column col_logo">
        <a href="{{ asset('/menus')}}" title="">
          <img src="{{asset("/img/administration/menu.png")}}" alt="Snow" class="img-dashboard">
          <br>
          <span class="dashboard-text-lineheight">Menu</span>
        </a>
      </div>
    </div>
  @endcan

  @can('menudetails')
    <div  class="col-md-2 text-center">
      <div class="column col_logo">
        <a href="{{asset('/menudetails')}}" title="">
          <img src="{{asset("/img/administration/customized-menu.png")}}" alt="Snow" class="img-dashboard">
          <br>
         <span class="dashboard-text-lineheight">Custom Menu</span>
        </a>
      </div>
    </div>
  @endcan

  @can('datamapper')

    <div  class="col-md-2 text-center">
      <div class="column col_logo">
        <a href="{{ asset('/datamapper')}}" title="">
          <img src="{{asset("/img/administration/mapper.png")}}" alt="Snow" class="img-dashboard">
          <br>
          <span class="dashboard-text-lineheight">Data Mapper</span>
        </a>
      </div>
    </div>
    @endcan

    <div  class="col-md-2 text-center">
      <div class="column col_logo">
        <a href="{{ asset('/foldericon')}}" title="">
          <img src="{{asset("/img/administration/folder-setting.png")}}" alt="Snow" class="img-dashboard">
          <br>
          <span class="dashboard-text-lineheight">Folder Settings</span>
        </a>
      </div>
    </div>

    <div  class="col-md-2 text-center">
      <div class="column col_logo">
        <a href="{{ asset('/UsersDomains')}}" title="">
          <img src="{{asset("/img/administration/authorised-domains.png")}}" alt="Snow" class="img-dashboard">
         <span class="dashboard-text-lineheight"> AuthorizedDomain</span>
        </a>
      </div>
    </div>

    <div  class="col-md-2 text-center">
      <div class="column col_logo">
        <a href="{{ asset('/location')}}" title="">
          <img src="{{asset("/img/administration/location.png")}}" alt="Snow" class="img-dashboard">
         <span class="dashboard-text-lineheight"> Location</span>
        </a>
      </div>
    </div>

    <div  class="col-md-2 text-center">
      <div class="column col_logo">
        <a href="{{ asset('/department')}}" title="">
          <img src="{{asset("/img/administration/department.png")}}" alt="Snow" class="img-dashboard">
         <span class="dashboard-text-lineheight">Department</span>
        </a>
      </div>
    </div>  

    <div  class="col-md-2 text-center">
      <div class="column col_logo">
        <a href="{{ asset('/team')}}" title="">
          <img src="{{asset("/img/administration/team.png")}}" alt="Snow" class="img-dashboard">
          <span class="dashboard-text-lineheight">Team</span>
        </a>
      </div>
    </div> 

    <div  class="col-md-2 text-center">
      <div class="column col_logo">
        <a href="{{ asset('/user_team')}}" title="">
          <img src="{{asset("/img/administration/menu.png")}}" alt="Snow" class="img-dashboard">
          <span class="dashboard-text-lineheight">User Team</span>
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