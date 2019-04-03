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
        <li><a href="{{asset('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Brand</li>
      </ol>


@endsection

@section('MainContent')

@can('BrandGuidelines')

  <div class="row" style="padding: 25px">

    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="{{ asset('/brands') }}" title="">
          <center>
            <img src="{{asset("/img/marketing/brandguidelines.png")}}" alt="Snow" style="width:80%">
            <br>
            Brand Guidelines
          </center>
        </a>
        
      </div>
    </div>
    @endcan

    @can('ColorPalettes')
    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="{{ asset('/colorpalettes') }}" title="">
          <center>
            <img src="{{asset("/img/marketing/colorpalettes.png")}}" alt="Snow" style="width:80%">
            <br>
            Color Palettes
          </center>
        </a>
        
      </div>
    </div>
    @endcan

   @can('Logos')
    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="{{ asset('/logos') }}" title="">
          <center>
            <img src="{{asset("/img/marketing/logo.png")}}" alt="Snow" style="width:80%">
            <br>
            Logo
          </center>
        </a>
      </div>
    </div>
    @endcan
      
    @can('Company')
    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="{{ asset('/companies') }}" title="">
          <center>
            <img src="{{asset("/img/marketing/company.png")}}" alt="Snow" style="width:80%">
            <br>
            Company
          </center>
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