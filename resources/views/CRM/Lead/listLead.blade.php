@extends('layouts.adminApp')

@section('title', 'ListLead')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

<div class="row mb-2">
        <div class="col-sm-6">
          <!-- <h1>Lead</h1>
 -->        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Lead List</li>
          </ol>
        </div>
      </div>

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

                    {{ $leaddata['dataArray']['data']['0']['lead_service_code'] }}
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
                   <td>{{$leads['lead_name']}}</td>
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
        
{{--  {{print_r($pdf)  }}  --}}
        {{--  <form  method="get" action="{{ url('lead',['download'=>'pdf']) }}">  --}}
            {{--  <form  method="get" action="{{ route('lead/pdf',['download'=>'pdf']) }}">
            <button type="download" class="btn btn-success float-right">Download PDF</button>
        </form>
      </div>
      <!-- /.row -->    --}}

      {{--  <a href="{{ url('lead'.'/'.'download')}}">Download PDF</a>

      <a href="{{ url('lead/report/download') }}">Download report PDF</a>

      <a href="{{ url('lead/pdf') }}">Download PDF PDF</a>  --}}
            {{--  <a href="{{ url('lead/report/view') }}">view PDF</a>  --}}

           


@endsection

@section('bodyScriptUpdate')
 
@endsection