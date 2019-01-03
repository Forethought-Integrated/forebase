@extends('layouts.adminApp')

@section('title', 'ListAccount')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

  <img src="{{asset("/storage/uploads/avatar/$users->avatar")}}" style="width: 150px; height: 150px;float: left;border-radius: 50%;border-radius: 50%;margin-right: 25px;">
  <h1 style="margin-top: 30px;">{{$users->name}}'s</h1>
    <h3>Profile</h3>

  
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">{{$users->name}}'s Profile</li>
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
      <form role="form" action="/user-profile/{{$users->id}}" method="POST" enctype="multipart/form-data">
          {{csrf_field()}}
        @method('PUT')
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-6">
              {{-- FormBOXBody --}}
              <div class="box-body">
                
                <div class="form-group">
                  <label for="name" >Name</label>
                  <input type="text" class="form-control enabelInputField" id="name" name="name" value="{{$users->name}}" >
                </div>
                

                <div class="form-group">
                  <label for="email" >Email</label>
                      <input type="email" class="form-control enabelInputField" id="email" name="email" value="{{$users->email}}" >
                </div>

                <div class="form-group">
                  <label for="gender" >Gender</label>
                  <input type="text" class="form-control enabelInputField" id="gender" name="gender" value="{{$users->gender}}" >
                </div>


                <div class="form-group">
                  <label for="mobileNo" >Mobile No.</label>
                  <input type="text" class="form-control enabelInputField" id="mobileNo" name="mobileNo" value="{{$users->mobileNo}}" >
                </div>
                
                <div class="form-group">
                  <label for="address" >Address</label>
                  <input type="text" class="form-control enabelInputField" id="address" name="address" value="{{$users->address}}" >
                </div>


              </div>
              {{-- ./FormBOXBody --}}
            </div>
            {{-- ./Left Form Field --}}

            {{-- RIght Form Field --}}
            <div class="col-md-6">
              {{-- FormBOXBody --}}
              <div class="box-body">
                

                <div class="form-group">
                  <label for="locationCode" >Location Code</label>
                  <input type="text" class="form-control enabelInputField" id="locationCode" name="locationCode" value="{{$users->locationCode}}" >
                </div>

                <div class="form-group">
                  <label for="departmentCode" >Department Code</label>
                  <input type="text" class="form-control enabelInputField" id="departmentCode" name="departmentCode" value="{{$users->departmentCode}}" >
                </div>

                <div class="form-group">
                  <label for="salutaionCode" >Salutaion Code</label>
                  <input type="text" class="form-control enabelInputField" id="salutaionCode" name="salutaionCode" value="{{$users->salutationCode}}" >
                </div>


                <div class="form-group">
                  <label for="designationCode" >Designation Code</label>
                  <input type="text" class="form-control enabelInputField" id="designationCode" name="designationCode" value="{{$users->designationCode}}" >
                </div>

                <div class="form-group">
                  <label for="avatarFile">File input</label>
                  <input type="file" id="avatarFile" name="avatarFile">
                </div>

              </div>
              {{-- ./FormBOXBody --}} 


            </div>
            {{-- ./RIght Form Field --}}
        </div>

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Update</button>
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