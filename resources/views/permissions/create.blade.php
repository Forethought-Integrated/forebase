{{-- @extends('layouts.vkadminApp') --}}
@extends('layouts.adminApp')

@section('title', '|  Create Permission')

@section('headAdminScriptUpdate')
<script language="JavaScript" type="text/javascript" src="{{ asset('/js/app.js')}}" async></script>
@endsection

@section('ContentHeader(Page_header)')

 <h1><i class='fa fa-key'></i> Add Permission</h1>


@endsection

@section('MainContent')

    <div class="row">
        <div class="col-md-12">
           
             {{ Form::open(array('url' => 'permissions')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', '', array('class' => 'form-control')) }}
    </div><br>
    @if(!$roles->isEmpty()) //If no roles exist yet
        <h4>Assign Permission to Roles</h4>

        @foreach ($roles as $role) 
            {{ Form::checkbox('roles[]',  $role->id ) }}
            {{ Form::label($role->name, ucfirst($role->name)) }}<br>

        @endforeach
    @endif
    <br>
    {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

           
        </div>

    </div>

@endsection

@section('bodyScriptUpdate')
 
@endsection

