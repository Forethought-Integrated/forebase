@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    Contact Form

    <a id="editFormField" href="/contact/{{$data['contact']['contact_id']}}/edit/" title="">
      <i class="fa fa-edit">Edit</i>
    </a>
    
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Contact Form</li>
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
                  <label for="contactType" >Contact Type</label>
                  <input type="text" class="form-control enabelInputField" id="contactType" name="contactType" value="{{$data['contact']['contact_type']}}" disabled>
                </div>
                

                <div class="form-group">
                  <label for="Name" >Name</label>
                      <input type="text" class="form-control enabelInputField" id="Name" name="Name" value="{{$data['contact']['contact_name']}}" disabled>
                </div>

                <div class="form-group">
                  <label for="emailId" >Email Id</label>
                  <input type="email" class="form-control enabelInputField" id="emailId" name="emailId" value="{{$data['contact']['contact_email']}}" disabled>
                </div>

                
                <div class="form-group">
                  <label for="MobileNo" >Mobile No.</label>
                  <input type="Tell" class="form-control enabelInputField" id="MobileNo" name="MobileNo" value="{{$data['contact']['contact_mobileNo']}}" disabled>
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
                  <label for="LandlineNo" >Landline No.</label>
                  <input type="text" class="form-control enabelInputField" id="LandlineNo" name="LandlineNo" value="{{$data['contact']['contact_landlineNo']}}" disabled>
                </div>

                <div class="form-group">
                  <label for="CompanyID" >Company ID</label>
                  <input type="text" class="form-control enabelInputField" id="CompanyID" name="CompanyID" value="{{$data['contact']['contact_companyID']}}" disabled>
                </div>

                <div class="form-group">
                  <label for="companyName" >Company Name</label>
                  <input type="text" class="form-control enabelInputField" id="companyName" name="companyName"value="{{$data['contact']['contact_companyName']}}" disabled>
                </div>


                <div class="form-group">
                  <label for="designation" >Designation</label>
                  <input type="text" class="form-control enabelInputField" id="designation" name="designation" value="{{$data['contact']['contact_designation']}}" disabled>
                </div>



                {{-- ........ --}}

              </div>
              {{-- ./FormBOXBody --}} 


            </div>
            {{-- ./RIght Form Field --}}
        </div>

        <div class="box-footer">
         <!--  <button type="submit" class="btn btn-primary">Update</button> -->
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