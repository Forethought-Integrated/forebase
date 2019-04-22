@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    Lead Form
    <small>Control panel</small>
  </h1>
  


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
      <form role="form"  id="update-form" action="{{ asset('/lead/'.$data['lead']['lead_id']) }}" method="POST">
        {{ csrf_field() }}
        @method('PUT')
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-6">
              {{-- FormBOXBody --}}
              <div class="box-body">
                
                <div class="form-group">
                  <label for="serviceCode" >Service Code</label>
                  <input type="text" class="form-control enabelInputField" id="serviceCode" name="serviceCode" value="{{$data['lead']['lead_service_code']}}">
                </div>
                

                <div class="form-group">
                  <label for="Name" >Name</label>
                      <input type="text" class="form-control enabelInputField" id="Name" name="Name" value="{{$data['lead']['lead_name']}}">
                </div>

                <div class="form-group">
                  <label for="designation" >Designation</label>
                  <input type="text" class="form-control enabelInputField" id="designation" name="designation" value="{{$data['lead']['lead_designation']}}">
                </div>

                
                <div class="form-group">
                  <label for="companyName">Company Name</label>
                  <input type="text" class="form-control enabelInputField" id="companyName" name="companyName" value="{{$data['lead']['lead_companyName']}}" >
                </div>


                <div class="form-group">
                  <label for="mobileNo">Mobile No.</label>
                  <input type="Tell" class="form-control enabelInputField" id="mobileNo" name="mobileNo" value="{{$data['lead']['lead_mobileNo']}}">
                </div>


                <div class="form-group">
                  <label for="landLineNo">Landline No.</label>
                  <input type="Tell" class="form-control enabelInputField" id="landLineNo" name="landLineNo" value="{{$data['lead']['lead_landlineNo']}}">
                </div>


                <div class="form-group">
                  <label for="UTMWebsiteURL">UTM Website URL</label>
                  <input type="text" class="form-control enabelInputField" id="UTMWebsiteURL" name="UTMWebsiteURL" value="{{$data['lead']['lead_utm_website_url']}}">
                </div>


                <div class="form-group">
                  <label for="UTMCampaignSource">UTM Campaign Source</label>
                  <input type="text" class="form-control enabelInputField" id="UTMCampaignSource" name="UTMCampaignSource" value="{{$data['lead']['lead_utm_campaign_source']}}">
                </div>


                <div class="form-group">
                  <label for="UTMCampaignMedium">UTM Campaign Medium</label>
                  <input type="text" class="form-control enabelInputField" id="UTMCampaignMedium" name="UTMCampaignMedium" value="{{$data['lead']['lead_utm_campaign_medium']}}">
                </div>


                <div class="form-group">
                  <label for="UTMCampaignName">UTM Campaign Name</label>
                  <input type="text" class="form-control enabelInputField" id="UTMCampaignName" name="UTMCampaignName" value="{{$data['lead']['lead_utm_campaign_name']}}">
                </div>


                <div class="form-group">
                  <label for="UTMCampaignTerm">UTM Campaign Term</label>
                  <input type="text" class="form-control enabelInputField" id="UTMCampaignTerm" name="UTMCampaignTerm" value="{{$data['lead']['lead_utm_campaign_term']}}">
                </div>


                <div class="form-group">
                  <label for="UTMCampaignContent">UTM Campaign Content</label>
                  <input type="text" class="form-control enabelInputField" id="UTMCampaignContent" name="UTMCampaignContent" value="{{$data['lead']['lead_utm_campaign_content']}}">
                </div>


                <div class="form-group">
                  <label for="Email">Email</label>
                  <input type="email" class="form-control enabelInputField" id="Email" name="Email" value="{{$data['lead']['lead_email']}}">
                </div>


                <div class="form-group">
                  <label for="Address">Address</label>
                  <input type="text" class="form-control enabelInputField" id="Address" name="Address" value="{{$data['lead']['lead_address']}}">
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
                  <input type="text" class="form-control enabelInputField" id="City" name="City" value="{{$data['lead']['lead_city']}}">
                </div>

                <div class="form-group">
                  <label for="State" >State</label>
                  <input type="text" class="form-control enabelInputField" id="State" name="State" value="{{$data['lead']['lead_state']}}">
                </div>

                <div class="form-group">
                  <label for="Country" >Country</label>
                  <input type="text" class="form-control enabelInputField" id="Country" name="Country" value="{{$data['lead']['lead_country']}}">
                </div>


                <div class="form-group">
                  <label for="PinCode" >Pin Code</label>
                  <input type="text" class="form-control enabelInputField" id="PinCode" name="PinCode" value="{{$data['lead']['lead_pincode']}}">
                </div>


                  <div class="form-group">
                  <label for="Activity" >Activity</label>
                  <input type="text" class="form-control enabelInputField" id="Activity" name="Activity" value="{{$data['lead']['lead_activity']}}">
                </div>

                  <div class="form-group">
                  <label for="LeadStatus" >Lead Status</label>
                  <input type="text" class="form-control enabelInputField" id="LeadStatus" name="LeadStatus" value="{{$data['lead']['lead_Status']}}">
                </div>

                  <div class="form-group">
                  <label for="StatusInformation" >Status Information</label>
                  <input type="text" class="form-control enabelInputField" id="Status Information" name="Status Information" value="{{$data['lead']['lead_Status_Inormation']}}">
                </div>


                  <div class="form-group">
                  <label for="Source" >Source</label>
                  <input type="text" class="form-control enabelInputField" id="Source" name="Source" value="{{$data['lead']['lead_Source']}}">
                </div>


                  <div class="form-group">
                  <label for="SourceInformation" >Source Information</label>
                  <input type="text" class="form-control enabelInputField" id="SourceInformation" name="SourceInformation" value="{{$data['lead']['lead_Source_Inormation']}}">
                </div>


                  <div class="form-group">
                  <label for="CreatedByCode" >Created By Code</label>
                  <input type="text" class="form-control enabelInputField" id="CreatedByCode" name="CreatedByCode" value="{{$data['lead']['lead_Created_By_Code']}}">
                </div>


                  <div class="form-group">
                  <label for="amountCurrency" >Amount/Currency</label>
                  <input type="text" class="form-control enabelInputField" id="amountCurrency" name="amountCurrency" value="{{$data['lead']['lead_Amount_Currrency']}}">
                </div>


                  <div class="form-group">
                  <label for="Total" >Total</label>
                  <input type="text" class="form-control enabelInputField" id="Total" name="Total" value="{{$data['lead']['lead_total']}}">
                </div>


                  <div class="form-group">
                  <label for="Currency" >Currency</label>
                  <input type="text" class="form-control enabelInputField" id="Currency" name="Currency" value="{{$data['lead']['lead_Currency']}}">
                </div>


                  <div class="form-group">
                  <label for="Location" >Location</label>
                  <input type="text" class="form-control enabelInputField" id="Location" name="Location" value="{{$data['lead']['lead_Location']}}">
                </div>






                {{-- ........ --}}

              </div>
              {{-- ./FormBOXBody --}} 


            </div>
            {{-- ./RIght Form Field --}}
        </div>

        <div class="box-footer">
          <button type="submit" data-recordid="{{$data['lead']['lead_id']}}" class="btn btn-primary update-record">Update</button>
        </div> 
      </form>
      {{-- ./Form --}}
    </div>
{{--  ./Horizonantal Form  --}}
  </div>
  {{--  ./Col  --}}
</div>
<!-- /.row -->

                <script>
                 $( document ).ready(function() {
                     $('.update-record').click(function(event){ 
                      event.preventDefault();                                        
                                          
                       var url='/lead'+$(this).data('recordid');
                       
                       $('#modal-default-form').attr('action',url);                             
                       $('#modal-default').modal('show')
                     });
                   });
               </script>

@endsection

@section('bodyScriptUpdate')
@include('include.modal.updateModal')
 
@endsection