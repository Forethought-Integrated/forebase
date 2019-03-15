@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')
  <script type="text/javascript" src="{{asset("/js/app.js")}}"></script>
@endsection

@section('ContentHeader(Page_header)')

  <h1>
    Campaignt Form
        <a id="editFormField" href="{{asset('/campaign/'.$data['campaign']['campaign_id'])}}/edit/" title="">
      <i class="fa fa-edit">Edit</i>
    </a>
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
      <form role="form" >
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-6">
              {{-- FormBOXBody --}}
              <div class="box-body">
                
                <div class="form-group">
                  <label for="campaignName" >Campaign Name</label>
                  <input type="text" class="form-control enabelInputField" id="campaignName" name="campaignName" value="{{$data['campaign']['campaign_name']}}" disabled>
                </div>
                

                <div class="form-group">
                  <label for="campaignType" >Campaign Type</label>
                      <input type="text" class="form-control enabelInputField" id="campaignType" name="campaignType" value="{{$data['campaign']['campaign_type']}}" disabled>
                </div>

                <div class="form-group">
                  <label for="description" >Description</label>
                  <input type="text" class="form-control enabelInputField" id="description" name="description" value="{{$data['campaign']['campaign_description']}}" disabled>
                </div>


                <div class="form-group">
                  <label for="startDate" >Start Date</label>
                  <input type="date" class="form-control enabelInputField" id="startDate" name="startDate" value="{{$data['campaign']['campaign_startDate']}}" disabled>
                </div>
                
                <div class="form-group">
                  <label for="endDate" >End Date</label>
                  <input type="date" class="form-control enabelInputField" id="endDate" name="endDate" value="{{$data['campaign']['campaign_endDate']}}" disabled>
                </div>

                <div class="form-group">
                  <label for="budgetCost" >Budget Cost.</label>
                  <input type="text" class="form-control enabelInputField" id="budgetCost" name="budgetCost" value="{{$data['campaign']['campaign_budgetCost']}}" disabled>
                  
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
                  <input type="text" class="form-control enabelInputField" id="utmWebsiteUrl" name="utmWebsiteUrl" value="{{$data['campaign']['utm_website_url']}}" disabled>
                </div>

                <div class="form-group">
                  <label for="utmCampaignSource" >UTM Campaign Source</label>
                  <input type="text" class="form-control enabelInputField" id="utmCampaignSource" name="utmCampaignSource" value="{{$data['campaign']['utm_campaign_source']}}" disabled>
                </div>

                <div class="form-group">
                  <label for="utmCampaignMedium" >UTM Campaign Medium</label>
                  <input type="text" class="form-control enabelInputField" id="utmCampaignMedium" name="utmCampaignMedium" value="{{$data['campaign']['utm_Campaign_Medium']}}" disabled>
                </div>


                <div class="form-group">
                  <label for="utmCampaignName" >UTM Campaign Name</label>
                  <input type="text" class="form-control enabelInputField" id="utmCampaignName" name="utmCampaignName" value="{{$data['campaign']['utm_campaign_name']}}" disabled>
                </div>

                <div class="form-group">
                  <label for="utmCampaignTerm" >UTM Campaign Term</label>
                  <input type="text" class="form-control enabelInputField" id="utmCampaignTerm" name="utmCampaignTerm" value="{{$data['campaign']['utm_campaign_term']}}" disabled>
                </div>

                <div class="form-group">
                  <label for="utmCampaignContent" >UTM Campaign Content</label>
                  <input type="text" class="form-control enabelInputField" id="utmCampaignContent" name="utmCampaignContent" value="{{$data['campaign']['utm_campaign_content']}}" disabled>
                </div>

                <div id="generatedCampaignURL">
                  <label for="utmCampaignUrl">UTM Campaign URL</label>
                  <textarea id="utmCampaignUrl" rows="2" class="FormField" readonly="" style="height: 54px;width: 100%" name="utmCampaignUrl" {{-- disabled="true" --}}>{{$data['campaign']['utm_campaign_url']}}</textarea>
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
          <!-- <button type="submit" class="btn btn-primary">Update</butto -->
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