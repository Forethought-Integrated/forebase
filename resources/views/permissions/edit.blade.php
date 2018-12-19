{{-- @extends('layouts.vkadminApp') --}}
@extends('layouts.adminApp')

@section('title', '|  Edit Permissions')

@section('headAdminScriptUpdate')
<script language="JavaScript" type="text/javascript" src="{{ asset('/js/app.js')}}" async></script>
@endsection

@section('ContentHeader(Page_header)')

 <h1><i class='fa fa-key'></i> Edit {{$permission->name}}</h1>


@endsection

@section('MainContent')

    <div class="row">
        <div class="col-md-12">
            {{ Form::model($permission, array('route' => array('permissions.update', $permission->id), 'method' => 'PUT')) }}{{-- Form model binding to automatically populate our fields with permission data --}}

    <div class="form-group">
        {{ Form::label('name', 'Permission Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>
    <br>
    {{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}
        </div>

    </div>

@endsection

@section('bodyScriptUpdate')
 
@endsection

