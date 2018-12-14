@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

<div class="row mb-2">
    <div class="col-sm-6">
      <h1>Opportunity</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active">Opportunity List</li>
      </ol>
    </div>
  </div>

@endsection

@section('MainContent')

<div class="row">
    <div class="col-12">

      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Opportunity List</h3>
        </div>
       

        <!-- /.card-header -->
        <div class="card-body">
        <div  class="table-responsive">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
              <td>Opportunity ID</td>
              <td>Deal Owner</td>
              <td>Deal Name</td>
              <td>Account Name</td>
              <td>Lead ID</td>
              <td>Campaign ID</td>
              <td>Contact ID</td>
              <td>Amount</td>
              <td>Satge</td>
              <td>Edit</td>
              <td>Delete</td>   
              </tr>
            </thead>
            <tbody>
              @foreach($opportunitydata['dataArray']['data'] as $opportunities)
             <tr>
             <td>{{$opportunities['opportunity_id']}}</td>
             <td>{{$opportunities['opportunity_deal_owner']}}</td>
             <td><a href="{{ url('opportunity'.'/'.$opportunities['opportunity_deal_name'])}}">{{$opportunities['opportunity_deal_name']}}</a></td>
             
             <td>{{$opportunities['opportunity_account_name']}}</td>
             <td>{{$opportunities['opportunity_lead_id']}}</td>
             <td>{{$opportunities['opportunity_campaign_id']}}</td>
             <td>{{$opportunities['opportunity_contact_id']}}</td>
             <td>{{$opportunities['opportunity_amount']}}</td>
             <td>{{$opportunities['opportunity_stage']}}</td>

                <td>
                <a class="btn btn-small btn-primary" href="{{ $opportunitydata['dataArray']['data']['0']['opportunity_id'] }}">Edit</a>
                    </td>

                      <td>
                       <form action="{{ $opportunitydata['dataArray']['data']['0']['opportunity_id'] }}" method="post">
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