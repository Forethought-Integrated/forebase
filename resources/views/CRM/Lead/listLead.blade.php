@extends('layouts.adminApp')

@section('title', '| Lead')

@section('headAdminScriptUpdate')
<script language="JavaScript" type="text/javascript" src="{{ asset('/js/app.js')}}" async></script>
@endsection

@section('ContentHeader(Page_header)')

 <h1>
    <i class="fa"></i>Lead 
    <a href="/lead/create" title="">
          <i class="fa fa-edit"> create</i>
  </a>
  </h1>
  
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Lead List</li>
  </ol>

@endsection

@section('MainContent')

    <div class="row">
        <div class="col-sm-12">
  
          <div class="card">
            <div class="card-header">
                          
              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-6">
                    <h3 class="card-title">Lead List</h3>
                  </div>

                    
                  <div class="col-sm-6">
                    <h3 class="card-title float-sm-right"><a href="{{ url('/pdf') }}">Download Pdf</a></h3>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- /.card-header -->
            <div class="card-body">
              <div  class="table-responsive">
                  
              <table id="example1" class="table table-bordered table-striped table-hover  ">
                <thead>
                  <tr>
                    <td>Lead ID</td>
                    <td>Service Code</td>
                    <td>Name</td>
                    <td>Designation</td>
                    <td>Comapany Name</td>
                    <td>Mobile No.</td>
                    <td>Email</td>
                    <td>Edit</td>
                    <td>Delete</td>
                  </tr>
                </thead>
                <tbody>
                  
                  @foreach($leaddata['dataArray']['data'] as $leads)
                  <tr>
                   <td>{{$leads['lead_id']}}</td>
                   <td>{{$leads['lead_service_code']}}</td>
                   <td><a href="{{ url('lead'.'/'.$leads['lead_id'])}}">{{$leads['lead_name']}}</a></td>
                   <td>{{$leads['lead_designation']}}</td>
                   <td>{{$leads['lead_companyName']}}</td>
                   <td>{{$leads['lead_mobileNo']}}</td>
                   <td>{{$leads['lead_email']}}</td>
                   <td>
                    <a class="btn btn-small btn-primary" href=" {{ $leaddata['dataArray']['data']['0']['lead_service_code'] }}">Edit</a>
                    </td>

                    <td>
                    <form action=" {{ $leaddata['dataArray']['data']['0']['lead_service_code'] }}" method="post">
                          {{csrf_field()}}
                          <input name="_method" type="hidden" value="DELETE">
                          <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                      </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
        

    </div>

@endsection

@section('bodyScriptUpdate')
 
@endsection


