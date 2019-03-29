  @extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

  <h1>
   Team Details
    
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{asset('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Team Details</li>
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
      <form role="form" id="update-form" action="{{ asset('team'.'/'.$team->team_id )}}" method="POST">
        {{csrf_field()}}
        @method('PUT')
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-12">
              {{-- FormBOXBody --}}
              <div class="box-body">
                
                <div class="form-group">
                  <label for="team_name" >team Name</label>
                  <input type="varchar" class="form-control" id="team_name" name="team_name" value="{{ $team->team_name }}" >
                </div>
                <div class="form-group">
                  <label for="team_icon_path" >Team Icon Path</label>
                  <input type="varchar" class="form-control" id="team_icon_path" name="team_icon_path" value="{{ $team->team_icon_path }}" >
                </div>
                <div class="form-group">
                  <label for="team_description" >Team Description</label>
                  <input type="varchar" class="form-control" id="team_description" name="team_description" value="{{ $team->team_description }}" >
                </div>
               </div>
               <div class="box-footer">
                  <button type="submit" data-recordid="{{$team->team_id}}" type="submit" class="btn btn-primary  update-record">Update</button>
              </div>

              </div>
              {{-- ./FormBOXBody --}}
            </div>
            {{-- ./Left Form Field --}}

          
            {{-- ./RIght Form Field --}}
        </div>

         
      </form>
      {{-- ./Form --}}
    </div>
    {{--  ./Horizonantal Form  --}}
  </div>
  {{--  ./Col  --}}
</div>
<!-- /.row -->

              <script>
                 $( document ).ready(function() {
                     $('.update-record').click(function(event){ 
                      event.preventDefault();                                        
                       var url='/team'+$(this).data('recordid');
                       $('#modal-default-form').attr('action',url);                            
                       $('#modal-default').modal('show')
                     });
                   });
               </script>

@endsection

@section('bodyScriptUpdate')

@include('include.modal.updateModal')
 
@endsection

