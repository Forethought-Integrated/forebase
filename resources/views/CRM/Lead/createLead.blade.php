@extends('layouts.adminApp')

@section('title', 'CreateLead')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

<!-- <div class="row">
  {{-- <div class="col-sm-4"><h5>Folder</h5></div> --}}
  <div class="col-sm-8" style="padding-left: 800px"> -->
    <!-- Button to Open  Create Folder Modal -->
    <!-- <div >
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        Upload Sheet
      </button>
    </div> -->
    <!-- ./Button to Open the Modal -->
 <!--  </div>
</div> -->

<div class="row mb-2">
  <div class="col-sm-6">
    <h1>Lead Form</h1>
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
    <form class="form-horizontal" action="/lead" method="POST">
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
                    <input type="text" class="form-control" id="ServiceCode" name="ServiceCode" placeholder="Service Code">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputName" class="col-sm-8 control-label">Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Name" name="Name" placeholder="Enter your name">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputDesignation" class="col-sm-8 control-label">Designation</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Designation" name="Designation" placeholder="designation">
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="inputCompanyName" class="col-sm-8 control-label">Company Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="CompanyName" name="CompanyName" placeholder="Company name" >
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputMobileNo" class="col-sm-8 control-label">Mobile No.</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="MobileNo" name="MobileNo" placeholder="mobile no">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputLandlineNo" class="col-sm-8 control-label">Landline No.</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="LandlineNo" name="LandlineNo" placeholder="landline no">
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
                      <input type="text" class="form-control" id="utm_website_url" name="utm_website_url" placeholder="UTM Website URL">
                    </div>
                  </div>
  
                  <div class="form-group">
                    <label for="inpututmCampaignSource" class="col-sm-8 control-label">UTM Campaign Source</label>
  
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="utm_campaign_source" name="utm_campaign_source" placeholder="UTM Campaign Source">
                    </div>
                  </div>
  
                  <div class="form-group">
                    <label for="inpututmCampaignMedium" class="col-sm-8 control-label">UTM Campaign Medium</label>
  
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="utm_campaign_medium" name="utm_Campaign_Medium" placeholder="UTM Campaign Medium">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputCampaignName" class="col-sm-8 control-label">UTM Campaign Name</label>
  
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="utm_campaign_name" name="utm_campaign_name" placeholder="UTM Campaign Name">
                    </div>
                  </div>
  
                  <div class="form-group">
                    <label for="inpututmCampaignTerm" class="col-sm-8 control-label">UTM Campaign Term</label>
  
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="utm_campaign_term" name="utm_campaign_term" placeholder="UTM Campaign Term">
                    </div>
                  </div>
  
                  <div class="form-group">
                    <label for="inpututmCampaignContent" class="col-sm-8 control-label">UTM Campaign Content
                    </label>
  
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="utm_campaign_content" name="utm_campaign_content" placeholder="UTM Campaign Content">
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
                    <input type="email" class="form-control" id="Email" name="Email" placeholder="email">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputAddress" class="col-sm-8 control-label">Address</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Address" name="Address" placeholder="address">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputCity" class="col-sm-8 control-label">City</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="City" name="City" placeholder="city">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputState" class="col-sm-8 control-label">State</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="State" name="State" placeholder="state">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputCountry" class="col-sm-8 control-label">Country</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Country" name="Country" placeholder="country">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPincode" class="col-sm-8 control-label">Pin Code</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Pincode" name="Pincode" placeholder="pin code">
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
                      <input type="text" class="form-control" id="activity" name="activity" placeholder="Activity">
                    </div>
                  </div>
  
                  <div class="form-group">
                    <label for="inputleadStatus" class="col-sm-8 control-label">Lead Status</label>
  
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="Lead_Status" name="Lead_Status" placeholder="Enter Status">
                    </div>
                  </div>
  
                  <div class="form-group">
                    <label for="inputStatusInformation" class="col-sm-8 control-label">Status Information</label>
  
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="Status_Inormation" name="Status_Inormation" placeholder="Status Information">
                    </div>
                  </div>
  
                  <div class="form-group">
                    <label for="inputSource" class="col-sm-8 control-label">Source</label>
  
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="Source" name="Source" placeholder="source">
                    </div>
                  </div>
  
                  <div class="form-group">
                    <label for="inputSourceInformation" class="col-sm-8 control-label">Source Information</label>
  
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="Source_Inormation" name="Source_Inormation" placeholder="Source Information">
                    </div>
                  </div>
  
                  <div class="form-group">
                    <label for="inputCreatedByCode" class="col-sm-8 control-label">Created By Code</label>
  
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="Created_By_Code" name="Created_By_Code" placeholder="Created By Code">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputAmountCurrency" class="col-sm-8 control-label">Amount/Currency</label>
  
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="Amount_Currrency" name="Amount_Currrency" placeholder="Amount_Currency">
                    </div>
                  </div>
                  

                  <div class="form-group">
                    <label for="inputtotal" class="col-sm-8 control-label">Total</label>
  
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="total" name="total" placeholder="Total">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputCirrency" class="col-sm-8 control-label">Currency</label>
  
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="Currency" name="Currency"
                      placeholder="Currency">
                    </div>
                  </div>

                   <div class="form-group">
                    <label for="inputLocation" class="col-sm-8 control-label">Location</label>
  
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="Location" name="Location" placeholder="Location">
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
        <button type="submit" class="btn btn-info float-right">
          Submit
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