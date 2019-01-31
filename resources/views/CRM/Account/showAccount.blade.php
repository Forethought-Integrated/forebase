@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    Account Detail
    <a id="editFormField" href="/account/{{$data['account']['account_id']}}/edit/" title="">
      <i class="fa fa-edit">Edit</i>
    </a>
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Account Detail</li>
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
      <form role="form">
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-6">
              {{-- FormBOXBody --}}
              <div class="box-body">
                
                <div class="form-group">
                  <label for="name" >Name</label>
                  <input type="text" class="form-control enabelInputField" id="name" name="name" value="{{$data['account']['account_name']}}" disabled>
                </div>

                <div class="form-group">
                  <label for="accountWebsite" >Website</label>
                  <input type="text" class="form-control enabelInputField" id="accountWebsite" name="accountWebsite" value="{{$data['account']['account_website']}}" disabled>
                </div>


                <div class="form-group">
                  <label for="accountEmail" >Email Id</label>
                  <input type="email" class="form-control enabelInputField" id="accountEmail" name="accountEmail" value="{{$data['account']['account_email']}}" disabled>
                </div>
                
                <div class="form-group">
                  <label for="accountMobileNo" >Mobile No.</label>
                  <input type="Tell" class="form-control enabelInputField" id="accountMobileNo" name="accountMobileNo" value="{{$data['account']['account_mobileNo']}}" disabled>
                </div>

                <div class="form-group">
                  <label for="accountLandlineNo" >Landline No.</label>
                  <input type="Tell" class="form-control enabelInputField" id="accountLandlineNo" name="accountLandlineNo" value="{{$data['account']['account_landlineNo']}}" disabled>
                </div>

                <div class="form-group">
                  <label for="description" >Address</label>
                  <input type="text" class="form-control enabelInputField" id="description" name="description" value="{{$data['account']['account_address']}}" disabled>
                </div>


              </div>
              {{-- ./FormBOXBody --}}
            </div>
            {{-- ./Left Form Field --}}

            {{-- RIght Form Field --}}
            <div class="col-md-6">
              {{-- FormBOXBody --}}
              <div class="box-body">
                

                <div class="form-group">
                  <label for="accountCity" >City</label>
                  <input type="text" class="form-control enabelInputField" id="accountCity" name="accountCity" value="{{$data['account']['account_city']}}" disabled>
                </div>

                <div class="form-group">
                  <label for="accountState" >State</label>
                  <input type="text" class="form-control enabelInputField" id="accountState" name="accountState" value="{{$data['account']['account_state']}}" disabled>
                </div>

                <div class="form-group">
                  <label for="accountCountry" >Country</label>
                  <input type="text" class="form-control enabelInputField" id="accountCountry" name="accountCountry" value="{{$data['account']['account_country']}}" disabled>
                </div>


                <div class="form-group">
                  <label for="accountPinCode" >Pin Code</label>
                  <input type="text" class="form-control enabelInputField" id="accountPinCode" name="accountPinCode" value="{{$data['account']['account_pincode']}}" disabled>
                </div>

                <div class="form-group">
                  <label for="accountPanNo" >Pan No.</label>
                  <input type="text" class="form-control enabelInputField" id="accountPanNo" name="accountPanNo" value="{{$data['account']['account_panNo']}}" disabled>
                </div>

                <div class="form-group">
                  <label for="accountGSTNo" >GST No.</label>
                  <input type="text" class="form-control enabelInputField" id="accountGSTNo" name="accountGSTNo" value="{{$data['account']['account_GSTNo']}}" disabled>
                </div>


              </div>
              {{-- ./FormBOXBody --}} 


            </div>
            {{-- ./RIght Form Field --}}
        </div>

        {{-- <div class="box-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div> --}} 
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