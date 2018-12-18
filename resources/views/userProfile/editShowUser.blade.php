@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')
 <div class="row mb-2">
            <div class="col-sm-6">
              <!--<img src="/uploads/avatar/{{Auth::user()->id}}" style="width: 150px; height: 150px;float: left;border-radius: 50%;border-radius: 50%;margin-right: 25px;">-->
              <img src="/uploads/avatar/{{$users->avatar}}" style="width: 150px; height: 150px;float: left;border-radius: 50%;border-radius: 50%;margin-right: 25px;">

<!-- 
              <img src="/storage/uploads/avatar/{{$users->avatar}}" style="width: 150px; height: 150px;float: left;border-radius: 50%;border-radius: 50%;margin-right: 25px;"> -->

              <h1 style="margin-top: 30px;">{{$users->name}}'s</h1>
              
              <h2>Profile </h2>
              
              <form enctype="multipart/form-data" method="POST" action="/userUpload" >
                <label>User Profile Image Upload</label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="submit" name="" class="btn btn-primary">
              </form>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">{{$users->name}} Profile</li>
              </ol>
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
                                  <input id="name" type="text" class="form-control" name="name" value="{{$users->name}}" required autofocus>
                                </div>
                              </div>

                              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                  <input id="email" type="email" class="form-control" name="email" value="{{$users->email}}" required>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                 <button type="button" class="btn btn-primary" style="width: 75.046px">
                                  Back
                                </button>
                                <button type="submit" class="btn btn-primary" style=" float: right;">
                                  Update
                                </button> 


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