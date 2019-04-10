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
          <center>
          <img src="{{asset("/img/administration/permission-&-role.png")}}" alt="Snow" style="width:80%">
          <br>
          Permissions
        </center>
        </a>
      </div>
    </div>
@endcan

 @can('users')
    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="{{ asset('/users')}}" title="">
          <center>
          <img src="{{asset("/img/administration/user.png")}}" alt="Snow" style="width:80%">
          <br>
          Users
        </center>
        </a>
        
      </div>
    </div>
  @endcan
    
  @can('roles')

    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="{{ asset('/roles')}}" title="">
          <center>
          <img src="{{asset("/img/administration/role.png")}}" alt="Snow" style="width:80%">
          <br>
          Role
        </center>
        </a>
      
      </div>
    </div>
   @endcan
      
  @can('menus')
    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="{{ asset('/menus')}}" title="">
          <center>
          <img src="{{asset("/img/administration/menu.png")}}" alt="Snow" style="width:80%">
          <br>
          Menu
        </center>
        </a>
      </div>
    </div>
  @endcan

  @can('menudetails')
    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="{{asset('/menudetails')}}" title="">
          <center>
          <img src="{{asset("/img/administration/customized-menu.png")}}" alt="Snow" style="width:80%">
          <br>
          Custom Menu
        </center>
        </a>
      </div>
    </div>
  @endcan

  @can('datamapper')

    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="{{ asset('/datamapper')}}" title="">
          <center>
          <img src="{{asset("/img/administration/mapper.png")}}" alt="Snow" style="width:80%">
          <br>
          Data Mapper
        </center>
        </a>
      </div>
    </div>
    @endcan

    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="{{ asset('/foldericon')}}" title="">
          <center>
          <img src="{{asset("/img/administration/folder-setting.png")}}" alt="Snow" style="width:80%">
          <br>
          Folder Settings
        </center>
        </a>
      </div>
    </div>

    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="{{ asset('/UsersDomains')}}" title="">
          <center>
          <img src="{{asset("/img/administration/authorised-domains.png")}}" alt="Snow" style="width:80%">
          Authorized Domain
        </a>
      </div>
    </div>

    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="{{ asset('/location')}}" title="">
          <center>
          <img src="{{asset("/img/administration/location.png")}}" alt="Snow" style="width:80%">
          Location
        </a>
      </div>
    </div>

    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="{{ asset('/department')}}" title="">
          <center>
          <img src="{{asset("/img/administration/department.png")}}" alt="Snow" style="width:80%">
          Department
        </a>
      </div>
    </div>  

    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="{{ asset('/team')}}" title="">
          <center>
          <img src="{{asset("/img/administration/menu.png")}}" alt="Snow" style="width:80%">
          <label>Team</label>
        </a>
      </div>
    </div> 

    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="{{ asset('/user_team')}}" title="">
          <img src="{{asset("/img/administration/menu.jpg")}}" alt="Snow" style="width:100%">
          <label>User Team</label>
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