 @extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate') 

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    Menu Detail
    
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Menu Detail</li>
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
      <form role="form" action="{{ url('menus'.'/'.$menu->menu_id)}}" method="POST">
        {{csrf_field()}}
        @method('PUT')
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-12">
              {{-- FormBOXBody --}}
              <div class="box-body">
                
                <div class="form-group">
                  <label for="user_id" >User ID</label>
                  <input type="int" class="form-control enabelInputField" id="user_id" name="user_id" value="{{ $menu->user_id }}" >
                </div>
                

                <div class="form-group">
                  <label for="menu_type" >Menu Type</label>
                      <input type="text" class="form-control enabelInputField" id="menu_type" name="menu_type" value="{{ $menu->menu_type }}"  >
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
