@extends('layouts.adminApp')

@section('title', 'CreateLead')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

<div class="row">
  <div class="col-sm-6">
    <h1>Update Lead</h1>
   <i id="editLead" class="fa fa-edit"></i>
  </div>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="/">Home</a></li>
      <li class="breadcrumb-item active">Lead Form</li>
    </ol>
  </div>
</div>

@endsection

@section('MainContent')
{{-- Main Row For Form Submission --}}
<div class="row">
  <div class="col-md-12">
    <form class="form-horizontal" action="{{'/lead/'.$lead->lead_id}}" method="POST">
      {{ csrf_field() }}
      
      <div class="container-fluid">
        {{-- First-Child-Row For Form Submission --}}
        {{-- Row-1 --}}
        <div class="row">
          {{-- Col-1 --}}
         {{--  *****ROw-1-Col-1*********** --}}
          <div class="col-md-6">
           {{--  *****ROw-1-Col-1-General****
 --}}
            {{-- Nested Container *****ROw-1-Col-1-General****--}}
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  <div class="card card-info  card-outline">
              <div class="card-header">
                <h3 class="card-title">General Info</h3>
                
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                {{-- The body of the card Row-1.1 --}}
                
                <div class="form-group">
                  <label for="inputServiceCode" class="col-sm-8 control-label">Service Code</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="ServiceCode" name="ServiceCode" value="{{ $lead->lead_service_code }}"  disabled />
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputName" class="col-sm-8 control-label">Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Name" name="Name" value="{{ $lead->lead_name }}"  disabled />
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputDesignation" class="col-sm-8 control-label">Designation</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Designation" name="Designation" value="{{ $lead->lead_designation }}"  disabled />
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="inputCompanyName" class="col-sm-8 control-label">Company Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="CompanyName" name="CompanyName" value="{{ $lead->lead_companyName }}"  disabled />
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputMobileNo" class="col-sm-8 control-label">Mobile No.</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="MobileNo" name="MobileNo" value="{{ $lead->lead_mobileNo }}"  disabled />
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputLandlineNo" class="col-sm-8 control-label">Landline No.</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="LandlineNo" name="LandlineNo" value="{{ $lead->lead_landlineNo }}"  disabled />
                  </div>
                </div>
                
                {{-- ./The body of the card Row-1.1 --}}
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
                </div>
              </div>
            </div>
            {{-- ./Nested Container *****ROw-1-Col-1-General****--}}

            {{-- Nested Container *****Row-1-Col-1-Campaign**** --}}
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  
                     <div class="card card-info collapsed-card card-outline">
                <div class="card-header">
                  <h3 class="card-title">Campign UTM Source</h3>
                  
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                    </button>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  {{-- The body of the card Row-2.1 --}}
                  
                  <div class="form-group">
                    <label for="inpututmWebsiteurl" class="col-sm-8 control-label">UTM Website URL</label>
  
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="utm_website_url" name="utm_website_url" value="{{ $lead->lead_utm_website_url }}"  disabled />
                    </div>
                  </div>
  
                  <div class="form-group">
                    <label for="inpututmCampaignSource" class="col-sm-8 control-label">UTM Campaign Source</label>
  
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="utm_campaign_source" name="utm_campaign_source" value="{{ $lead->lead_utm_campaign_source }}"  disabled />
                    </div>
                  </div>
  
                  <div class="form-group">
                    <label for="inpututmCampaignMedium" class="col-sm-8 control-label">UTM Campaign Medium</label>
  
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="utm_campaign_medium" name="utm_Campaign_Medium" value="{{ $lead->lead_utm_campaign_medium }}" disabled />
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputCampaignName" class="col-sm-8 control-label">UTM Campaign Name</label>
  
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="utm_campaign_name" name="utm_campaign_name" value="{{ $lead->lead_utm_campaign_name}}" disabled />
                    </div>
                  </div>
  
                  <div class="form-group">
                    <label for="inpututmCampaignTerm" class="col-sm-8 control-label">UTM Campaign Term</label>
  
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="utm_campaign_term" name="utm_campaign_term" value="{{ $lead->lead_utm_campaign_term}}" disabled />
                    </div>
                  </div>
  
                  <div class="form-group">
                    <label for="inpututmCampaignContent" class="col-sm-8 control-label">UTM Campaign Content
                    </label>
  
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="utm_campaign_content" name="utm_campaign_content" value="{{ $lead->lead_utm_campaign_content }}" disabled />
                    </div>
                  </div>
                  
                  {{-- ./The body of the card Row-2.1 --}}
                  
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
                  
                </div>
              </div>
            </div>
            {{-- ./Nested Container *****Row-1-Col-1-Campaign****--}}


            {{-- Old TO Move  Genral Info--}}
            
            {{-- ./Old TO Move  Genral Info--}}

          </div>
          <!-- /.col -->
          {{-- ./Col-1 --}}

          {{-- Col-2 --}}
          <div class="col-md-6">
            {{-- *****ROw-1-Col-2-Address**** --}}

            {{-- Nested Container *****ROw-1-Col-2-Address****--}}
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  <div class="card card-info card-outline">
              <div class="card-header">
                <h3 class="card-title">Address</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                {{-- The body of the card Row-1.2 --}}
                
                <div class="form-group">
                  <label for="inputEmail" class="col-sm-8 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="Email" name="Email" value="{{ $lead->lead_email }}" disabled />
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputAddress" class="col-sm-8 control-label">Address</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Address" name="Address"value="{{ $lead->lead_address }}" disabled />
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputCity" class="col-sm-8 control-label">City</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="City" name="City" value="{{ $lead->lead_city }}" disabled />
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputState" class="col-sm-8 control-label">State</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="State" name="State" value="{{ $lead->lead_state }}" disabled />
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputCountry" class="col-sm-8 control-label">Country</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Country" name="Country" value="{{ $lead->lead_country }}" disabled />
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPincode" class="col-sm-8 control-label">Pin Code</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Pincode" name="Pincode" value="{{ $lead->lead_pincode }}" disabled />
                  </div>
                </div>
                
                {{-- ./The body of the card Row-1.2 --}}

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
                </div>
              </div>
            </div>
            {{-- ./Nested Container *****ROw-1-Col-2-Address****--}}

            {{-- Nested Container *****Row-1-Col-2-Lead Info**** --}}
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                   <div class="card card-info collapsed-card card-outline">
                <div class="card-header">
                  <h3 class="card-title">Lead Info</h3>
  
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                    </button>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  {{-- The body of the card Row-2.2 --}}
                  
                  <div class="form-group">
                    <label for="inputactivity" class="col-sm-8 control-label">Activity</label>
  
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="activity" name="activity" value="{{ $lead->lead_activity }}" disabled />
                    </div>
                  </div>
  
                  <div class="form-group">
                    <label for="inputleadStatus" class="col-sm-8 control-label">Lead Status</label>
  
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="Lead_Status" name="Lead_Status" value="{{ $lead->lead_Status }}" disabled />
                    </div>
                  </div>
  
                  <div class="form-group">
                    <label for="inputStatusInformation" class="col-sm-8 control-label">Status Information</label>
  
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="Status_Inormation" name="Status_Inormation" value="{{ $lead->lead_Status_Inormation }}" disabled />
                    </div>
                  </div>
  
                  <div class="form-group">
                    <label for="inputSource" class="col-sm-8 control-label">Source</label>
  
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="Source" name="Source" value="{{ $lead->lead_Source }}" disabled />
                    </div>
                  </div>
  
                  <div class="form-group">
                    <label for="inputSourceInformation" class="col-sm-8 control-label">Source Information</label>
  
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="Source_Inormation" name="Source_Inormation" value="{{ $lead->lead_Source_Inormation }}" disabled />
                    </div>
                  </div>
  
                  <div class="form-group">
                    <label for="inputCreatedByCode" class="col-sm-8 control-label">Created By Code</label>
  
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="Created_By_Code" name="Created_By_Code" value="{{ $lead->lead_Created_By_Code }}" disabled />
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputAmountCurrency" class="col-sm-8 control-label">Amount/Currency</label>
  
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="Amount_Currrency" name="Amount_Currrency" value="{{ $lead->lead_Amount_Currrency }}" disabled />
                    </div>
                  </div>
                  

                  <div class="form-group">
                    <label for="inputtotal" class="col-sm-8 control-label">Total</label>
  
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="total" name="total" value="{{ $lead->lead_total }}" disabled />
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputCirrency" class="col-sm-8 control-label">Currency</label>
  
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="Currency" name="Currency"
                      value="{{ $lead->lead_Currency }}" disabled />
                    </div>
                  </div>

                   <div class="form-group">
                    <label for="inputLocation" class="col-sm-8 control-label">Location</label>
  
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="Location" name="Location" value="{{ $lead->lead_Location }}" disabled />
                    </div>
                  </div>
                  {{-- ./The body of the card Row-2.2 --}}
  
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
                </div>
              </div>
            </div>
            {{-- ./Nested Container *****Row-1-Col-2-Lead Info****--}}

            {{-- ./Nested Container *****Row-1-Col-2-Submit Button****--}}
            {{-- Submit Button --}}
      <div >
        <button type="submit" class="btn btn-info float-right" value="put">
          Update
        </button>
      </div>
      <!-- /.card-footer -->
      {{-- ./Submit Button --}}

      {{-- ./Nested Container *****Row-1-Col-2-Submit Button****--}}
            {{-- Old TO Move  Address Info--}}
            
            {{-- ./Old TO Move  Address Info--}}

          </div>
          <!-- /.col -->
          {{-- ./Col-2 --}}
          
          
        </div>
        {{-- ./Row-1 --}}


          

       

        
      </div>

      

      
    </form>
  </div>
</div>
{{-- ./Main Row For Form Submission --}}



@endsection

@section('bodyScriptUpdate')
<!-- Create Folder/Directory  Model -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <form  id="model-post-form" method="post" action="{{url('/knowledgeCenter/createFolder')}}">

        {{ csrf_field() }}
        <div class="modal-header">
          <h4 class="modal-title">Upload Sheet</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <!--<form>-->
              <div class="form-group">
                {{-- <label for="post-body">file Name</label> --}}
                <input type="file"  name="filename" id="filename">
              </div>
              <!--</form>-->
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
              <button type="submit" id="post-save-model" class="btn btn-primary">Save changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- ./Create Folder/Directory  Model -->
    
    @endsection 