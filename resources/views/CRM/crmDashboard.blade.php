@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')
<script language="JavaScript" type="text/javascript" src="{{ asset('/js/app.js')}}" async></script>
@endsection

@section('ContentHeader(Page_header)')

 <h1>
        CRM
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">CRM</li>
      </ol>


@endsection

@section('MainContent')

  <div class="row" style="padding: 25px">

    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="/account" title="">
          <img src="{{asset("/img/crm_dashboard/Accounts.jpg")}}" alt="Snow" style="width:100%">
        </a>
      </div>
    </div>

      
    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="/campaign" title="">
          <img src="{{asset("/img/crm_dashboard/Campaigns.jpg")}}" alt="Snow" style="width:100%">
        </a>
      </div>
    </div>

      
     <div  class="col-md-2">
      <div class="column col_logo">
        <a href="/contact" title="">
          <img src="{{asset("/img/crm_dashboard/Contacts.jpg")}}" alt="Snow" style="width:100%">
        </a>
      </div>
    </div>

    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="/lead" title="">
          <img src="{{asset("/img/crm_dashboard/Leads.jpg")}}" alt="Snow" style="width:100%">
        </a>
      </div>
    </div>

      
    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="/opportunity" title="">
          <img src="{{asset("/img/crm_dashboard/Opportunities.jpg")}}" alt="Snow" style="width:100%">
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