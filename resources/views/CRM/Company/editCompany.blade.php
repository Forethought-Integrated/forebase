 @extends('layouts.adminApp')

@section('title',   'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    Company Detail
    
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{asset('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Company Detail</li>
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

      {{-- form--}}
      <form role="form" id="update-form"action="{{ asset('companies'.'/'.$companies->company_id)}}" method="POST">
        {{csrf_field()}}
        @method('PUT')
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-6">
              {{-- FormBOXBody --}}
              <div class="box-body">
                
                <div class="form-group">
                  <label for="company_name" >Company Name</label>
                  <input type="text" class="form-control enabelInputField" id="company_name" name="company_name" value="{{ $companies->company_name }}" >
                </div>
                

                <div class="form-group">
                  <label for="company_registration_address" >Company Registration Address</label>
                      <input type="text" class="form-control enabelInputField" id="company_registration_address" name="company_registration_address" value="{{ $companies->company_registration_address }}"  >
                </div>

                <div class="form-group">
                  <label for="company_state" >Company State</label>
                  <input type="text" class="form-control enabelInputField" id="company_state" name="company_state " value="{{ $companies->company_state}}" >
                </div>


                <div class="form-group">
                  <label for="company_country" >Company Country</label>
                  <input type="text" class="form-control enabelInputField" id="company_country" name="company_country" value="{{  $companies->company_country }}"  >
                </div>
                
                <div class="form-group">
                  <label for="company_pincode" >Company Pincode</label>
                  <input type="varchar" class="form-control enabelInputField" id="company_pincode" name="company_pincode" value="{{ $companies->company_pincode}}"  >
                </div>

                <div class="form-group">
                  <label for="company_email" >Company Email</label>
                  <input type="Text" class="form-control enabelInputField" id="company_email" name="company_email" value="{{ $companies->company_email}}"  >
                </div>
                 <div class="form-group">
                  <label for="company_phone_no" >Company Phone No.</label>
                  <input type="Text" class="form-control enabelInputField" id="company_phone_no" name="company_phone_no" value="{{ $companies->company_phone_no}}"  >
                </div>



                 </div>

              </div> {{-- ./Left Form Field --}}

          
            {{-- ./RIght Form Field --}}
            <div class="row">
            <div class="col-md-6">
              <div class="box-body">

                 <div class="form-group">
                  <label for="company_primary_contact" >Company Primary Contact.</label>
                  <input type="Text" class="form-control enabelInputField" id="company_primary_contact" name="company_primary_contact" value="{{ $companies->company_primary_contact}}"  >
                </div>
                  

                   <div class="form-group">
                  <label for="company_secondary_contact" >Company Secondry Contact.</label>
                  <input type="Text" class="form-control enabelInputField" id="company_secondary_contact" name="company_secondary_contact" value="{{ $companies->company_secondary_contact}}"  >
                </div>
                  

                   <div class="form-group">
                  <label for="company_pan_no" >Company Pan No.</label>
                  <input type="Text" class="form-control enabelInputField" id="company_pan_no" name="company_pan_no" value="{{ $companies->company_pan_no}}">
                </div>


                   <div class="form-group">
                  <label for="company_registration_no" >Company Registration No.</label>
                  <input type="Text" class="form-control enabelInputField" id="company_registration_no" name="company_registration_no" value="{{ $companies->company_registration_no}}">
                </div>

                <div class="form-group">
                  <label for="company_overview" >Company Overview</label>
                  <input type="Text" class="form-control enabelInputField" id="company_overview" name="company_overview" value="{{ $companies->company_overview}}">
                </div>

                 <div class="form-group">
                  <label for="company_industry" >Company Industry</label>
                  <input type="Text" class="form-control enabelInputField" id="company_industry" name="company_industry" value="{{ $companies->company_industry}}">
                </div>

                 <div class="form-group">
                  <label for="company_website" >Company Website</label>
                  <input type="Text" class="form-control enabelInputField" id="company_industry" name="company_website" value="{{ $companies->company_website}}">
                </div>
              </div>
            </div>

        
        </div> 
        <div class="box-footer" style="margin:15px;">
           <button type="submit" data-recordid="{{$companies->company_id}}" type="submit" class="btn btn-primary  update-record">Update</button>
      </div>
      </form>
      {{-- ./Form --}}
   
</div>
<!-- /.row -->

             <script>
                 $( document ).ready(function() {
                     $('.update-record').click(function(event){ 
                      event.preventDefault();                                        
                                          
                       var url='/companies'+$(this).data('recordid');
                       
                       $('#modal-default-form').attr('action',url);                             
                       $('#modal-default').modal('show')
                     });
                   });
               </script>


@endsection

@section('bodyScriptUpdate')

@include('include.modal.updateModal')
 
@endsection
