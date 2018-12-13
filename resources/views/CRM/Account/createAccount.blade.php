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
      <form class="form-horizontal" action="/account" method="POST">
        {{ csrf_field() }}
        <div class="card-body">
         <div class="container-fluid">
          <div class="row">
          <div class="col-md-6">
          <div class="form-group">
          <label for="inputName" class="col-sm-8 control-label">Account Name</label>

            <div class="col-sm-10">
              <input type="text" class="form-control" id="Name" name="Name" placeholder="Account Name">
            </div>
          </div>

             <div class="form-group">
            <label for="inputAddress" class="col-sm-8 control-label">Account Address</label>

            <div class="col-sm-10">
              <input type="text" class="form-control" id="Address" name="Address" placeholder="Account Address">
            </div>
          </div>


          <div class="form-group">
            <label for="inputWebsite" class="col-sm-8 control-label">Website</label>

            <div class="col-sm-10">
              <input type="text" class="form-control" id="Website" name="Website" placeholder="Website">
            </div>
          </div>


          <div class="form-group">
            <label for="inputEmail" class="col-sm-8 control-label">Email Id</label>

            <div class="col-sm-10">
              <input type="email" class="form-control" id="Email" name="Email" placeholder="Enter your email">
            </div>
          </div>
          
          <div class="form-group">
            <label for="inputMobileNo" class="col-sm-8 control-label">Mobile No.</label>

            <div class="col-sm-10">
              <input type="Tell" class="form-control" id="MobileNo" name="MobileNo" placeholder="Enter your number" >
            </div>
          </div>

          <div class="form-group">
            <label for="inputLandlineNo" class="col-sm-8 control-label">Landline No.</label>

            <div class="col-sm-10">
              <input type="Tell" class="form-control" id="LandlineNo" name="LandlineNo" placeholder="LandlineNo">
            </div>
          </div>
</div>
       <div class="col-md-6">


          <div class="form-group">
            <label for="inputCity" class="col-sm-8 control-label">City</label>

            <div class="col-sm-10">
              <input type="text" class="form-control" id="City" name="City" placeholder="city">
            </div>
          </div>

           <div class="form-group">
            <label for="inputState" class="col-sm-8 control-label">State</label>

            <div class="col-sm-10">
              <input type="text" class="form-control" id="State" name="State" placeholder="State">
            </div>
          </div>

          <div class="form-group">
            <label for="inputCountry" class="col-sm-8 control-label">Country</label>

            <div class="col-sm-10">
              <input type="text" class="form-control" id="Country" name="Country" placeholder="State">
            </div>
          </div>


           <div class="form-group">
            <label for="inputPincode" class="col-sm-8 control-label">Pin Code.</label>

            <div class="col-sm-10">
              <input type="number" class="form-control" id="Pincode" name="Pincode" placeholder="Pincode">
            </div>
          </div>

          <div class="form-group">
            <label for="inputPanNo" class="col-sm-8 control-label">Pan No.</label>

            <div class="col-sm-10">
              <input type="text" class="form-control" id="PanNo" name="PanNo" placeholder="PanNo">
            </div>
          </div>

           <div class="form-group">
            <label for="inputGstNo" class="col-sm-8 control-label">GST No.</label>

            <div class="col-sm-10">
              <input type="text" class="form-control" id="GstNo" name="GstNo" placeholder="GstNo">
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