  @extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    Menu Details
    
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Menu Details</li>
  </ol>

@endsection

@section('MainContent')
<div class="row">
  <!--  column -->
  <div class="col-md-12">
    <!-- Horizontal Form -->
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Menu Detail</h3>
            </div>
      <!-- /.card-header -->

      {{-- form--}}
      <form role="form" action="{{ url('menudetails'.'/'.$menu_details->menu_detail_id)}}" method="POST">
        {{csrf_field()}}
        @method('PUT')
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-12">
              {{-- FormBOXBody --}}
              <div class="box-body">
                
                <div class="form-group">
                  <label for="menu_id" >Menu ID</label>
                  <input type="int" class="form-control enabelInputField" id="menu_id" name="menu_id" value="{{ $menu_details->menu_id }}" >
                </div>
                

                <div class="form-group">
                  <label for="menu_field_name" >Menu Field Name</label>
                      <input type="text" class="form-control enabelInputField" id="menu_field_name" name="menu_field_name" value="{{ $menu_details->menu_field_name }}" >
                </div>

                <div class="form-group">
                  <label for="menu_url" >Menu URL</label>
                      <input type="text" class="form-control enabelInputField" id="menu_url" name="menu_url" value="{{ $menu_details->menu_url }}" >
                </div>

                <div class="form-group">
                  <label for="menu_sort" >Menu Sort</label>
                      <input type="text" class="form-control enabelInputField" id="menu_sort" name="menu_sort" value="{{ $menu_details->menu_sort }}" >
                </div>



                
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
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

@endsection

@section('bodyScriptUpdate')
 
@endsection
