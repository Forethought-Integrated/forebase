@extends('layouts.adminApp')

@section('title', 'AppsStore')

@section('headAdminScriptUpdate')
<script language="JavaScript" type="text/javascript" src="{{ asset('/js/app.js')}}" async></script>
@endsection

@section('ContentHeader(Page_header)')
   <h1>
       Apps
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{asset('/')}}"><i class="fa fa-dashboard"></i>Home</a></li>
    <li class="active">Apps Store</li>
  </ol>
@endsection

@section('MainContent')

<div class="row">
  <!--  column -->
  <div class="col-md-12">
    <!-- Horizontal Form -->
    <div class="card card-info logo_inner">
      <div class="card-header">
        <center><h3 class="card-title">Apps Store</h3></center>
      </div>
      <!-- /.card-header -->
    </div>
  </div>
</div>


<div class="row" style="padding: 25px">


    <div  class="col-md-2">

  <div class="column col_logo">
    <a href="{{ asset('/crm') }}" title="">
      <center>
          <img src="{{asset("/img/admin/apps/CRM.png")}}" alt="Snow" style="width:80%">
        <br>
        CRM
      </center>
    </a>
  </div>
</div>


    <div  class="col-md-2">

  <div class="column col_logo">
    <a href="{{ asset('/social') }}" title="">
      <center>  
          <img src="{{asset("/img/admin/apps/Socials.png")}}" alt="Snow" style="width:80%">
        <br>
        Social
      </center>
    </a>

  </div>
</div>


   <div  class="col-md-2">

  <div class="column col_logo">
    <a href="{{ asset('/knowledge') }}" title="">
      <center>
      <img src="{{asset("/img/admin/apps/File-manager.png")}}" alt="Snow" style="width:80%">
      <br>
      Files
    </center>
    </a>
  </div>
</div>




<div  class="col-md-2">

  <div class="column col_logo">
    <a href="#">
      <center>
      <img src="{{asset("/img/admin/apps/Chat.png")}}" alt="Snow" style="width:80%">
      <br>
      Chat
    </center>
  </a>
  </div>
</div>

            <div class="col-md-2">

        <div class="column col_logo">
    <a href="#">
      <center>
      <img src="{{asset("/img/admin/apps/Sphere-logo.png")}}" alt="Snow" style="width:80%">
      <br>
      Sphere
    </center>
  </a>
  </div>
</div>

    <div  class="col-md-2">

  <div class="column col_logo">
    <a href="#">
      <center>
      <img src="{{asset("/img/admin/apps/Dashboard.png")}}" alt="Snow" style="width:80%">
      <br>
      Dashboard
    </center>
  </a>
  </div>
</div>

    <div  class="col-md-2">

  <div class="column col_logo">
    <a href="#">
      <center>
      <img src="{{asset("/img/admin/apps/Email.png")}}" alt="Snow" style="width:80%">
      <br>
      Email
    </center>
  </a>
  </div>
</div>

    <div  class="col-md-2">

  <div class="column col_logo">
    <a href="#">
      <center>
      <img src="{{asset("/img/admin/apps/Event.png")}}" alt="Snow" style="width:80%">
      <br>
      Event
    </center>
  </a>
  </div>
</div>

<div  class="col-md-2">

  <div class="column col_logo">
    <a href="#">
      <center>
      <img src="{{asset("/img/admin/apps/Calendar.png")}}" alt="Snow" style="width:80%">
      <br>
      Calender
    </center>
  </a>
  </div>
</div>

    <div  class="col-md-2">

  <div class="column col_logo  ">
    <a href="#">
      <center>
      <img src="{{asset("/img/admin/apps/Mailbox.png")}}" alt="Snow" style="width:80%">
      <br>
      Mailbox
    </center>
  </a>
  </div>
</div>

<div  class="col-md-2">

  <div class="column col_logo">
    <a href="#">
      <center>
      <img src="{{asset("/img/admin/apps/Meeting.png")}}" alt="Snow" style="width:80%">
      <br>
      Meating
    </center>
  </a>
  </div>
</div>

  <div class="col-md-2">
  <div class="column col_logo">
    <a href="#">
      <center>
      <img src="{{asset("/img/admin/apps/Bullhorn-logo.png")}}" alt="Snow" style="width:80%">
      <br>
      Bullhorn
    </center>
  </a>
  </div>

</div>

    <div  class="col-md-2">

  <div class="column col_logo">
    <a href="#">
      <center>
      <img src="{{asset("/img/admin/apps/Admin.png")}}" alt="Snow" style="width:80%">
      <br>
      Admin
    </center>
  </a>
  </div>


  <div  class="col-md-2">

  <div class="column col_logo">
    <a href="#">
      <center>
      <img src="{{asset("/img/admin/apps/Task.png")}}" alt="Snow" style="width:80%">
      <br>
    </center>
  </div>
</di
</a>v>

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