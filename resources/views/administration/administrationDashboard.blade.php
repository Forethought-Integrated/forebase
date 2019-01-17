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
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Admin</li>
      </ol>


@endsection

@section('MainContent')

  <div class="row" style="padding: 25px">

    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="/permissions" title="">
          <img src="{{asset("/img/administration/permission-&-role.jpg")}}" alt="Snow" style="width:100%">
        </a>
      </div>
    </div>

    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="/users" title="">
          <img src="{{asset("/img/administration/users.png")}}" alt="Snow" style="width:100%">
        </a>
        <strong>User</strong>
      </div>
    </div>


    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="/roles" title="">
          <img src="{{asset("/img/administration/role.png")}}" alt="Snow" style="width:100%">
        </a>
        <strong>Role</strong>
      </div>
    </div>
      

    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="/menus" title="">
          <img src="{{asset("/img/administration/menu.png")}}" alt="Snow" style="width:100%">
        </a>
        <strong>Menu</strong>
      </div>
    </div>

    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="/menudetails" title="">
          <img src="{{asset("/img/administration/menudetail.png")}}" alt="Snow" style="width:100%">
        </a>
        <strong>Customize Menu</strong>
      </div>
    </div>

    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="/datamapper" title="">
          <img src="{{asset("/img/administration/menu.png")}}" alt="Snow" style="width:100%">
        </a>
        <strong>Mapper</strong>
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