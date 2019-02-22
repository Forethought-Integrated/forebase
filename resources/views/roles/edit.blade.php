{{-- @extends('layouts.vkadminApp') --}}
@extends('layouts.adminApp')

@section('title', '| Edit Role')

@section('headAdminScriptUpdate')
<script language="JavaScript" type="text/javascript" src="{{ asset('/js/app.js')}}" async></script>
@endsection

@section('ContentHeader(Page_header)')

 <h1><i class='fa fa-key'></i> Edit Role: {{$role->name}}</h1>

@endsection

@section('MainContent')

     <div class="row">
        <div class="col-md-12">
           {{ Form::model($role, array('route' => array('roles.update', $role->id), 'method' => 'PUT')) }}

            <div class="form-group">
                {{ Form::label('name', 'Role Name') }}
                {{ Form::text('name', null, array('class' => 'form-control')) }}
            </div>

            <h5><b>Assign Permissions</b></h5>
            <?php $i=1;?>
            <div class='form-group'>
                <div class="row">
                    @foreach ($permissions as $permission)
                        <div class='col-md-3'>
                            {{Form::checkbox('permissions[]',  $permission->id, $role->permissions ) }}
                            {{Form::label($permission->name, ucfirst($permission->name)) }}<br>
                        </div>
                        @if($i++ %4==0)
                            </div>
                            <div class='row'>
                        @endif
                    @endforeach
                </div>
            </div>

            {{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}
        
            {{ Form::close() }}   
        </div>

    </div>

@endsection

@section('bodyScriptUpdate')
 
@endsection

