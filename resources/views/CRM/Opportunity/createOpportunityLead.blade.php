@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    Opportunity Form
    
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Opportunity Form</li>
  </ol>

{{-- <pre>{{print_r($data)}}</pre> --}}
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
      <form role="form" action="{{ asset('/opportunity') }}" method="POST">
        {{ csrf_field() }}
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-6">
              {{-- FormBOXBody --}}
              <div class="box-body">
                
                <div class="form-group">
                  <label for="dealOwner" >Deal Owner</label>
                  <input type="text" class="form-control" id="dealOwner" name="dealOwner" placeholder="Deal Owner">
                </div>
                

                <div class="form-group">
                  <label for="dealName" >Deal Name</label>
                      <input type="text" class="form-control" id="dealName" name="dealName" placeholder="Deal Name">
                </div>

                <div class="form-group">
                  <label for="AccountName" >Account Name</label>
                  <input type="text" class="form-control" id="AccountName" name="AccountName" placeholder="Account Name" value="{{$data['lead']['lead_companyName']}}">
                </div>


                <div class="form-group">
                  <label for="Type" >Type</label>
                  <input type="text" class="form-control" id="Type" name="Type" placeholder="Type">
                </div>
                
                <div class="form-group">
                  <label for="leadID" >Lead ID</label>
                  <input type="text" class="form-control" id="leadID" name="leadID" placeholder="Lead ID" value="{{$data['lead']['lead_id']}}">
                </div>

                <div class="form-group">
                  <label for="campaignID" >Campaign ID</label>
                  <input type="Tell" class="form-control" id="campaignID" name="campaignID" placeholder="Campaign ID">
                </div>

                <div class="form-group">
                  <label for="description" >Description</label>
                  <input type="text" class="form-control" id="expectedRevenue" name="expectedRevenue" placeholder="Description">
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
                  <input type="text" class="form-control" id="contactID" name="contactID" placeholder="Contact ID"  value="{{$data['lead']['lead_contact_id']}}">
                </div>

                <div class="form-group">
                  <label for="amount" >Amount</label>
                  <input type="text" class="form-control" id="amount" name="amount" placeholder="Amount" value="{{$data['lead']['lead_total']}}">
                </div>

                <div class="form-group">
                  <label for="closingDate" >Closing date</label>
                  <input type="date" class="form-control" id="closingDate" name="closingDate" placeholder="Closing date">
                </div>


                <div class="form-group">
                  <label for="Satge" >Stage</label>
                  <input type="text" class="form-control" id="Satge" name="Satge" placeholder="Stage">
                </div>

                <div class="form-group">
                  <label for="Probability" >Probability</label>
                  <input type="text" class="form-control" id="Probability" name="Probability" placeholder="Probability">
                </div>

                <div class="form-group">
                  <label for="expectedRevenue" >Expected Revenue</label>
                  <input type="text" class="form-control" id="expectedRevenue" name="expectedRevenue" placeholder="Expected Revenue">
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