@extends('layouts.adminApp')


@section('title', 'KnowledgeCenter')

@section('headAdminScriptUpdate')
<script language="JavaScript" type="text/javascript" src="{{ asset('/js/app.js')}}" async></script>
<style type="text/css">
	#content .col-md-3 {width: 17%  !important;}
</style>
@endsection

@section('ContentHeader(Page_header)')

<h1>Files
</h1>



@endsection

@section('MainContent')

    <div class="row">
      <div class="col-md-12">
        <!-- <h2>Embed file manager</h2> -->
        <iframe src="{{ asset('/knowledgemanager') }}" style="width: 100%; height: 500px; overflow: hidden; border: none;"></iframe>
      </div>
    </div>

@endsection

@section('bodyScriptUpdate')
 
@endsection

