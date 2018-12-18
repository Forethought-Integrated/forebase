@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

<div class="row">
  <div class="col-sm-12">
   
    <!-- <img src="/storage/uploads/avatar/{{$users->avatar}}" style="width: 150px; height: 150px;float: left;border-radius: 50%;border-radius: 50%;margin-right: 25px;">
     -->
     <img src="{{asset("/storage/uploads/avatar/$users->avatar")}}" style="width: 150px; height: 150px;float: left;border-radius: 50%;border-radius: 50%;margin-right: 25px;">
    
    <h1 style="margin-top: 30px;">{{$users->name}}'s</h1>
    <h2>Profile</h2>
    
  </div>
          
</div>

@endsection

@section('MainContent')
<div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-primary">
               <!-- right column -->
               <div class="col-md-12">
                <!-- Horizontal Form -->
                <div class="card card-info">
                  <div class="card-header">


                   <h3 class="card-title"><br></h3> 
                 </div>
                 <!-- /.card-header -->
                 <!-- form start -->
                 <form class="form-horizontal" action="/user" method="POST">   <!-- main For -->
                  <div class="card-body">

                    {{--  Show User Profile       --}}

                    <div class="col-md-8 col-md-offset-2">
                      <div class="panel panel-default">
                        <div class="panel-heading"></div>

                        <div class="panel-body">
                          <!--<form class="form-horizontal" method="POST" action="{{ route('register') }}">-->
                            <form class="form-horizontal" method="POST" action="/userUpload" >
                              {{ csrf_field() }}
                              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                  <input id="name" type="text" class="form-control" name="name" value="{{$users->name}}" required disabled autofocus>
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                  <input id="email" type="email" class="form-control" name="email" value="{{$users->email}}" disabled required>
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="email" class="col-md-4 control-label">Gender</label>

                                <div class="col-md-6">
                                  <input id="gender" type="text" class="form-control" name="gender" value="{{$users->gender}}" disabled required>
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="mobileNo" class="col-md-4 control-label">Mobile No.</label>

                                <div class="col-md-6">
                                  <input id="mobileNo" type="text" class="form-control" name="mobileNo" value="{{$users->mobileNo}}" disabled required>
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="address" class="col-md-4 control-label">Address</label>

                                <div class="col-md-6">
                                  <input id="address" type="text" class="form-control" name="address" value="{{$users->address}}" disabled required>
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label for="locationCode" class="col-md-4 control-label">Location Code</label>

                                <div class="col-md-6">
                                  <input id="locationCode" type="text" class="form-control" name="locationCode" value="{{$users->locationCode}}" disabled required>
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label for="departmentCode" class="col-md-4 control-label">Department Code</label>

                                <div class="col-md-6">
                                  <input id="departmentCode" type="text" class="form-control" name="departmentCode" value="{{$users->departmentCode}}" disabled required>
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label for="salutaionCode" class="col-md-4 control-label">Salutaion Code</label>

                                <div class="col-md-6">
                                  <input id="salutaionCode" type="text" class="form-control" name="salutaionCode" value="{{$users->salutaionCode}}" disabled required>
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label for="designationCode" class="col-md-4 control-label">Designation Code</label>

                                <div class="col-md-6">
                                  <input id="designationCode" type="text" class="form-control" name="designationCode" value="{{$users->designationCode}}" disabled required>
                                </div>
                              </div>
                              

                          </form>
                        </div>
                      </div>
                    </div>

                    {{--  ./Show User Profile       --}}


                  </div>
                  <!-- /.card -->

                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!--/.col (right) -->


          </div>
          <!-- /.row -->

@endsection

@section('bodyScriptUpdate')
 
@endsection