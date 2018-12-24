@extends('layouts.adminApp')

@section('title', '|  Campaign')

@section('headAdminScriptUpdate')
<script language="JavaScript" type="text/javascript" src="{{ asset('/js/app.js')}}" async></script>
@endsection

@section('ContentHeader(Page_header)')

 <h1>
    <i class="fa"></i>Campaign
    <a href="/campaign/create" title="">
          <i class="fa fa-edit"> create</i>
  </a>
  </h1>
  
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Campaign List</li>
  </ol>

@endsection

@section('MainContent')

<div class="row">
    <div class="col-12">

      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Campaign List</h3>
        </div>
       

        <!-- /.card-header -->
        <div class="card-body">
        <div  class="table-responsive">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <td>Campaign ID</td>
                <td>Campaign Name</td>
                <td>Campaign Type</td>
                <td>Description</td>
                <td>Start Date</td>
                <td>End Date</td>
                <td>Budget Cost</td>
                <td>Edit</td>
                <td>Delete</td>
                
              </tr>
            </thead>
            <tbody>

              @foreach($campaigndata['dataArray']['data'] as $campaigns)
              <tr>
             <td>{{$campaigns['campaign_id']}}</td>
             <td><a href="{{ url('campaign'.'/'.$campaigns['campaign_id'])}}">{{$campaigns['campaign_name']}}</a></td>
             <!-- <td>{{$campaigns['campaign_name']}}</td> -->
             <td>{{$campaigns['campaign_type']}}</td>
             <td>{{$campaigns['campaign_description']}}</td>
             <td>{{$campaigns['campaign_startDate']}}</td>
             <td>{{$campaigns['campaign_endDate']}}</td>
             <td>{{$campaigns['campaign_budgetCost']}}</td>
                <td>
                <a class="btn btn-small btn-primary" href="{{url('campaign'.'/'.$campaigndata['dataArray']['data']['0']['campaign_id'])}}">Edit</a>
                    </td>
                      <td>
                       <form action="{{url('campaign'.'/'.$campaigndata['dataArray']['data']['0']['campaign_id'])
                     }}" method="post">
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
    <!-- /.row -->


@endsection

@section('bodyScriptUpdate')
 
@endsection


