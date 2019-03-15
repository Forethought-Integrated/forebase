@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

<div class="row mb-2">
    <div class="col-sm-6">
      <h1>Add Blade User</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active">Add New User</li>
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


            <h3 class="card-title">Enter Detail</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
         <!--  <form class="form-horizontal" action="/user" method="POST"> -->   <!-- main For -->
            <div class="card-body">

              {{--  NewUserRegisteration       --}}

             <!--  <div class="col-md-8 col-md-offset-2"> -->
                 <div class="col-md-12 col-md-offset-12">
                <div class="panel panel-default">
               <!--    <div class="panel-heading">Register</div> -->

                  <div class="panel-body">
                    {{-- <form class="form-horizontal" method="POST" action="{{ route('register') }}"> --}}
                      <form class="form-horizontal" method="POST" action="{{ asset('/user') }}">
                        {{ csrf_field() }}



                        <div class="container-fluid">
                        <div class="row">
                        <div class="col-md-6">


                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                          <label for="name" class="col-md-2 control-label">Name</label>

                          <div class="col-md-10">
                            <input id="name" type="text" class="form-control" name="name" placeholder="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                            <span class="help-block">
                              <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                          </div>
                        </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                          <label for="password" class="col-md-6 control-label">Password</label>

                          <div class="col-md-10">
                            <input id="password" type="password" class="form-control" name="password" placeholder="password" required>

                            @if ($errors->has('password'))
                            <span class="help-block">
                              <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                          </div>
                        </div>



                        </div>
                        <div class="col-md-6">
                          
                         

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <label for="email" class="col-md-6 control-label">E-Mail Address</label>

                          <div class="col-md-10">
                            <input id="email" type="email" class="form-control" name="email" placeholder="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                            <span class="help-block">
                              <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                          </div>
                        </div>


                        <div class="form-group">
                          <label for="password-confirm" class="col-md-6 control-label">Confirm Password</label>

                          <div class="col-md-10">
                            <input id="password-confirm" type="password" class="form-control" placeholder="Confirm password" name="password_confirmation" required>
                          </div>
                        </div>


                        </div>  

                        </div>
                        </div>



                 
                        <div class="form-group" style="float: right;margin-right: 85px">
                          <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                              Register
                            </button>
                          </div>
                        </div>


                      </form>
                    </div>
                  </div>
                </div>

                {{--          --}}


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
    </div>

@endsection

@section('bodyScriptUpdate')
 
@endsection