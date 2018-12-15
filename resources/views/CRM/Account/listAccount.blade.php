@extends('layouts.adminApp')

@section('title', '|  List Account')

@section('headAdminScriptUpdate')
<script language="JavaScript" type="text/javascript" src="{{ asset('/js/app.js')}}" async></script>
@endsection

@section('ContentHeader(Page_header)')

  
  <h1>
    <i class="fa"></i>Account 
    <a href="/account/create" title="">
          <i class="fa fa-edit"> create</i>
  </a>
  </h1>
  
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Account List</li>
  </ol>


@endsection

@section('MainContent')

    
<div class="row">
    <div class="col-12">

      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Account List</h3>
        </div>
       
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
             <tr>
                <td>{{$accounts['account_id']}}</td>
                <td><a href="{{ url('account'.'/'.$accounts['account_id'])}}">{{$accounts['account_name']}}</a></td>
              <!--  <td>{{$accounts['account_name']}}</td> -->
               <td>{{$accounts['account_mobileNo']}}</td>
               <td>{{$accounts['account_email']}}</td>
               <td>{{$accounts['account_website']}}</td>
               <td>
                <a class="btn btn-small btn-primary" href="{{$accountdata['dataArray']['data']['0']['account_id']}}">Edit</a>
                    </td>

                      <td>
                       <form action="{{$accountdata['dataArray']['data']['0']['account_id']}}" method="post">
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


