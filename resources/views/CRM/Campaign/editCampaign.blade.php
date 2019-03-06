@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')
  <script type="text/javascript" src="{{asset("/js/app.js")}}"></script>
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
      <form role="form" id="update-form" action="/campaign/{{$data['campaign']['campaign_id']}}" method="POST">
        {{ csrf_field() }}
        @method('PUT')
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-6">
              {{-- FormBOXBody --}}
              <div class="box-body">
                
                <div class="form-group">
                  <label for="campaignName" >Campaign Name</label>
                  <input type="text" class="form-control enabelInputField" id="campaignName" name="campaignName" value="{{$data['campaign']['campaign_name']}}">
                </div>
                

                <div class="form-group">
                  <label for="campaignType" >Campaign Type</label>
                      <input type="text" class="form-control enabelInputField" id="campaignType" name="campaignType" value="{{$data['campaign']['campaign_type']}}">
                </div>

                <div class="form-group">
                  <label for="description" >Description</label>
                  <input type="text" class="form-control enabelInputField" id="description" name="description" value="{{$data['campaign']['campaign_description']}}">
                </div>


                <div class="form-group">
                  <label for="startDate" >Start Date</label>
                  <input type="date" class="form-control enabelInputField" id="startDate" name="startDate" value="{{$data['campaign']['campaign_startDate']}}">
                </div>
                
                <div class="form-group">
                  <label for="endDate" >End Date</label>
                  <input type="date" class="form-control enabelInputField" id="endDate" name="endDate" value="{{$data['campaign']['campaign_endDate']}}">
                </div>

                <div class="form-group">
                  <label for="budgetCost" >Budget Cost.</label>
                  <input type="text" class="form-control enabelInputField" id="budgetCost" name="budgetCost" value="{{$data['campaign']['campaign_budgetCost']}}">
                  
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
                  <input type="text" class="form-control enabelInputField utm" id="utmWebsiteUrl" name="utmWebsiteUrl" value="{{$data['campaign']['utm_website_url']}}">
                </div>

                <div class="form-group">
                  <label for="utmCampaignSource" >UTM Campaign Source</label>
                  <input type="text" class="form-control enabelInputField utm" id="utmCampaignSource" name="utmCampaignSource" value="{{$data['campaign']['utm_campaign_source']}}" >
                </div>

                <div class="form-group">
                  <label for="utmCampaignMedium" >UTM Campaign Medium</label>
                  <input type="text" class="form-control enabelInputField utm" id="utmCampaignMedium" name="utmCampaignMedium" value="{{$data['campaign']['utm_Campaign_Medium']}}">
                </div>


                <div class="form-group">
                  <label for="utmCampaignName" >UTM Campaign Name</label>
                  <input type="text" class="form-control enabelInputField utm" id="utmCampaignName" name="utmCampaignName" value="{{$data['campaign']['utm_campaign_name']}}">
                </div>

                <div class="form-group">
                  <label for="utmCampaignTerm" >UTM Campaign Term</label>
                  <input type="text" class="form-control enabelInputField utm" id="utmCampaignTerm" name="utmCampaignTerm" value="{{$data['campaign']['utm_campaign_term']}}">
                </div>

                <div class="form-group">
                  <label for="utmCampaignContent" >UTM Campaign Content</label>
                  <input type="text" class="form-control enabelInputField utm" id="utmCampaignContent" name="utmCampaignContent" value="{{$data['campaign']['utm_campaign_content']}}">
                </div>

                <div id="generatedCampaignURL">
                  <label for="utmCampaignUrl">UTM Campaign URL</label>
                  <textarea id="utmCampaignUrl" rows="2" class="FormField" readonly="" style="height: 54px;width: 100%" name="utmCampaignUrl">{{$data['campaign']['utm_campaign_url']}}</textarea>
                  <br>
                  <button onclick="copyToClipBoard()" type="button">Copy text</button>
                </div>

                {{-- ........ --}}

              </div>
              {{-- ./FormBOXBody --}} 


            </div>
            {{-- ./RIght Form Field --}}
        </div>

                <div class="box-footer">
                   <button type="submit" data-recorid={{$data['campaign']['campaign_id']}} class="btn btn-primary update-record">Update</button>
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
                                          
                       var url='/campaign'+$(this).data('recordid');
                       
                       $('#modal-default-form').attr('action',url);                             
                       $('#modal-default').modal('show')
                     });
                   });
               </script>

@endsection

@section('bodyScriptUpdate')

@include('include.modal.updateModal')
 
@endsection