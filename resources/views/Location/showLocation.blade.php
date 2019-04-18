@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    Location Detail
      <a id="editFormField" href="{{ asset('/location/'.$location->location_id )}}/edit/" title="">
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
                  <label for="location_name" >location</label>
                  <input type="text" class="form-control enabelInputField" id="menu_type" name="location_name" value="{{$location->location_name}}" disabled>
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