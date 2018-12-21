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

      <!-- form start -->
      {{print_r($account['id'])}}


      <!-- form start -->
      <form class="form-horizontal" action="/account" method="POST">
        {{ csrf_field() }}
        <div class="card-body">
         <div class="container-fluid">
          <div class="row">
          <div class="col-md-6">
          <div class="form-group">
          <label for="accountName" class="col-sm-8 control-label">Account Name</label>

            <div class="col-sm-10">
              <input type="text" class="form-control" id="accountName" name="accountName" disabled placeholder="Account Name">
            </div>
          </div>

             <div class="form-group">
            <label for="accountAddress" class="col-sm-8 control-label">Account Address</label>

            <div class="col-sm-10">
              <input type="text" class="form-control" id="accountAddress" name="accountAddress" disabled placeholder="Account Address">
            </div>
          </div>


          <div class="form-group">
            <label for="accountWebsite" class="col-sm-8 control-label">Website</label>

            <div class="col-sm-10">
              <input type="text" class="form-control" id="accountWebsite" name="accountWebsite" disabled placeholder="Website">
            </div>
          </div>


          <div class="form-group">
            <label for="accountEmail" class="col-sm-8 control-label">Email Id</label>

            <div class="col-sm-10">
              <input type="email" class="form-control" id="accountEmail" name="accountEmail" disabled placeholder="Enter your email">
            </div>
          </div>
          
          <div class="form-group">
            <label for="accountMobileNo" class="col-sm-8 control-label">Mobile No.</label>

            <div class="col-sm-10">
              <input type="Tell" class="form-control" id="accountMobileNo" name="accountMobileNo" disabled placeholder="Enter your number" >
            </div>
          </div>

          <div class="form-group">
            <label for="accountLandlineNo" class="col-sm-8 control-label">Landline No.</label>

            <div class="col-sm-10">
              <input type="Tell" class="form-control" id="accountLandlineNo" name="accountLandlineNo" disabled placeholder="LandlineNo">
            </div>
          </div>
        </div>
        
        <div class="col-md-6">


          <div class="form-group">
            <label for="accountCity" class="col-sm-8 control-label">City</label>

            <div class="col-sm-10">
              <input type="text" class="form-control" id="accountCity" name="accountCity" disabled placeholder="City">
            </div>
          </div>

           <div class="form-group">
            <label for="accountState" class="col-sm-8 control-label">State</label>

            <div class="col-sm-10">
              <input type="text" class="form-control" id="accountState" name="accountState" disabled placeholder="State">
            </div>
          </div>

          <div class="form-group">
            <label for="accountCountry" class="col-sm-8 control-label">Country</label>

            <div class="col-sm-10">
              <input type="text" class="form-control" id="accountCountry" name="accountCountry" disabled placeholder="Country">
            </div>
          </div>


           <div class="form-group">
            <label for="accountPinCode" class="col-sm-8 control-label">Pin Code</label>

            <div class="col-sm-10">
              <input type="text" class="form-control" id="accountPinCode" name="accountPinCode" disabled placeholder="Pincode">
            </div>
          </div>

          <div class="form-group">
            <label for="accountPanNo" class="col-sm-8 control-label">Pan No.</label>

            <div class="col-sm-10">
              <input type="text" class="form-control" id="accountPanNo" name="accountPanNo" disabled placeholder="Pan No.">
            </div>
          </div>

           <div class="form-group">
            <label for="accountGSTNo" class="col-sm-8 control-label">GST No.</label>

            <div class="col-sm-10">
              <input type="text" class="form-control" id="accountGSTNo" name="accountGSTNo" disabled placeholder="GST No.">
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
{{--  ./Horizonantal Form  --}}
  </div>
  {{--  ./Col  --}}
</div>
<!-- /.row -->

@endsection

@section('bodyScriptUpdate')
 
@endsection