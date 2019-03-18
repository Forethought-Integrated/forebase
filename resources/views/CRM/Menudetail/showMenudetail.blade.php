 @extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    Menu Details
    <a id="editFormField" href="{{ asset('/menudetails/'.$menu_details->menu_detail_id)}}/edit/" title="">
      <i class="fa fa-edit">Edit</i>
    </a>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{asset('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
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
              <h3 class="box-title">Enter Detail</h3>
            </div>
      <!-- /.card-header -->

      {{-- form--}} 
       {{csrf_field()}}
      <form role="form">
        {{csrf_field()}}
        @method('PUT')
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-12">
              {{-- FormBOXBody --}}
              <div class="box-body">
                
                <div class="form-group">
                  <label for="menu_id" >Menu ID</label>
                  <input type="int" class="form-control enabelInputField" id="menu_id" name="user_id" value="{{ $menu_details->menu_id}}" disabled>
                </div>
                

                <div class="form-group">
                  <label for="menu_field_name" >Menu Field Name</label>
                      <input type="text" class="form-control enabelInputField" id="menu_field_name" name="menu_field_name" value="{{ $menu_details->menu_field_name}}" disabled>
                </div>

                 <div class="form-group">
                  <label for="menu_url" >Menu URL</label>
                      <input type="text" class="form-control enabelInputField" id="menu_url" name="menu_url" value="{{ $menu_details->menu_url}}" disabled>
                </div>

                 <div class="form-group">
                  <label for="menu_sort" >Menu Sort</label>
                      <input type="text" class="form-control enabelInputField" id="menu_sort" name="menu_sort" value="{{ $menu_details->menu_sort}}" disabled>
                </div>

               
              {{-- ./FormBOXBody --}}
            </div>
            {{-- ./Left Form Field --}}

            {{-- RIght Form Field --}} 
           


              </div>
              {{-- ./FormBOXBody --}} 


            </div>
            {{-- ./RIght Form Field --}}
        </div>

        {{-- <div class="box-footer">
          <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
        </div> --}} 
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