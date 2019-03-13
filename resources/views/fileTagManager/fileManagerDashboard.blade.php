@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')
<script language="JavaScript" type="text/javascript" src="{{ asset('/js/app.js')}}" async></script>
@endsection

@section('ContentHeader(Page_header)')

<h1>
  File Manager
</h1>
<ol class="breadcrumb">
  <li><a href="/"><i class="fa fa-dashboard"></i>Home</a></li>
  <li class="active">File Manager</li>
</ol>

@endsection

@section('MainContent')

  <div class="row" style="padding: 25px">

 @can('Contacts')
    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="/file-manager" title="">
          <img src="{{asset("/img/crm_dashboard/Contacts.jpg")}}" alt="Snow" style="width:100%">
        </a>
      </div>
    </div>
  @endcan



  @can('Accounts')
    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="/account" title="">
          <img src="{{asset("/img/crm_dashboard/Accounts.jpg")}}" alt="Snow" style="width:100%">
        </a>
      </div>
    </div>
  @endcan



  @can('Leads')
    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="/lead" title="">
          <img src="{{asset("/img/crm_dashboard/Leads.jpg")}}" alt="Snow" style="width:100%">
        </a>
      </div>
    </div>
  @endcan

 
    

       


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