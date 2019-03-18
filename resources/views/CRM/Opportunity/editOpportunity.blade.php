@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    Opportunity Form
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{asset('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Opportunity Form</li>
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
      <form role="form" id="update-form" action="{{ asset('/opportunity/'.$data['opportunity']['opportunity_id'])}}" method="POST">
        {{ csrf_field() }}
         @method('PUT')
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-6">
              {{-- FormBOXBody --}}
              <div class="box-body">
                
                <div class="form-group">
                  <label for="dealOwner" >Deal Owner</label>
                  <input type="text" class="form-control enabelInputField" id="dealOwner" name="dealOwner" value="{{$data['opportunity']['opportunity_deal_owner']}}">
                </div>
                

                <div class="form-group">
                  <label for="dealName" >Deal Name</label>
                      <input type="text" class="form-control enabelInputField" id="dealName" name="dealName" value="{{$data['opportunity']['opportunity_deal_name']}}">
                </div>

                <div class="form-group">
                  <label for="AccountName" >Account Name</label>
                  <input type="text" class="form-control enabelInputField" id="AccountName" name="AccountName" value="{{$data['opportunity']['opportunity_account_name']}}">
                </div>


                <div class="form-group">
                  <label for="Type" >Type</label>
                  <input type="text" class="form-control enabelInputField" id="Type" name="Type" value="{{$data['opportunity']['opportunity_type']}}">
                </div>
                
                <div class="form-group">
                  <label for="leadID" >Lead ID</label>
                  <input type="text" class="form-control enabelInputField" id="leadID" name="leadID" value="{{$data['opportunity']['opportunity_lead_id']}}">
                </div>

                <div class="form-group">
                  <label for="campaignID" >Campaign ID</label>
                  <input type="Tell" class="form-control enabelInputField" id="campaignID" name="campaignID" value="{{$data['opportunity']['opportunity_campaign_id']}}">
                  
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
                  <label for="contactID" >Contact ID</label>
                  <input type="text" class="form-control enabelInputField" id="contactID" name="contactID" value="{{$data['opportunity']['opportunity_contact_id']}}">
                </div>

                <div class="form-group">
                  <label for="amount" >Amount</label>
                  <input type="text" class="form-control enabelInputField" id="amount" name="amount" value="{{$data['opportunity']['opportunity_amount']}}">
                </div>

                <div class="form-group">
                  <label for="closingDate" >Closing date</label>
                  <input type="date" class="form-control enabelInputField" id="closingDate" name="closingDate" value="{{$data['opportunity']['opportunity_closing_date']}}">
                </div>


                <div class="form-group">
                  <label for="Satge" >Stage</label>
                  <input type="text" class="form-control enabelInputField" id="Satge" name="Satge" value="{{$data['opportunity']['opportunity_stage']}}">
                </div>

                <div class="form-group">
                  <label for="Probability" >Probability</label>
                  <input type="text" class="form-control enabelInputField" id="Probability" name="Probability" value="{{$data['opportunity']['opportunity_probability']}}">
                </div>

                <div class="form-group">
                  <label for="expectedRevenue" >Expected Revenue</label>
                  <input type="text" class="form-control enabelInputField" id="expectedRevenue" name="expectedRevenue" value="{{$data['opportunity']['opportunity_expected_revenue']}}">
                </div>

                  <div class="form-group">
                  <label for="description" >Description</label>
                  <input type="text" class="form-control enabelInputField" id="expectedRevenue" name="expectedRevenue" value="{{$data['opportunity']['opportunity_description']}}">
                </div>

                {{-- ........ --}}

              </div>
              {{-- ./FormBOXBody --}} 


            </div>
            {{-- ./RIght Form Field --}}
        </div>

        <div class="box-footer">
          <button type="submit" data-recorid={{$data['opportunity']['opportunity_id']}} class="btn btn-primary update-record">Update</button>
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
                                          
                       var url='/opportunity'+$(this).data('recordid');
                       
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