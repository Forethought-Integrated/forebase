@extends('layouts.adminApp')

@section('title', 'helpdesk Dashboard')

@section('headAdminScriptUpdate')
<script language="JavaScript" type="text/javascript" src="{{ asset('/js/app.js')}}" async></script>
@endsection

@section('ContentHeader(Page_header)')


      <!-- <ol class="breadcrumb">
        <li><a href="{{asset('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Helpdesk</li>
      </ol>
 -->

@endsection

@section('MainContent')

  <div class="row" style="padding: 25px">
@can('Board')
    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="{{asset('/boards')}}" title="">
          <img src="{{asset("/img/marketing/Board.png")}}" alt="Snow" style="width:100%">
       <center><label><b>Board</b></label></center>

        </a>
      </div>
    </div>
    @endcan







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