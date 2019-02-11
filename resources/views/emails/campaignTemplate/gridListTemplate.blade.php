@extends('layouts.adminApp')

@section('title', 'marketing Dashboard')

@section('headAdminScriptUpdate')
<script language="JavaScript" type="text/javascript" src="{{ asset('/js/app.js')}}" async></script>
@endsection

@section('ContentHeader(Page_header)')

 <h1>
       Template List
        <a id="editFormField" href="/templatesgrid/{{$data['template']['0']->template_id}}/edit/" title="">
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Template</li>
      </ol>
{{-- {{$data['template']['0']['template_body']}} --}}
{{-- {{print_r($data['template']['0']->template_body)}} --}}
{{-- <pre>{{print_r($data)}}</pre> --}}
@endsection

@section('MainContent')

  <div class="row" style="padding: 25px">
    @foreach($data['template'] as $template)

    <div  class="col-md-2">
      <div class="column col_logo">
        <a href="/templates/{{$template->template_id}}/edit/" title="">
          <img src="{{asset("/img/marketing/brandguidelines.jpg")}}" alt="Snow" style="width:100%">
        </a>
        <a href="">{{$template->template_body}}</a>
        {{-- {{$template['template_body']}} --}}
      </div>
    </div>


    @endforeach
   
      
    
    

       


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