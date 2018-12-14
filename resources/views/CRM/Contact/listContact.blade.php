@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')


<div class="row mb-2">
    <div class="col-sm-6">
      <h1>Leave</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active">Contact List</li>
      </ol>
    </div>
  </div>

@endsection

@section('MainContent')

<div class="row">
    <div class="col-12">

      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Contact List</h3>         
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <td>Contact ID</td>
                <td>Contact Type</td>
                <td>Name</td>
                <td>Mobile No</td>
                <td>Landline No</td>
                <td>Email</td>
                <td>Edit</td>
                <td>Delete</td>
               
              </tr>
            </thead>
            <tbody>
              @foreach($contactdata['dataArray']['data'] as $contacts)
              <tr>
                <td>{{$contacts['contact_id']}}</td>
                <td>{{$contacts['contact_type']}}</td>
                <td><a href="{{ url('contact'.'/'.$contacts['contact_id'])}}">{{$contacts['contact_name']}}</a></td>
                <td>{{$contacts['contact_mobileNo']}}</td>
                <td>{{$contacts['contact_landlineNo']}}</td>
                <td>{{$contacts['contact_email']}}</td>
                  <td>
                <a class="btn btn-small btn-primary" href="{{ url('contact'.'/' . $contactdata['dataArray']['data']['0']['contact_id']) }}">Edit</a>
                    </td>
                      <td>
                       <form action="{{ url('contact'.'/' .$contactdata['dataArray']['data']['0']['contact_id']) }}" method="post">
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
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

@endsection

@section('bodyScriptUpdate')
 
@endsection