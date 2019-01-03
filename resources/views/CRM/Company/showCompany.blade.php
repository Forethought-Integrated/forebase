@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    Company Detail
    <a id="editFormField" href="/companies/{{ $companies->company_id}}/edit/" title="">
      <i class="fa fa-edit">Edit</i>
    </a>
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Company Detail</li>
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
       {{csrf_field()}}
      <form role="form">
        {{csrf_field()}}
        @method('PUT')
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-6">
              {{-- FormBOXBody --}}
              <div class="box-body">
                
                <div class="form-group">
                  <label for="company_name" >Company Name</label>
                  <input type="text" class="form-control enabelInputField" id="company_name" name="company_name" value="{{ $companies->company_name}}" disabled>
                </div>
                

                <div class="form-group">
                  <label for="company_registration_address" >Company Registration Address</label>
                      <input type="text" class="form-control enabelInputField" id="company_registration_address" name="company_registration_address" value="{{ $companies->company_registration_address}}" disabled>
                </div>

                <div class="form-group">
                  <label for="company_state" >Company State</label>
                  <input type="text" class="form-control enabelInputField" id="company_state" name="company_state" value="{{ $companies->company_state}}" disabled>
                </div>


                <div class="form-group">
                  <label for="company_country" >Company Country</label>
                  <input type="text" class="form-control enabelInputField" id="company_country" name="company_country" value="{{ $companies->company_country}}" disabled>
                </div>
                
                <div class="form-group">
                  <label for="company_pincode" >Company pincode</label>
                  <input type="varchar" class="form-control enabelInputField" id="company_pincode" name="company_pincode" value="{{$companies->company_pincode}}" disabled>
                </div>

                <div class="form-group">
                  <label for="company_email" >Company Email</label>
                  <input type="Text" class="form-control enabelInputField" id="company_email" name="company_email" value="{{ $companies-> company_email}}" disabled>
                </div>

                 <div class="form-group">
                  <label for="company_phone_no" >Company Phone No.</label>
                  <input type="Text" class="form-control enabelInputField" id="company_phone_no" name="company_phone_no" value="{{ $companies-> company_phone_no}}" disabled>
                </div>

              </div>
              {{-- ./FormBOXBody --}}
            </div>
            {{-- ./Left Form Field --}}

            {{-- RIght Form Field --}} 

            {{-- RIght Form Field --}}
            <div class="col-md-6">
              {{-- FormBOXBody --}}
              <div class="box-body">
                
                {{-- ........ --}}

                

                <div class="form-group">
                  <label for="company_primary_contact" >Company Primary Contact</label>
                  <input type="varchar" class="form-control" id="company_primary_contact" name="company_primary_contact"  value="{{ $companies->company_primary_contact}}" disabled >
                </div>

                <div class="form-group">
                  <label for="company_secondary_contact" >Company Secondry Contact</label>
                  <input type="varchar" class="form-control" id="company_secondary_contact" name="company_secondary_contact"  value="{{ $companies->company_secondary_contact}}" disabled>
                </div>


                <div class="form-group">
                  <label for="company_pan_no" >Company Pan No.</label>
                  <input type="varchar" class="form-control" id="company_pan_no" name="company_pan_no"  value="{{ $companies-> company_pan_no}}" disabled>
                </div>

                <div class="form-group">
                  <label for="company_registration_no" >Company Registration No.</label>
                  <input type="varchar" class="form-control" id="company_registration_no" name="company_registration_no"  value="{{ $companies-> company_registration_no}}" disabled>
                </div>

                <div class="form-group">
                  <label for="company_overview" >Company Overview</label>
                  <input type="text" class="form-control" id="company_overview" name="company_overview"  value="{{ $companies-> company_overview}}" disabled>
                </div>

                <div class="form-group">
                  <label for="company_industry" >Company Industry</label>
                  <input type="varchar" class="form-control" id="company_industry" name="company_industry"  value="{{ $companies->company_industry}}" disabled>
                </div>

                 <div class="form-group">
                  <label for="company_website" >Company Website</label>
                  <input type="varchar" class="form-control" id="company_website" name="company_website"  value="{{ $companies->company_website}}" disabled>
                </div>



                {{-- ........ --}}

              </div>
           


              </div>
              {{-- ./FormBOXBody --}} 


            </div> 
            {{-- ./RIght Form Field --}}
        </div>

        {{-- <div class="box-footer">
          <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
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