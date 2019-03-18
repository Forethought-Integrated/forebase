@extends('layouts.adminApp')

@section('title', 'helpdesk Dashboard')

@section('headAdminScriptUpdate')
<script language="JavaScript" type="text/javascript" src="{{ asset('/js/app.js')}}" async></script>
@endsection

@section('ContentHeader(Page_header)')

 <h1>
        old Helpdesk
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{asset('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Helpdesk</li>
      </ol>


@endsection

@section('MainContent')

  <div class="row" style="padding: 25px">

    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="/boards" title="">
          <img src="{{asset("/img/marketing/brand.png")}}" alt="Snow" style="width:100%">
        </a>
        <strong>Board</strong>
      </div>
    </div>

     <div  class="col-md-2">
      <div class="column col_logo">
        <a href="/lists" title="">
          <img src="{{asset("/img/marketing/logo.png")}}" alt="Snow" style="width:100%">
        </a>
        <strong>List</strong>
      </div>
    </div>

    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="/cards" title="">
          <img src="{{asset("/img/marketing/colorpalate.png")}}" alt="Snow" style="width:100%">
        </a>
        <strong>Card</strong>
      </div>
    </div>


   
      

    <!-- <div  class="col-md-2">
      <div class="column col_logo">
        <a href="/companies" title="">
          <img src="{{asset("/img/marketing/companies.png")}}" alt="Snow" style="width:100%">
        </a>
        <strong>Company</strong>
      </div>
    </div> -->
      
    
    

       


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