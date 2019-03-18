@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    Contact Form
   
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{asset('/')}}"><i class="fa fa-dashboard"></i>Home</a></li>
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
      <form role="form" action="{{ asset('/contact') }}" method="POST">
        {{ csrf_field() }}
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-6">
              {{-- FormBOXBody --}}
              <div class="box-body">
                
                <div class="form-group">
                  <label for="contactType" >Contact Type</label>
                  <input type="text" class="form-control" id="contactType" name="contactType" placeholder="Contact Type">
                </div>
                

                <div class="form-group">
                  <label for="Name" >Name</label>
                      <input type="text" class="form-control" id="Name" name="Name" placeholder="Name">
                </div>

                <div class="form-group">
                  <label for="emailId" >Email Id</label>
                  <input type="email" class="form-control" id="emailId" name="emailId" placeholder="Email Id">
                </div>
                
                <div class="form-group">
                  <label for="MobileNo" >Mobile No.</label>
                  <input type="text" class="form-control" id="MobileNo" name="MobileNo" placeholder="Enter your number">
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
                  <input type="text" class="form-control" id="LandlineNo" name="LandlineNo" placeholder="Landline No.">
                </div>

                <div class="form-group">
                  <label for="CompanyID" >Company ID</label>
                  <input type="text" class="form-control" id="CompanyID" name="CompanyID" placeholder="Company ID" value="{{$data['account']['account_platform_refid']}}">
                </div>

                <div class="form-group">
                  <label for="companyName" >Company Name</label>
                  <input type="text" class="form-control" id="companyName" name="companyName" placeholder="Company Name" value="{{$data['account']['account_name']}}">
                </div>


                <div class="form-group">
                  <label for="designation" >Designation</label>
                  <input type="text" class="form-control" id="designation" name="designation" placeholder="Designation">
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