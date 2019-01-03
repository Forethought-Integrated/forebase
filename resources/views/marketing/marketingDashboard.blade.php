@extends('layouts.adminApp')

@section('title', 'marketing Dashboard')

@section('headAdminScriptUpdate')
<script language="JavaScript" type="text/javascript" src="{{ asset('/js/app.js')}}" async></script>
@endsection

@section('ContentHeader(Page_header)')

 <h1>
        Marketing
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Marketing</li>
      </ol>


@endsection

@section('MainContent')

  <div class="row" style="padding: 25px">

    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="/brands" title="">
          <img src="{{asset("/img/marketing/brand.png")}}" alt="Snow" style="width:100%">
        </a>
        <strong>Brand</strong>
      </div>
    </div>

    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="/colorpalettes" title="">
          <img src="{{asset("/img/marketing/colorpalate.png")}}" alt="Snow" style="width:100%">
        </a>
        <strong>Color Palettes</strong>
      </div>
    </div>


    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="/logos" title="">
          <img src="{{asset("/img/marketing/logo.png")}}" alt="Snow" style="width:100%">
        </a>
        <strong>Logos</strong>
      </div>
    </div>
      

    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="/under-construction" title="">
          <img src="{{asset("/img/marketing/companies.png")}}" alt="Snow" style="width:100%">
        </a>
        <strong>Company</strong>
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