@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

  <h1>
   Campaign Form
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Campaign Form</li>
  </ol>


@endsection

@section('MainContent')
<div class="row">
  <!--  column -->
  <div class="col-md-12">
    <!-- Horizontal Form -->
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Campaign Info</h3>
            </div>
      <!-- /.card-header -->

      {{-- form--}}
      <form role="form" action="/campaign" method="POST">
        {{ csrf_field() }}
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-6">
              {{-- FormBOXBody --}}
              <div class="box-body">
                
                <div class="form-group">
                  <label for="Name" >Campaign Name</label>
                  <input type="text" class="form-control" id="Name" name="Name" placeholder="Campaign Name">
                </div>
                

                <div class="form-group">
                  <label for="Type" >Campaign Type</label>
                      <input type="text" class="form-control" id="Type" name="Type" placeholder="Campaign Type">
                </div>

                <div class="form-group">
                  <label for="description" >Description</label>
                  <input type="text" class="form-control" id="description" name="description" placeholder="Description">
                </div>


                <div class="form-group">
                  <label for="startDate" >Start Date</label>
                  <input type="date" class="form-control" id="startDate" name="startDate" placeholder="Start Date">
                </div>
                
                <div class="form-group">
                  <label for="endDate" >End Date</label>
                  <input type="date" class="form-control" id="endDate" name="endDate" placeholder="End Date">
                </div>

                <div class="form-group">
                  <label for="budgetCost" >Budget Cost.</label>
                  <input type="text" class="form-control" id="budgetCost" name="budgetCost"  placeholder="Budget Cost">
                  
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
                  <label for="utmWebsiteUrl" >UTM Website URL</label>
                  <input type="text" class="form-control" id="utmWebsiteUrl" name="utmWebsiteUrl" placeholder="UTM Website URL">
                </div>

                <div class="form-group">
                  <label for="utmCampaignSource" >UTM Campaign Source</label>
                  <input type="text" class="form-control" id="utmCampaignSource" name="utmCampaignSource" placeholder="UTM Campaign Source">
                </div>

                <div class="form-group">
                  <label for="utmCampaignMedium" >UTM Campaign Medium</label>
                  <input type="text" class="form-control" id="utmCampaignMedium" name="utmCampaignMedium" placeholder="UTM campaign Medium">
                </div>


                <div class="form-group">
                  <label for="utmCampaignName" >UTM Campaign Name</label>
                  <input type="text" class="form-control" id="utmCampaignName" name="utmCampaignName" placeholder="UTM Campaign Name">
                </div>

                <div class="form-group">
                  <label for="utmCampaignTerm" >UTM Campaign Term</label>
                  <input type="text" class="form-control" id="utmCampaignTerm" name="utmCampaignTerm" placeholder="UTM Campaign Term">
                </div>

                <div class="form-group">
                  <label for="utmCampaignContent" >UTM Campaign Content</label>
                  <input type="text" class="form-control" id="utmCampaignContent" name="utmCampaignContent" placeholder="UTM campaign Content">
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