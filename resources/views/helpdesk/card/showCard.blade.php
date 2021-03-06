@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    Card Form

    <a id="editFormField" href="/cards/{{$data['cards']['card_id']}}/edit/" title="">
      <i class="fa fa-edit">Edit</i>
    </a>
    
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i>Home</a></li>
    <li class="active">Card Form</li>
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
                  <label for="list_id">List Id</label>
                  <input type="int" class="form-control enabelInputField" id="list_id" name="list_id" value="{{$data['cards']['list_id']}}" disabled>
                </div>
                

                <div class="form-group">
                  <label for="name" >Name</label>
                  <input type="text" class="form-control enabelInputField" id="name" name="name" value="{{$data['cards']['name']}}" disabled>
                </div>

                <div class="form-group">
                  <label for="description" >Description</label>
                  <input type="email" class="form-control enabelInputField" id="description" name="description" value="{{$data['cards']['description']}}" disabled>
                </div>
                <div class="form-group">
                  <label for="order" >Order</label>
                  <input type="text" class="form-control enabelInputField" id="order" name="order" value="{{$data['cards']['order']}}" disabled>
                </div>
                <div class="form-group">
                  <label for="members" >Members</label>
                  <input type="text" class="form-control enabelInputField" id="members" name="members" value="{{$data['cards']['members']}}" disabled>
                </div>
                <div class="form-group">
                  <label for="archieved" >Archieved</label>
                  <input type="text" class="form-control enabelInputField" id="archieved" name="archieved" value="{{$data['cards']['archieved']}}" disabled>
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