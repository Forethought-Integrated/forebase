@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

<script type="text/javascript" src="{{asset("/js/app.js")}}"></script>
{{-- <script type="text/javascript">
$(document).ready(function(){
    // $("#utmWebsiteUrl").keyup(function(){
    $(".utm").keyup(function(){
      // console.log('hi');
      console.log($(this).val());
      console.log($(this).attr('id'));

      // <span id="utmWebsiteUrlGen" class="utmWebsiteUrl"></span>
      //             <span id="utmCampaignSourceGen" class="utmCampaignSource"></span>
      //             <span id="utmCampaignMediumGen" class="utmCampaignMedium"></span>
      //             <span id="utmCampaignNameGen" class="utmCampaignName"></span>
      //             <span id="utmCampaignTermGen" class="utmCampaignTerm"></span>
      //             <span id="utmCampaignContentGen" class="utmCampaignContent"></span>



      switch ($(this).attr('id')) {
        case "utmWebsiteUrlGen":
      console.log('hi');

        // $('#utmWebsiteUrlGen').text($(this).val());
          break;
        case 'utmCampaignMediumGen':
        $('#utmCampaignMediumGen').text($(this).val());

          // break;
        // case 2:
        //    day = "Tuesday";
        //   break;
        // case 3:
        //   day = "Wednesday";
        //   break;
        // case 4:
        //   day = "Thursday";
        //   break;
        // case 5:
        //   day = "Friday";
        //   break;
        // case 6:
        //   day = "Saturday";
      }
        // Getting the current value of textarea
        // var currentText = $(this).val();
        
        // Setting the Div content
        // $('#generatedCampaignURL').text($(this).val());
        // $("#generatedCampaignURL").text(currentText);
    });
});
</script> --}}
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
                  <label for="Name">Campaign Name</label>
                  <input type="text" class="form-control" id="Name" name="Name" placeholder="Campaign Name">
                </div>
                

                <div class="form-group">
                  <label for="Type">Campaign Type</label>
                      <input type="text" class="form-control" id="Type" name="Type" placeholder="Campaign Type">
                </div>

                <div class="form-group">
                  <label for="description">Description</label>
                  <input type="text" class="form-control" id="description" name="description" placeholder="Description">
                </div>


                <div class="form-group">
                  <label for="startDate" >Start Date</label>
                  <input type="date" class="form-control" id="startDate" name="startDate" placeholder="Start Date">
                </div>
                
                <div class="form-group">
                  <label for="endDate">End Date</label>
                  <input type="date" class="form-control" id="endDate" name="endDate" placeholder="End Date">
                </div>

                <div class="form-group">
                  <label for="budgetCost" >Budget Cost</label>
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
                  <label for="utmWebsiteUrl">UTM Website URL</label>
                  <input type="text" class="form-control utm" id="utmWebsiteUrl" name="utmWebsiteUrl" placeholder="UTM Website URL">
                </div>

                <div class="form-group">
                  <label for="utmCampaignSource">UTM Campaign Source</label>
                  <input type="text" class="form-control utm" id="utmCampaignSource" name="utmCampaignSource" placeholder="UTM Campaign Source">
                </div>

                <div class="form-group">
                  <label for="utmCampaignMedium">UTM Campaign Medium</label>
                  <input type="text" class="form-control utm" id="utmCampaignMedium" name="utmCampaignMedium" placeholder="UTM campaign Medium">
                </div>


                <div class="form-group">
                  <label for="utmCampaignName">UTM Campaign Name</label>
                  <input type="text" class="form-control utm" id="utmCampaignName" name="utmCampaignName" placeholder="UTM Campaign Name">
                </div>

                <div class="form-group">
                  <label for="utmCampaignTerm">UTM Campaign Term</label>
                  <input type="text" class="form-control utm" id="utmCampaignTerm" name="utmCampaignTerm" placeholder="UTM Campaign Term">
                </div>

                <div class="form-group">
                  <label for="utmCampaignContent">UTM Campaign Content</label>
                  <input type="text" class="form-control utm" id="utmCampaignContent" name="utmCampaignContent" placeholder="UTM campaign Content">
                </div>

                 
                <div id="generatedCampaignURL">
                  <span id="utmWebsiteUrlGen" class="utmWebsiteUrl utmGen"></span>
                  <span id="utmCampaignSourceGen" class="utmCampaignSource utmGen"></span>
                  <span id="utmCampaignMediumGen" class="utmCampaignMedium utmGen"></span>
                  <span id="utmCampaignNameGen" class="utmCampaignName utmGen"></span>
                  <span id="utmCampaignTermGen" class="utmCampaignTerm utmGen"></span>
                  <span id="utmCampaignContentGen" class="utmCampaignContent utmGen"></span>
                </div>
                {{-- <textarea id="generatedCampaignURL">
                  <span id="utmWebsiteUrlGen" class="utmWebsiteUrl utmGen"></span>
                  <span id="utmCampaignSourceGen" class="utmCampaignSource utmGen"></span>
                  <span id="utmCampaignMediumGen" class="utmCampaignMedium utmGen"></span>
                  <span id="utmCampaignNameGen" class="utmCampaignName utmGen"></span>
                  <span id="utmCampaignTermGen" class="utmCampaignTerm utmGen"></span>
                  <span id="utmCampaignContentGen" class="utmCampaignContent utmGen"></span>
                </textarea> --}}
                <button id='utm-copy'>Copy URL</button>

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