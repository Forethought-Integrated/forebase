@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    Contact Form
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
            <form role="form" id="update-form" action="{{ asset('/contact/'.$data['contact']['contact_id']) }}" method="POST">
        {{ csrf_field() }}
        @method('PUT')
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-6">
              {{-- FormBOXBody --}}
              <div class="box-body">
                
                <div class="form-group">
                  <label for="contactType" >Contact Type</label>
                  <input type="text" class="form-control enabelInputField" id="contactType" name="contactType" value="{{$data['contact']['contact_type']}}">
                </div>
                

                <div class="form-group">
                  <label for="Name" >Name</label>
                      <input type="text" class="form-control enabelInputField" id="Name" name="Name" value="{{$data['contact']['contact_name']}}">
                </div>

                <div class="form-group">
                  <label for="emailId" >Email Id</label>
                  <input type="email" class="form-control enabelInputField" id="emailId" name="emailId" value="{{$data['contact']['contact_email']}}">
                </div>

                
                <div class="form-group">
                  <label for="MobileNo" >Mobile No.</label>
                  <input type="text" class="form-control enabelInputField" id="MobileNo" name="MobileNo" value="{{$data['contact']['contact_mobileNo']}}">
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
                  <input type="text" class="form-control enabelInputField" id="LandlineNo" name="LandlineNo" value="{{$data['contact']['contact_landlineNo']}}">
                </div>

                <div class="form-group">
                  <label for="CompanyID" >Company ID</label>
                  <input type="text" class="form-control enabelInputField" id="CompanyID" name="CompanyID" value="{{$data['contact']['contact_companyID']}}">
                </div>

                <div class="form-group">
                  <label for="companyName" >Company Name</label>
                  <input type="text" class="form-control enabelInputField" id="companyName" name="companyName"value="{{$data['contact']['contact_companyName']}}">
                </div>


                <div class="form-group">
                  <label for="designation" >Designation</label>
                  <input type="text" class="form-control enabelInputField" id="designation" name="designation" value="{{$data['contact']['contact_designation']}}">
                </div>



                {{-- ........ --}}

              </div>
              {{-- ./FormBOXBody --}} 


            </div>
            {{-- ./RIght Form Field --}}
        </div>

        <div class="box-footer">
           <buttontypr="submit"  data-recordid="{{$data['contact']['contact_id']}}" " class="btn btn-primary update-record">Update</button>
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
                                          
                       var url='/contact'+$(this).data('recordid');
                       
                       $('#modal-default-form').attr('action',url);                             
                       $('#modal-default').modal('show')
                     });
                   });
               </script>

@endsection

@section('bodyScriptUpdate')
 @include('include.modal.updateModal')
 
@endsection