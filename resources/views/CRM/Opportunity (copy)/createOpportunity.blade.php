@extends('layouts.adminApp')

@section('title', '|  Create Opportunity')

@section('headAdminScriptUpdate')
<script language="JavaScript" type="text/javascript" src="{{ asset('/js/app.js')}}" async></script>
@endsection

@section('ContentHeader(Page_header)')

 <h1>
    <i class="fa"></i>Opportunity Form
  </h1>
  
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Create Opportunity</li>
  </ol>

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
        <!-- form start -->
        <form class="form-horizontal" action="/opportunity" method="POST">
          {{ csrf_field() }}
            <div class="card-body">                
            <div class="container-fluid">
            <div class="row">
            <div class="col-md-6">
            <div class="form-group">
              <label for="inputdealowner" class="col-sm-8 control-label">Deal Owner</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="dealowner" name="dealowner" placeholder="Deal Owner">
              </div>
            </div>

            <div class="form-group">
              <label for="inputdealname" class="col-sm-8 control-label">Deal Name</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="dealname" name="dealname" placeholder="Deal Name">
              </div>
            </div>

            <div class="form-group">
              <label for="inputaccountname" class="col-sm-8 control-label">Account Name</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="accountname" name="accountname" placeholder="Account Name">
              </div>
            </div>
            
            <div class="form-group">
              <label for="inputtype" class="col-sm-8 control-label">Type</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="type" name="type" placeholder="Type" >
              </div>
            </div>

            <div class="form-group">
              <label for="inputleadid" class="col-sm-8 control-label">Lead ID</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="leadid" name="leadid" placeholder="Lead ID" >
              </div>
            </div>

                <div class="form-group">
              <label for="inputcampaignid" class="col-sm-8 control-label">Campaign ID</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="campaignid" name="campaignid" placeholder="Campaign ID" >
              </div>
            </div>
            
</div>
<div class="col-md-6">

<div class="form-group">
              <label for="inputcontactid" class="col-sm-8 control-label">Contact ID</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="contactid" name="contactid" placeholder="Contact ID">
              </div>
            </div>

            <div class="form-group">
              <label for="inputamount" class="col-sm-8 control-label">Amount</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="amount" name="amount" placeholder="Amount">
              </div>
            </div>

            <div class="form-group">
              <label for="inputclosingdate" class="col-sm-8 control-label">Closing date</label>

              <div class="col-sm-10">
                <input type="date" class="form-control" id="closingdate" name="closingdate" placeholder="Closing date">
              </div>
            </div>

            <div class="form-group">
              <label for="inputstage" class="col-sm-8 control-label">Satge</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="stage" name="stage" placeholder="Satge">
              </div>
            </div>      

                <div class="form-group">
              <label for="inputprobability" class="col-sm-8 control-label">Probability</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="probability" name="probability" placeholder="Probability">
              </div>
            </div>  

              <div class="form-group">
              <label for="inputexpectedrevenue" class="col-sm-8 control-label">Expected Revenue</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="expectedrevenue" name="expectedrevenue" placeholder="Expected Revenue">
              </div>
            </div>  

              <div class="form-group">
              <label for="inputdescription" class="col-sm-8 control-label">Description</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="description" name="description" placeholder="Description">
              </div>
            </div>  
</div>  

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


