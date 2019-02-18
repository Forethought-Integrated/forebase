@extends('layouts.adminApp')

@section('title', 'marketing Dashboard')

@section('headAdminScriptUpdate')
<script language="JavaScript" type="text/javascript" src="{{ asset('/js/app.js')}}" async></script>
@endsection

@section('ContentHeader(Page_header)')
    
     <h1>
        Brand
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Brand</li>
      </ol>


@endsection

@section('MainContent')

@can('BrandGuidelines')

  <div class="row" style="padding: 25px">

    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="/brands" title="">
          <img src="{{asset("/img/marketing/brandguidelines.jpg")}}" alt="Snow" style="width:100%">
        </a>
        
      </div>
    </div>
    @endcan

    @can('ColorPalettes')
    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="/colorpalettes" title="">
          <img src="{{asset("/img/marketing/colorpalettes.jpg")}}" alt="Snow" style="width:100%">
        </a>
        
      </div>
    </div>
    @endcan

   @can('Logos')
    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="/logos" title="">
          <img src="{{asset("/img/marketing/logo.jpg")}}" alt="Snow" style="width:100%">
        </a>
        
      </div>
    </div>
    @endcan
      
    @can('Company')
    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="/companies" title="">
          <img src="{{asset("/img/marketing/company.jpg")}}" alt="Snow" style="width:100%">
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