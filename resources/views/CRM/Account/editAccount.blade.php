@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    Account Detail
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Account Detail</li>
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
      <form role="form" id="update-form" action="/account/{{$data['account']['account_id']}}" method="POST">
        {{csrf_field()}}
        @method('PUT')
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-6">
              {{-- FormBOXBody --}}
              <div class="box-body">
                
                <div class="form-group">
                  <label for="accountName" >Account Name</label>
                  <input type="text" class="form-control enabelInputField" id="accountName" name="accountName" value="{{$data['account']['account_name']}}" >
                </div>
                

                <div class="form-group">
                  <label for="accountAddress" >Account Address</label>
                      <input type="text" class="form-control enabelInputField" id="accountAddress" name="accountAddress" value="{{$data['account']['account_address']}}" >
                </div>

                <div class="form-group">
                  <label for="accountWebsite" >Website</label>
                  <input type="text" class="form-control enabelInputField" id="accountWebsite" name="accountWebsite" value="{{$data['account']['account_website']}}" >
                </div>


                <div class="form-group">
                  <label for="accountEmail" >Email Id</label>
                  <input type="email" class="form-control enabelInputField" id="accountEmail" name="accountEmail" value="{{$data['account']['account_email']}}" >
                </div>
                
                <div class="form-group">
                  <label for="accountMobileNo" >Mobile No.</label>
                  <input type="Tell" class="form-control enabelInputField" id="accountMobileNo" name="accountMobileNo" value="{{$data['account']['account_mobileNo']}}" >
                </div>

                <div class="form-group">
                  <label for="accountLandlineNo" >Landline No.</label>
                  <input type="Tell" class="form-control enabelInputField" id="accountLandlineNo" name="accountLandlineNo" value="{{$data['account']['account_landlineNo']}}" >
                </div>

              </div>
              {{-- ./FormBOXBody --}}
            </div>
            {{-- ./Left Form Field --}}

            {{-- RIght Form Field --}}
            <div class="col-md-6">
              {{-- FormBOXBody --}}
              <div class="box-body">
                

                <div class="form-group">
                  <label for="accountCity" >City</label>
                  <input type="text" class="form-control enabelInputField" id="accountCity" name="accountCity" value="{{$data['account']['account_city']}}" >
                </div>

                <div class="form-group">
                  <label for="accountState" >State</label>
                  <input type="text" class="form-control enabelInputField" id="accountState" name="accountState" value="{{$data['account']['account_state']}}" >
                </div>

                <div class="form-group">
                  <label for="accountCountry" >Country</label>
                  <input type="text" class="form-control enabelInputField" id="accountCountry" name="accountCountry" value="{{$data['account']['account_country']}}" >
                </div>


                <div class="form-group">
                  <label for="accountPinCode" >Pin Code</label>
                  <input type="text" class="form-control enabelInputField" id="accountPinCode" name="accountPinCode" value="{{$data['account']['account_pincode']}}" >
                </div>

                <div class="form-group">
                  <label for="accountPanNo" >Pan No.</label>
                  <input type="text" class="form-control enabelInputField" id="accountPanNo" name="accountPanNo" value="{{$data['account']['account_panNo']}}" >
                </div>

                <div class="form-group">
                  <label for="accountGSTNo" >GST No.</label>
                  <input type="text" class="form-control enabelInputField" id="accountGSTNo" name="accountGSTNo" value="{{$data['account']['account_GSTNo']}}" >
                </div>


              </div>
              {{-- ./FormBOXBody --}} 


            </div>
            {{-- ./RIght Form Field --}}
        </div>

        <div class="box-footer">
          
           <button type="submit" class="btn btn-primary update-record" data-recordid="{{$data['account']['account_id']}}" >Update</button>
        </div> 
      </form>
      {{-- ./Form --}}
    </div>
    {{--  ./Horizonantal Form  --}}
  </div>
  {{--  ./Col  --}}
</div>

               <script>
                 $( document ).ready(function() {
                     $('.update-record').click(function(event){ 
                      event.preventDefault();                                        
                                          
                       var url='/account'+$(this).data('recordid');
                       
                       $('#modal-default-form').attr('action',url);                             
                       $('#modal-default').modal('show')
                     });
                   });
               </script>
<!-- /.row -->

@endsection

@section('bodyScriptUpdate')

 @include('include.modal.updateModal')
 
@endsection