@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')


<div class="row mb-2">
    <div class="col-sm-6">
      <h1>Account</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active">Account List</li>
      </ol>
    </div>
</div>

@endsection

@section('MainContent')

<div class="row">
    <div class="col-12">

      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Account List</h3>
        </div>
        {{$accountdata['dataArray']['data']['0']['account_name']}}
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <td>Account ID</td>
                <td>Account Name</td>
                <td>Mobile No</td>
                <td>Email</td>
                <td>Website</td>
                <td>Edit</td>
                <td>Delete</td>
              </tr>
            </thead>
            <tbody>

             @foreach($accountdata['dataArray']['data'] as $accounts)
             {{ $accounts['account_name']}}<br>

             <tr>
                <td>{{$accounts['account_id']}}</td>
               <td>{{$accounts['account_name']}}</td>
               <td>{{$accounts['account_mobileNo']}}</td>
               <td>{{$accounts['account_email']}}</td>
               <td>{{$accounts['account_website']}}</td>
               <td>
                <a class="btn btn-small btn-primary" href="{{$accountdata['dataArray']['data']['0']['account_name']}}">Edit</a>
                    </td>

                      <td>
                       <form action="{{$accountdata['dataArray']['data']['0']['account_name']}}" method="post">
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