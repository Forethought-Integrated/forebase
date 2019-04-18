@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')
<script language="JavaScript" type="text/javascript" src="{{ asset('/js/app.js')}}" async></script>
@endsection

@section('ContentHeader(Page_header)')

<h1>
  File Manager
</h1>


@endsection

@section('MainContent')

  <div class="row" style="padding: 25px">

 {{-- @can('Contacts') --}}
    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="{{ asset('/file-manager') }}" title="">
          <center>
            <img src="{{asset("/img/file_manager/file.jpg")}}" alt="Snow" style="width:80%">
            <br>
            </center>
        </a>
      </div>
    </div>
  {{-- @endcan --}}



  {{-- @can('Accounts') --}}
    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="{{ asset('/tags') }}" title="">
          <center>
            <img src="{{asset("/img/file_manager/tag-file.png")}}" alt="Snow" style="width:80%">
            <br>
            Tag File
            </center>
        </a>
      </div>
    </div>
  {{-- @endcan --}}



  

 
    

       


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