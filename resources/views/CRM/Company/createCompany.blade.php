  
@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    Company Form   
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Company Form</li>
  </ol>


@endsection

@section('MainContent')
<div class="row" style="background-color:white;">
  <!--  column -->
  <div class="col-md-12">
    <!-- Horizontal Form -->
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Enter Detail</h3>
            </div>
      <!-- /.card-header -->
</div>
</div>
<div class="clearfix"></div>
      {{-- form--}}
      <form role="form" action="{{ asset('/companies') }}" method="POST">
        {{ csrf_field() }}
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-6">
              {{-- FormBOXBody --}}
              <div class="box-body">
                
                <div class="form-group">
                  <label for="company_name" >Company Name</label>
                  <input type="varchar" class="form-control" id="company_name" name="company_name" placeholder="Company Name">
                </div>
                

                <div class="form-group">
                  <label for="company_registration_address">Company Registration Address</label>
                      <input type="text" class="form-control" id="company_registration_address" name="company_registration_address" placeholder="Company Registration Address">
                </div>

                <div class="form-group">
                  <label for="company_state">Company State</label>
                  <input type="varchar" class="form-control" id="company_state" name="company_state" placeholder="Company State">
                </div>


                
                <div class="form-group">
                  <label for="company_country" >Company Country</label>
                  <input type="varchar" class="form-control" id="company_country" name="company_country" placeholder="Company Country" >
                </div>

                <div class="form-group">
                  <label for="company_pincode" >Company pincode</label>
                  <input type="varchar" class="form-control" id="company_pincode" name="company_pincode" placeholder="Company pincode">
                  
                </div>

                <div class="form-group">
                  <label for="company_email" >Company Email</label>
                  <input type="varchar" class="form-control" id="company_email" name="company_email" placeholder="Company Email">
                  
                </div>

                <div class="form-group">
                  <label for="company_phone_no" >Company Phone No.</label>
                  <input type="varchar" class="form-control" id="company_phone_no" name="company_phone_no" placeholder="Company Phone No.">
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
                  <label for="company_primary_contact" >Company Primary Contact</label>
                  <input type="varchar" class="form-control" id="company_primary_contact" name="company_primary_contact" placeholder="Company Primary Contact" />
                </div>

                <div class="form-group">
                  <label for="company_secondary_contact" >Company Secondry Contact</label>
                  <input type="varchar" class="form-control" id="company_secondary_contact" name="company_secondary_contact" placeholder="Company Secondry Contact">
                </div>


                <div class="form-group">
                  <label for="company_pan_no" >Company Pan No.</label>
                  <input type="varchar" class="form-control" id="company_pan_no" name="company_pan_no" placeholder="Company Pan No.">
                </div>

                <div class="form-group">
                  <label for="company_registration_no" >Company Registration No.</label>
                  <input type="varchar" class="form-control" id="company_registration_no" name="company_registration_no" placeholder="Company Registration No.">
                </div>

                <div class="form-group">
                  <label for="company_overview" >Company Overview</label>
                  <input type="text" class="form-control" id="company_overview" name="company_overview" placeholder="Company Overview">
                </div>

                <div class="form-group">
                  <label for="company_industry" >Company Industry</label>
                  <input type="varchar" class="form-control" id="company_industry" name="company_industry" placeholder="Company Industry">
                </div>

                 <div class="form-group">
                  <label for="company_website" >Company Website</label>
                  <input type="varchar" class="form-control" id="company_website" name="company_website" placeholder="Company Website">
                </div>             
              </div>
            </div>
            {{-- ./RIght Form Field --}}
            </div>

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div> 
      </form>
      {{-- ./Form --}}
    </div>
<!-- /.row -->

@endsection

@section('bodyScriptUpdate')
 
@endsection