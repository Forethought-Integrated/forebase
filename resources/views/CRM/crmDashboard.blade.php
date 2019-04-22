@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')
<script language="JavaScript" type="text/javascript" src="{{ asset('/js/app.js')}}" async></script>
<link type= "text/css" href="{{ ('/css/custom.css')}}" async>

@endsection

@section('ContentHeader(Page_header)')

<h1>
  CRM
</h1>
<!-- <ol class="breadcrumb">
  <li><a href="{{asset('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
  <li class="active">CRM</li>
</ol> -->

@endsection

@section('MainContent')

  <div class="row dashboard">

 @can('Contacts')
    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="{{ asset('/contact')}}" title="">
          <center>
            <img src="{{asset("/img/crm_dashboard/Contacts.png")}}" alt="Snow" class="img-dashboard">
           <span class="dashboard-text-lineheight">Contacts</span>
        </center>
        </a>
      </div>
    </div>
  @endcan



  @can('Accounts')
    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="{{ asset('/account')}}" title="">
          <center>
            <img src="{{asset("/img/crm_dashboard/Accounts.png")}}" alt="Snow" class="img-dashboard">
            <span class="dashboard-text-lineheight">Accounts</span>
        </center>
        </a>
      </div>
    </div>
  @endcan


  @can('Accounts')
    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="{{ asset('/account')}}" title="">
          <center>
            <img src="{{asset("/img/crm_dashboard/Accounts-new.png")}}" alt="Snow" style="width:80%">
            <br>
            Accounts
        </center>
        </a>
      </div>
    </div>
  @endcan


  @can('Accounts')
    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="{{ asset('/account')}}" title="">
          <center>
            <img src="{{asset("/img/crm_dashboard/Task-new.png")}}" alt="Snow" style="width:80%">
            <br>
            Accounts
        </center>
        </a>
      </div>
    </div>
  @endcan



  @can('Leads')
    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="{{ asset('/lead')}}" title="">
          <center>
          <img src="{{asset("/img/crm_dashboard/Leads.png")}}" alt="Snow" class="img-dashboard">
          <span class="dashboard-text-lineheight">Leads</span>
        </center>
        </a>
      </div>
    </div>
  @endcan

  @can('Opportunities')
    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="{{ asset('/opportunity')}}" title="">
          <center>
            <img src="{{asset("/img/crm_dashboard/Opportunities.png")}}" alt="Snow" class="img-dashboard">
            <span class="dashboard-text-lineheight">Opportunities</span>
          </center>
        </a>
      </div>
    </div>
  @endcan

    
   @can('Campaigns')   
    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="{{ asset('/campaign')}}" title="">
          <center>
            <img src="{{asset("/img/crm_dashboard/Campaigns.png")}}" alt="Campaigns" class="img-dashboard">
            <span class="dashboard-text-lineheight"">Campaigns</span>
          </center>
        </a>
      </div>
    </div>
    @endcan




      


{{--     <div  class="col-md-2">
      <div class="column col_logo">
        <a href="/menus" title="Menu">
          <center>
        <img src="{{asset("/img/crm_dashboard/Opportunities.png")}}" alt="Snow" 
        <br>
        </center>style="width:80%">
        </a>
      </div>
    </div>

    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="/menudetails" title="">
          <center>
        <img src="{{asset("/img/crm_dashboard/Leads.png")}}" alt="Snow" style="width:80%">
        <br>
        </center>
        </a>
      </div>
    </div>
     
     <div  class="col-md-2">
      <div class="column col_logo">
        <a href="/colorpalettes" title="">
          <center>
        <img src="{{asset("/img/crm_dashboard/Leads.png")}}" alt="Snow" style="width:80%">
        <br>
        </center>
        </a>
      </div>
    </div>

     <div  class="col-md-2">
      <div class="column col_logo">
        <a href="/logos" title="">
          <center>
        <img src="{{asset("/img/crm_dashboard/Opportunities.png")}}" alt="Snow" 
        <br>
        </center>style="width:80%">
        </a>
      </div>
    </div>

     <div  class="col-md-2">
      <div class="column col_logo">
        <a href="/companies" title="">
          <center>
        <img src="{{asset("/img/crm_dashboard/Opportunities.png")}}" alt="Snow" 
        <br>
        </center>style="width:80%">
        </a>
      </div>
    </div> --}}

    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="{{ asset('/crm/task') }}" title="">
          <center>
            <img src="{{asset("/img/crm_dashboard/Task.png")}}" alt="Task" class="img-dashboard">
            <span class="dashboard-text-lineheight">Task</span>
          </center>
        </a>
      </div>
    </div>
{{-- 
    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="{{ asset('/templates') }}" title="">
          <center>
          <img src="{{asset("/img/crm_dashboard/Task.png")}}" alt="Snow" style="width:80%">
          <br>
        </center>
          <center>Template</center>
        </a>
      </div>
    </div>

    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="{{ asset('/templatesgrid') }}" title="">
          <center>
          <img src="{{asset("/img/crm_dashboard/Task.png")}}" alt="Snow" style="width:80%">
          <br>
        </center>
          <center>Template Grid</center>
        </a>
      </div>
    </div>

    
    
 --}}
       


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