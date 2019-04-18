@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    Team Detail
      <a id="editFormField" href="{{ asset('/team/'.$team->team_id )}}/edit/" title="">
      <i class="fa fa-edit">Edit</i>
    </a>
  </h1>
  


@endsection

@section('MainContent') 
<div class="row">
  <!--  column -->
  <div class="col-md-12">
    <!-- Horizontal Form -->
    <div class="box box-primary">
            <div class="box-header with-border">
                          </div>
      <!-- /.card-header -->
      <a href="{{url('team-view/'.$team->team_id.'/')}}" class="btn btn-primary">Team Member</a>


      {{-- form--}} 
      <form role="form">
        {{csrf_field()}}
        @method('PUT')
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-12">
              {{-- FormBOXBody --}}
              <div class="box-body">
                
                <div class="form-group">
                  <label for="teamname" >Team Name</label>
                  <input type="text" class="form-control enabelInputField" id="menu_type" name="team_name" value="{{$team->team_name}}" disabled>
                </div>
                <div class="form-group">
                  <label for="team_icon_path" >Team Icon Path</label>
                  <input type="text" class="form-control enabelInputField" id="menu_type" name="team_icon_path" value="{{$team->team_icon_path}}" disabled>
                </div>
                <div class="form-group">
                  <label for="team_description">Team Name</label>
                  <input type="text" class="form-control enabelInputField" id="menu_type" name="team_description" value="{{$team->team_description}}" disabled>
                </div>
               </div>
                

              </div>
              {{-- ./FormBOXBody --}}
            </div>
            {{-- ./Left Form Field --}}

          </div>
              {{-- ./FormBOXBody --}} 
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