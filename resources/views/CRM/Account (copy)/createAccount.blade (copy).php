@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

<div class="row mb-2">
        <div class="col-sm-6">
          <h1>Account Form</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Account Form</li>
          </ol>
        </div>
      </div>

@endsection

@section('MainContent')
<div class="row">
  <!--  column -->
  <div class="col-md-12">
    <!-- Horizontal Form -->
    <div class="card card-info">
      <div class="card-header">
        <center><h3 class="card-title">Enter Detail</h3></center>
      </div>
      <!-- /.card-header -->

      {{-- form--}}
      <form class="form-horizontal" action="/account" method="POST">
        {{ csrf_field() }}
        {{-- FormCardBody --}}
        <div class="card-body">

          <div class="container-fluid">
            <div class="row">
              {{-- LeftForm --}}
              <div class="col-md-4">
                <div class="form-group">
                  <label for="accountName" class="col-sm-2 control-label">Account Name
                  </label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="accountName" name="accountName" placeholder="Account Name">
                  </div>
                </div>

              </div>
              {{-- ./LeftForm --}}

              {{-- RightForm --}}
              <div class="col-md-6">

              </div>
              {{-- ./RightForm --}}
            </div>
          </div>
        </div>
        {{-- ./FormCardBody --}}
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