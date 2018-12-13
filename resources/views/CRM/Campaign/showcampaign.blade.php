@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

<div class="row mb-2">
  <div class="col-sm-6">
    <h1>Campaign Form</h1>
  </div>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="/">Home</a></li>
      <li class="breadcrumb-item active">Campaign Form</li>
    </ol>
  </div>
</div>

@endsection

@section('MainContent')
<!-- form start -->
<form class="form-horizontal" action="/campaign" method="POST">
  {{ csrf_field() }}
  {{--  ./Row-1  --}}
  <div class="row">


    {{--  ./Col-1-1  --}}
    <div class="col-md-6">
      {{-- Nested Container *****Row-1-Col-1-Campaign Info****--}}

      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-info  card-outline">
              <!-- Horizontal Form -->
                <div class="card-header">
                  <center><h3 class="card-title">Campaign Info</h3></center>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->


                <div class="card-body">

                  <div class="form-group">
                    <label for="inputName" class="col-sm-8 control-label">Campaign Name</label>
                    <div class="col-sm-12">
                      <input type="text" class="form-control" id="Name" name="Name" value="{{ $campaign->campaign_name }}"
                      >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputType" class="col-sm-8 control-label">Campaign Type</label>

                    <div class="col-sm-12">
                      <input type="text" class="form-control" id="Type" name="Type" value="{{ $campaign->campaign_type }}" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputDescriptin" class="col-sm-8 control-label">Description</label>
                    <div class="col-sm-12">
                      <input type="text" class="form-control" id="Description" name="Description" value="{{ $campaign->campaign_description }}" >
                    </div>
                  </div>
                  

                  
                  <div class="form-group">
                    <label for="inputStartDate" class="col-sm-8 control-label">Start Date</label>

                    <div class="col-sm-12">
                      <input type="date" class="form-control" id="StartDate" name="StartDate" value="{{ $campaign->campaign_startDate }}" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEndDate" class="col-sm-8 control-label">End Date</label>

                    <div class="col-sm-12">
                      <input type="date" class="form-control" id="EndDate" name="EndDate" value="{{ $campaign->campaign_endDate }}" >
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputBudget" class="col-sm-8 control-label">Budget Cost</label>
                    <div class="col-sm-12">
                      <input type="text" class="form-control" id="Budget" name="Budget" value="{{ $campaign->campaign_budgetCost }}" >
                    </div>
                  </div>

                </div>

           
              {{--  ./Horizonantal Form  --}}
            </div>

          </div>
        </div>
      </div>

      {{-- ./Nested Container *****Row-1-Col-1-Campaign Info****--}}


    </div>
    {{--  ./Col-1-1  --}}


    {{--  ./Col-1-2  --}}
    <div class="col-md-6">
      {{-- Nested Container *****Row-1-Col-2-Capmaign UTM Generator****--}}
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            <div class="card card-info  card-outline">
            <div class="card-header">
              <h3 class="card-title">Campign UTM Generator</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              {{-- The body of the card Row-2.1 --}}

              <div class="form-group">
                <label for="inpututmWebsiteurl" class="col-sm-8 control-label">UTM Website URL</label>

                <div class="col-sm-12">
                  <input type="text" class="form-control" id="utm_website_url" name="utm_website_url" value="{{ $campaign->utm_website_url }}">
                </div>
              </div>

              <div class="form-group">
                <label for="inpututmCampaignSource" class="col-sm-8 control-label">UTM Campaign Source</label>

                <div class="col-sm-12">
                  <input type="text" class="form-control" id="utm_campaign_source" name="utm_campaign_source" value="{{ $campaign->utm_campaign_source }}">
                </div>
              </div>

              <div class="form-group">
                <label for="inpututmCampaignMedium" class="col-sm-8 control-label">UTM Campaign Medium</label>

                <div class="col-sm-12">
                  <input type="text" class="form-control" id="utm_campaign_medium" name="utm_Campaign_Medium" value="{{ $campaign->utm_Campaign_Medium}}">
                </div>
              </div>

              <div class="form-group">
                <label for="inputCampaignName" class="col-sm-8 control-label">UTM Campaign Name</label>

                <div class="col-sm-12">
                  <input type="text" class="form-control" id="utm_campaign_name" name="utm_campaign_name" value="{{ $campaign->utm_campaign_name}}">
                </div>
              </div>

              <div class="form-group">
                <label for="inpututmCampaignTerm" class="col-sm-8 control-label">UTM Campaign Term</label>

                <div class="col-sm-12">
                  <input type="text" class="form-control" id="utm_campaign_term" name="utm_campaign_term" value="{{ $campaign->utm_campaign_term }}">
                </div>
              </div>

              <div class="form-group">
                <label for="inpututmCampaignContent" class="col-sm-8 control-label">UTM Campaign Content
                </label>

                <div class="col-sm-12">
                  <input type="text" class="form-control" id="utm_campaign_content" name="utm_campaign_content" value="{{ $campaign->utm_campaign_content}}">
                </div>
              </div>

              {{-- ./The body of the card Row-2.1 --}}

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

        </div>
      </div>
    </div>
    {{-- ./Nested Container *****Row-1-Col-2-Capmaign UTM Generator**--}}

    {{-- Nested Container *****Row-1-Col-2-Submit Button****--}}

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">

          <div class="card-footer">
            <button type="submit" class="btn btn-info float-right">Update</button>
          </div>  

        </div>
      </div>
    </div>

    {{-- ./Nested Container *****Row-1-Col-2-Submit Button****--}}

  </div>
  {{--  ./Col-1-2  --}}


</div>
{{--  ./Row-1  --}}
</form>
{{--  ./Form END  --}}
@endsection

@section('bodyScriptUpdate')

@endsection