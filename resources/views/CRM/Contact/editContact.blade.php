@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

<div class="row mb-2">
    <div class="col-sm-6">
      <h1>Contact Form</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active">Contact Form</li>
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
        <form class="form-horizontal" action="/contact" method="POST">
          {{ csrf_field() }}
            <div class="card-body">                
            <div class="container-fluid">
            <div class="row">
            <div class="col-md-6">
            <div class="form-group">
              <label for="inputContactType" class="col-sm-8 control-label">Contact Type</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="ContactType" name="ContactType" value="{{ $contact->contact_type }}"disabled />
              </div>
            </div>

            <div class="form-group">
              <label for="inputName" class="col-sm-8 control-label">Name</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="Name" name="Name" value="{{ $contact->contact_name }}" disabled />
              </div>
            </div>

            <div class="form-group">
              <label for="inputEmail" class="col-sm-8 control-label">Email Id</label>

              <div class="col-sm-10">
                <input type="email" class="form-control" id="Email" name="Email" value="{{ $contact->contact_email }}" disabled />
              </div>
            </div>
            
            <div class="form-group">
              <label for="inputMobileNo" class="col-sm-8 control-label">Mobile No.</label>

              <div class="col-sm-10">
                <input type="Tell" class="form-control" id="MobileNo" name="MobileNo" value="{{ $contact->contact_mobileNo }}" disabled /> 
              </div>
            </div>

            
</div>
<div class="col-md-6">

<div class="form-group">
              <label for="inputLandlineNo" class="col-sm-8 control-label">Landline No.</label>

              <div class="col-sm-10">
                <input type="Tell" class="form-control" id="LandlineNo" name="LandlineNo" value="{{ $contact->contact_landlineNo }}" disabled />
              </div>
            </div>

            <div class="form-group">
              <label for="inputCompanyID" class="col-sm-8 control-label">Company ID</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="CompanyID" name="CompanyID" value="{{ $contact->contact_companyID }}" disabled />
              </div>
            </div> 

            <div class="form-group">
              <label for="inputCompanyName" class="col-sm-8 control-label">Company Name</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="CompanyName" name="CompanyName" value="{{ $contact->contact_companyName }}" disabled />
              </div>
            </div>

            <div class="form-group">
              <label for="inputDesignation" class="col-sm-8 control-label">Designation</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="Designation" name="Designation" value="{{ $contact->contact_designation}}" disabled />
              </div>
            </div>      
</div>  

</div>
</div>

                          
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-info float-right">Update</button>
          </div>
          <!-- /.card-footer -->
        </form>
        
      </div>

    </div>
  </div>
  <!-- /.row -->

@endsection

@section('bodyScriptUpdate')
 
@endsection