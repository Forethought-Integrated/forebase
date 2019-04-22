@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    Lead Form
    
  </h1> 
  

{{-- <pre>{{print_r($data)}}</pre> --}}
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
      <form role="form" action="{{ asset('/lead') }}" method="POST">
        {{ csrf_field() }}
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-6">
              {{-- FormBOXBody --}}
              <div class="box-body">
                
                <input type="hidden" class="form-control" id="serviceCode" name="contactID" placeholder="Service Code" value="{{$data['contact']['contact_id']}}">
                <input type="hidden" class="form-control" id="serviceCode" name="accountID" placeholder="Service Code" value="{{$data['account']['account_id']}}">

                <div class="form-group">
                  <label for="serviceCode" >Service Code</label>
                  <input type="text" class="form-control" id="serviceCode" name="serviceCode" placeholder="Service Code">
                </div>
                

                <div class="form-group">
                  <label for="Name">Name</label>
                      <input type="text" class="form-control" id="Name" name="Name" placeholder="Name" value="{{$data['contact']['contact_name']}}">
                </div>

                <div class="form-group">
                  <label for="designation" >Designation</label>
                  <input type="text" class="form-control" id="designation" name="designation" placeholder="Designation"  value="{{$data['contact']['contact_designation']}}">
                </div>

                
                <div class="form-group">
                  <label for="companyName">Company Name</label>
                  <input type="text" class="form-control" id="companyName" name="companyName" placeholder="Enter Your Company Name" value="{{$data['contact']['contact_companyName']}}">
                </div>


                <div class="form-group">
                  <label for="mobileNo">Mobile No.</label>
                  <input type="Tell" class="form-control" id="mobileNo" name="mobileNo" placeholder="Mobile No." value="{{$data['contact']['contact_mobileNo']}}" >
                </div>


                <div class="form-group">
                  <label for="landLineNo">Landline No.</label>
                  <input type="Tell" class="form-control" id="landLineNo" name="landLineNo" placeholder="Landline No." value="{{$data['contact']['contact_landlineNo']}}" >
                </div>


                <div class="form-group">
                  <label for="UTMWebsiteURL">UTM Website URL</label>
                  <input type="text" class="form-control" id="UTMWebsiteURL" name="UTMWebsiteURL" placeholder="UTM Website URL" >
                </div>


                <div class="form-group">
                  <label for="UTMCampaignSource">UTM Campaign Source</label>
                  <input type="text" class="form-control" id="UTMCampaignSource" name="UTMCampaignSource" placeholder="UTM Campaign Source" >
                </div>


                <div class="form-group">
                  <label for="UTMCampaignMedium">UTM Campaign Medium</label>
                  <input type="text" class="form-control" id="UTMCampaignMedium" name="UTMCampaignMedium" placeholder="UTM Campaign Medium" >
                </div>


                <div class="form-group">
                  <label for="UTMCampaignName">UTM Campaign Name</label>
                  <input type="text" class="form-control" id="UTMCampaignName" name="UTMCampaignName" placeholder="UTM Campaign Name" >
                </div>


                <div class="form-group">
                  <label for="UTMCampaignTerm">UTM Campaign Term</label>
                  <input type="text" class="form-control" id="UTMCampaignTerm" name="UTMCampaignTerm" placeholder="UTM Campaign Term" >
                </div>


                <div class="form-group">
                  <label for="UTMCampaignContent">UTM Campaign Content</label>
                  <input type="text" class="form-control" id="UTMCampaignContent" name="UTMCampaignContent" placeholder="UTM Campaign Content">
                </div>


                <div class="form-group">
                  <label for="Email">Email</label>
                  <input type="email" class="form-control" id="Email" name="Email" placeholder="Enter your Email" value="{{$data['contact']['contact_email']}}">
                </div>


                <div class="form-group">
                  <label for="Address">Address</label>
                  <input type="text" class="form-control" id="Address" name="Address" placeholder="Enter your Address" value="{{$data['account']['account_address']}}">
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
                  <label for="City" >City</label>
                  <input type="text" class="form-control" id="City" name="City" placeholder="City" value="{{$data['account']['account_city']}}">
                </div>

                <div class="form-group">
                  <label for="State" >State</label>
                  <input type="text" class="form-control" id="State" name="State" placeholder="State" value="{{$data['account']['account_state']}}">
                </div>

                <div class="form-group">
                  <label for="Country" >Country</label>
                  <input type="text" class="form-control" id="Country" name="Country" placeholder="Country" value="{{$data['account']['account_country']}}">
                </div>


                <div class="form-group">
                  <label for="PinCode">Pin Code</label>
                  <input type="text" class="form-control" id="PinCode" name="PinCode" placeholder="Pin Code"  value="{{$data['account']['account_pincode']}}">
                </div>


                  <div class="form-group">
                  <label for="Activity" >Activity</label>
                  <input type="text" class="form-control" id="Activity" name="Activity" placeholder="Activity">
                </div>

                  <div class="form-group">
                  <label for="LeadStatus" >Lead Status</label>
                  <input type="text" class="form-control" id="LeadStatus" name="LeadStatus" placeholder="Lead Status">
                </div>

                  <div class="form-group">
                  <label for="StatusInformation" >Status Information</label>
                  <input type="text" class="form-control" id="StatusInformation" name="StatusInformation" placeholder="Status Information">
                </div>


                  <div class="form-group">
                  <label for="Source" >Source</label>
                  <input type="text" class="form-control" id="Source" name="Source" placeholder="Source">
                </div>


                  <div class="form-group">
                  <label for="SourceInformation" >Source Information</label>
                  <input type="text" class="form-control" id="SourceInformation" name="SourceInformation" placeholder="Source Information">
                </div>


                  <div class="form-group">
                  <label for="CreatedByCode" >Created By Code</label>
                  <input type="text" class="form-control" id="CreatedByCode" name="CreatedByCode" placeholder="Created By Code">
                </div>


                  <div class="form-group">
                  <label for="amountCurrency" >Amount/Currency</label>
                  <input type="text" class="form-control" id="amountCurrency" name="amountCurrency" placeholder="Amount/Currency">
                </div>


                  <div class="form-group">
                  <label for="Total" >Total</label>
                  <input type="text" class="form-control" id="Total" name="Total" placeholder="Total">
                </div>


                  <div class="form-group">
                  <label for="Currency" >Currency</label>
                  <input type="text" class="form-control" id="Currency" name="Currency" placeholder="Currency">
                </div>


                  <div class="form-group">
                  <label for="Location" >Location</label>
                  <input type="text" class="form-control" id="Location" name="Location" placeholder="Location">
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