@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    Account Form
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i>Home</a></li>
    <li class="active">Account Form</li>
  </ol>

@endsection

@section('MainContent') 
<div class="row">
  <!--  column -->
  <div class="col-md-12">
    <!-- Horizontal Form -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Enter Detail</h3>
      </div>
      <!-- /.card-header -->

      {{-- form--}}
      <form role="form" action="/account" method="POST">
        {{ csrf_field() }}
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-6">
              {{-- FormBOXBody --}}
              <div class="box-body">
                
                <div class="form-group">
                  <label for="accountName" >Account Name</label>
                  <input type="text" class="form-control" id="accountName" name="accountName" placeholder="Account Name">
                </div>
                

                <div class="form-group">
                  <label for="accountAddress" >Account Address</label>
                      <input type="text" class="form-control" id="accountAddress" name="accountAddress" placeholder="Account Address">
                </div>

                <div class="form-group">
                  <label for="accountWebsite" >Website</label>
                  <input type="text" class="form-control" id="accountWebsite" name="accountWebsite" placeholder="Website">
                </div>


                <div class="form-group">
                  <label for="accountEmail" >Email Id</label>
                  <input type="email" class="form-control" id="accountEmail" name="accountEmail" placeholder="Enter your email">
                </div>
                
                <div class="form-group">
                  <label for="accountMobileNo" >Mobile No.</label>
                  <input type="Tell" class="form-control" id="accountMobileNo" name="accountMobileNo" placeholder="Enter your number" >
                </div>

                <div class="form-group">
                  <label for="accountLandlineNo" >Landline No.</label>
                  <input type="Tell" class="form-control" id="accountLandlineNo" name="accountLandlineNo" placeholder="LandlineNo">
                  
                </div>

              </div>
              {{-- ./FormBOXBody --}}
            </div>
            {{-- ./Left Form Field --}}

            {{-- RIght Form Field --}}
            <div class="col-md-6">
              {{-- FormBOXBody --}}
              <div class="box-body">
                
                {{-- ........ --}}

                <div class="form-group">
                  <label for="accountCity" >City</label>
                  <input type="text" class="form-control" id="accountCity" name="accountCity" placeholder="City">
                </div>

                <div class="form-group">
                  <label for="accountState" >State</label>
                  <input type="text" class="form-control" id="accountState" name="accountState" placeholder="State">
                </div>

                <div class="form-group">
                  <label for="accountCountry" >Country</label>
                  <input type="text" class="form-control" id="accountCountry" name="accountCountry" placeholder="Country">
                </div>


                <div class="form-group">
                  <label for="accountPinCode" >Pin Code</label>
                  <input type="text" class="form-control" id="accountPinCode" name="accountPinCode" placeholder="Pincode">
                </div>

                <div class="form-group">
                  <label for="accountPanNo" >Pan No.</label>
                  <input type="text" class="form-control" id="accountPanNo" name="accountPanNo" placeholder="Pan No.">
                </div>

                <div class="form-group">
                  <label for="accountGSTNo" >GST No.</label>
                  <input type="text" class="form-control" id="accountGSTNo" name="accountGSTNo" placeholder="GST No.">
                </div>


                {{-- ........ --}}

              </div>
              {{-- ./FormBOXBody --}} 


            </div>
            {{-- ./RIght Form Field --}}
        </div>

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div> 
      </form>
      {{-- ./Form --}}
    </div>
{{--  ./Horizonantal Form  --}}
  </div>
  {{--  ./Col  --}}
</div>
<!-- /.row -->

@endsection

@section('bodyScriptUpdate')
 
@endsection