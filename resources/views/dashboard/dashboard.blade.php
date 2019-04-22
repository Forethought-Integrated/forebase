@extends('layouts.adminApp')

@section('title', 'AppsStore')

@section('headAdminScriptUpdate')
<script language="JavaScript" type="text/javascript" src="{{ asset('/js/app.js')}}" async></script>
<link type= "text/css" href="{{ ('/css/custom.css')}}" async>

@endsection

@section('ContentHeader(Page_header)')
   <h1>
       Applications
  </h1>
 
@endsection

@section('MainContent')

<div class="row">
  <!--  column -->
  <div class="col-md-12">
    <!-- Horizontal Form -->
    <div class="card card-info logo_inner">
      <div class="card-header">
        <center><h3 class="card-title">Apps</h3></center>
      </div>
      <!-- /.card-header -->
    </div>
  </div>
</div>


<div class="row dashboard" >


    <div  class="col-md-2 text-center">

  <div class="column col_logo">
    <a href="{{ asset('/crm') }}" title="">
      <!-- <center> -->
          <img src="{{asset("/img/admin/apps/CRM.png")}}" alt="Snow" class="img-dashboard" >
       <span class="dashboard-text-lineheight">CRM</span>
      <!-- </center> -->
    </a>
  </div>
</div>


    <div  class="col-md-2 text-center">

  <div class="column col_logo">
    <a href="{{ asset('/social') }}" title="">
      <!-- <center>   -->
          <img src="{{asset("/img/admin/apps/Socials.png")}}" alt="Snow" class="img-dashboard">
        <span class="dashboard-text-lineheight">Social</span>
      <!-- </center> -->
    </a>

  </div>
</div>


   <div  class="col-md-2 text-center">

  <div class="column col_logo">
    <a href="{{ asset('/knowledge') }}" title="">
      <!-- <center> -->
      <img src="{{asset("/img/admin/apps/File-manager.png")}}" alt="Snow" class="img-dashboard">
      <span class="dashboard-text-lineheight">Files</span>
    <!-- </center> -->
    </a>
  </div>
</div>




<div  class="col-md-2 text-center">

  <div class="column col_logo">
    <a href="#">
      <!-- <center> -->
      <img src="{{asset("/img/admin/apps/Chat.png")}}" alt="Snow" class="img-dashboard">
      <span class="dashboard-text-lineheight">Chat</span>
    <!-- </center> -->
  </a>
  </div>
</div>

            <div class="col-md-2 text-center">

        <div class="column col_logo">
    <a href="#">
      <!-- <center> -->
      <img src="{{asset("/img/admin/apps/Sphere-logo.png")}}" alt="Snow" class="img-dashboard">
      <span class="dashboard-text-lineheight">Sphere</span>
    <!-- </center> -->
  </a>
  </div>
</div>

    <div  class="col-md-2 text-center">

  <div class="column col_logo">
    <a href="#">
      <img src="{{asset("/img/admin/apps/Dashboard.png")}}" alt="Snow" class="img-dashboard">
      <br>
     <span class="dashboard-text-lineheight">Dashboard</span>
  </a>
  </div>
</div>

    <div  class="col-md-2 text-center">

  <div class="column col_logo">
    <a href="#">
      <img src="{{asset("/img/admin/apps/Email.png")}}" alt="Snow" class="img-dashboard">
      <br>
      <span class="dashboard-text-lineheight">Email</span>
  </a>
  </div>
</div>

    <div  class="col-md-2 text-center">

  <div class="column col_logo">
    <a href="#">
      <img src="{{asset("/img/admin/apps/Event.png")}}" alt="Snow" class="img-dashboard">
      <br>
      <span class="dashboard-text-lineheight">Event</span>
  </a>
  </div>
</div>

<div  class="col-md-2 text-center">

  <div class="column col_logo">
    <a href="#">
      <img src="{{asset("/img/admin/apps/Calendar.png")}}" alt="Snow" class="img-dashboard">
      <span class="dashboard-text-lineheight">Calender</span>
  </a>
  </div>
</div>

    <div  class="col-md-2 text-center">

  <div class="column col_logo  ">
    <a href="#">
      <center>
      <img src="{{asset("/img/admin/apps/Mailbox.png")}}" alt="Snow" class="img-dashboard">
      <br>
      <span class="dashboard-text-lineheight">Mailbox</span>
    </center>
  </a>
  </div>
</div>

<div  class="col-md-2 text-center">

  <div class="column col_logo">
    <a href="#">
      <img src="{{asset("/img/admin/apps/Meeting.png")}}" alt="Snow" class="img-dashboard">
      <span class="dashboard-text-lineheight">Meeting</span>
  </a>
  </div>
</div>

  <div class="col-md-2 text-center">
  <div class="column col_logo">
    <a href="#">
      <img src="{{asset("/img/admin/apps/Bullhorn-logo.png")}}" alt="Snow" class="img-dashboard">
      <span class="dashboard-text-lineheight">Bullhorn</span>
  </a>
  </div>

</div>

    <div  class="col-md-2 text-center">

  <div class="column col_logo">
    <a href="#">
      <img src="{{asset("/img/admin/apps/Admin.png")}}" alt="Snow" class="img-dashboard">
      <br>
      <span class="dashboard-text-lineheight">Admin</span>
  </a>
  </div>


  <div  class="col-md-2 text-center">

  <div class="column col_logo">
    <a href="#">
      <img src="{{asset("/img/admin/apps/Task.png")}}" alt="Snow" class="img-dashboard">
      <br>
  </div>
</di
</a>

</div>



    </div>




        </div>




      </div>

    </div>
  </div>
  <!-- /.row -->
<style>
.logo_inner{background: #f4f6f9;}
  .col_logo{padding: 25px;}
}
.file_img img {
    width: 75px;
}
</style>



@endsection

@section('bodyScriptUpdate')

@endsection