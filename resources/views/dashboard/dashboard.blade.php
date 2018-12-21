@extends('layouts.adminApp')

@section('title', 'AppsStore')

@section('headAdminScriptUpdate')
<script language="JavaScript" type="text/javascript" src="{{ asset('/js/app.js')}}" async></script>
@endsection

@section('ContentHeader(Page_header)')



 <h1>
        Apps
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
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
    <a href="/crm" title="">
    <img src="{{asset("/img/admin/apps/CRM.jpg")}}" alt="Snow" style="width:100%">
  </a>
  </div>
</div>


    <div  class="col-md-2">
  
  <div class="column col_logo">
    <a href="/social" title="">
      <img src="{{asset("/img/admin/apps/Socials.jpg")}}" alt="Snow" style="width:100%">
    </a>
    
  </div>
</div>


   <div  class="col-md-2">
  
  <div class="column col_logo">
    <a href="knowledge" title="">
    <img src="{{asset("/img/admin/apps/File manager.jpg")}}" alt="Snow" style="width:100%">
    </a>
  </div>
</div>




<div  class="col-md-2">
  
  <div class="column col_logo">
    <img src="{{asset("/img/admin/apps/Chat.jpg")}}" alt="Snow" style="width:100%">
  </div>
</div>
    
            <div class="col-md-2">
          
        <div class="column col_logo">
    <img src="{{asset("/img/admin/apps/Sphere-logo.jpg")}}" alt="Snow" style="width:100%">
  </div>
</div>
    
    <div  class="col-md-2">
  
  <div class="column col_logo">
    <img src="{{asset("/img/admin/apps/Dashboard.jpg")}}" alt="Snow" style="width:100%">
  </div>
</div>
    
    <div  class="col-md-2">
  
  <div class="column col_logo">
    <img src="{{asset("/img/admin/apps/Email.jpg")}}" alt="Snow" style="width:100%">
  </div>
</div>
    
    <div  class="col-md-2">
  
  <div class="column col_logo">
    <img src="{{asset("/img/admin/apps/Event.jpg")}}" alt="Snow" style="width:100%">
  </div>
</div>
    
<div  class="col-md-2">
  
  <div class="column col_logo">
    <img src="{{asset("/img/admin/apps/Calendar.jpg")}}" alt="Snow" style="width:100%">
  </div>
</div>
    
    <div  class="col-md-2">
  
  <div class="column col_logo  ">
    <img src="{{asset("/img/admin/apps/Mailbox.jpg")}}" alt="Snow" style="width:100%">
  </div>
</div>

<div  class="col-md-2">
  
  <div class="column col_logo">
    <img src="{{asset("/img/admin/apps/Meeting.jpg")}}" alt="Snow" style="width:100%">
  </div>
</div>
    
  <div class="col-md-2">
  <div class="column col_logo">
    <img src="{{asset("/img/admin/apps/Bullhorn-logo.jpg")}}" alt="Snow" style="width:100%">
  </div>

</div>
    
    <div  class="col-md-2">
  
  <div class="column col_logo">
    <img src="{{asset("/img/admin/apps/Admin.jpg")}}" alt="Snow" style="width:100%">
  </div>


  <div  class="col-md-2">
  
  <div class="column col_logo">
    <img src="{{asset("/img/admin/apps/Task.jpg")}}" alt="Snow" style="width:100%">
  </div>
</div>

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