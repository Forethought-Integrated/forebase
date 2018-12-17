{{-- @extends('layouts.vkadminApp') --}}
@extends('layouts.newAdminApp')

@section('title', '| Add Role')

@section('headAdminScriptUpdate')
<script language="JavaScript" type="text/javascript" src="{{ asset('/js/app.js')}}" async></script>
@endsection

@section('ContentHeader(Page_header)')

    <h1><i class='fa fa-key'></i> Add Role</h1>
 

@endsection

@section('MainContent')

    <div class="row">
        <div class="col-md-12">
          {{ Form::open(array('url' => 'roles')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>

    <h5><b>Assign Permissions</b></h5>

    <div class='form-group'>
        @foreach ($permissions as $permission)
            {{ Form::checkbox('permissions[]',  $permission->id ) }}
            {{ Form::label($permission->name, ucfirst($permission->name)) }}<br>

        @endforeach
    </div>

    {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}
 
        </div>

    </div>

@endsection

@section('bodyScriptUpdate')
 
@endsection

