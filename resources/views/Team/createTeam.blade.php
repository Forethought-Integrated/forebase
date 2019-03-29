@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    Team Form
    
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{asset('/')}}"><i class="fa fa-dashboard"></i>Home</a></li>
    <li class="active">Team Form</li>
  </ol>


@endsection

@section('MainContent') 
<div class="row">
  <!--  column -->
  <div class="col-md-12">
    <!-- Horizontal Form -->
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Enter Detail</h3>
            </div>
      <!-- /.card-header -->

      {{-- form--}}
      <form role="form" action="{{ asset('/team') }}" method="POST">
        {{ csrf_field() }}
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-12">
              {{-- FormBOXBody --}}
              <div class="box-body">
                
                <div class="form-group">
                  <label for="team_name">Team Name</label>
                  <input type="Tell" class="form-control" id="mappingPlatform" name="team_name" placeholder="Enter Team Name" required>
                </div>
                <div class="form-group">
                  <label for="team_icon_path">Team Icon Path</label>
                  <input type="Tell" class="form-control" id="mappingPlatform" name="team_icon_path" placeholder="Enter Team Icon Path" required>
                </div>
                <div class="form-group">
                  <label for="team_description">Team Description</label>
                  <input type="Tell" class="form-control" id="mappingPlatform" name="team_description" placeholder="Enter Description">
              </div>
             </div>
                  


                

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div> 
      </form>
      {{-- ./Form --}}
    </div>
{{--  ./Horizonantal Form  --}}
  </div>
  {{--  ./Col  --}}
</div>
<!-- /.row -->

@endsection

@section('bodyScriptUpdate')
 
@endsection