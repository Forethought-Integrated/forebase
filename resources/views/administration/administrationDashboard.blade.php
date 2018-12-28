@extends('layouts.adminApp')

@section('title', 'Administration Dashboard')

@section('headAdminScriptUpdate')
<script language="JavaScript" type="text/javascript" src="{{ asset('/js/app.js')}}" async></script>
@endsection

@section('ContentHeader(Page_header)')

 <h1>
        Administration
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Administration</li>
      </ol>


@endsection

@section('MainContent')

  <div class="row" style="padding: 25px">

    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="/permissions" title="">
          <img src="{{asset("/img/administration/permission-&-role.jpg")}}" alt="Snow" style="width:100%">
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