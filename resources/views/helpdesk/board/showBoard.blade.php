@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    Board Form

    <a id="editFormField" href="/boards/{{$data['boards']['board_id']}}/edit/" title="">
      <i class="fa fa-edit">Edit</i>
    </a>
    
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i>Home</a></li>
    <li class="active">Board Form</li>
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
      <form role="form">
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-12">
              {{-- FormBOXBody --}}
              <div class="box-body">
                
                <div class="form-group">
                  <label for="owner_id" >Owner Id</label>
                  <input type="text" class="form-control enabelInputField" id="owner_id" name="owner_id" value="{{$data['boards']['owner_id']}}" disabled>
                </div>
                

                <div class="form-group">
                  <label for="name" >Name</label>
                  <input type="text" class="form-control enabelInputField" id="name" name="name" value="{{$data['boards']['name']}}" disabled>
                </div>

                <div class="form-group">
                  <label for="description" >Description</label>
                  <input type="email" class="form-control enabelInputField" id="description" name="description" value="{{$data['boards']['description']}}" disabled>
                </div>
              </div>
            </div>

                
               
        </div>

        <div class="box-footer">
         <!--  <button type="submit" class="btn btn-primary">Update</button> -->
        </div>
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