@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

<div class="row mb-2">
    <div class="col-sm-6">
      <h1>Contact Form</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active">Opportunity Form</li>
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
          <center><h3 class="card-title">Fill Correct Detail</h3></center>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" action="/opportunity" method="POST">
          {{ csrf_field() }}
          <div class="card-body">
            <div class="form-group">
              <label for="inputdealowner" class="col-sm-8 control-label">Deal Owner</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="DealOwner" name="DealOwner">
              </div>
            </div>

            <div class="form-group">
              <label for="inputDealName" class="col-sm-8 control-label">Deal Name</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="DealName" name="DealName">
              </div>
            </div>

            <div class="form-group">
              <label for="inputAccountName" class="col-sm-8 control-label">Account Name</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="AccountName" name="AccountName">
              </div>
            </div>
            
            <div class="form-group">
              <label for="inputtype" class="col-sm-8 control-label">Type</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="type" name="type" >
              </div>
            </div>

            <div class="form-group">
              <label for="inputLeadid" class="col-sm-8 control-label">Lead ID</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="Leadid" name="Leadid">
              </div>
            </div>

            <div class="form-group">
              <label for="inputCampaignID" class="col-sm-8 control-label">Campaign ID</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="CampaignID" name="CampaignID">
              </div>
            </div>

            <div class="form-group">
              <label for="inputContactID" class="col-sm-8 control-label">Contact ID</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="ContactID" name="ContactID">
              </div>
            </div>

            <div class="form-group">
              <label for="inputamount" class="col-sm-8 control-label">Amount</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="amount" name="amount">
              </div>
            </div>

            <div class="form-group">
              <label for="inputclosingdate" class="col-sm-8 control-label">Closing Date</label>

              <div class="col-sm-10">
                <input type="Date" class="form-control" id="closingdate" name="closingdate">
              </div>
            </div>

              <div class="form-group">
              <label for="inputstage" class="col-sm-8 control-label">Stage</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="Stage" name="stage">
              </div>
            </div>

              <div class="form-group">
              <label for="inputprobability" class="col-sm-8 control-label">Probability</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="probability" name="probability">
              </div>
            </div>

                        <div class="form-group">
              <label for="inputexpectationrevenue" class="col-sm-8 control-label">Expectation Revenue</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="expectationrevenue" name="expectationrevenue">
              </div>
            </div>

                        <div class="form-group">
              <label for="inputdescription" class="col-sm-8 control-label">Description</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="description" name="description">
              </div>
            </div>        
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-info float-right">Submit</button>
          </div>
          <!-- /.card-footer -->
        </form>
        
      </div>

    </div>
  </div>
  <!-- /.row -->

@endsection

@section('bodyScriptUpdate')
 
@endsection