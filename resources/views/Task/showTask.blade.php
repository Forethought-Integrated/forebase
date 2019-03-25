@extends('layouts.adminApp')
@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

<h1>
    Task Detail
    <a id="editFormField" href="{{ asset('/crm/task/'.$data['task']->task_id) }}/edit" title="">
      <i class="fa fa-edit">Edit</i>
    </a>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{asset('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Task</li>
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
      <form role="form">
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-6">
              {{-- FormBOXBody --}}
              <div class="box-body">
      
                <div class="form-group">
                  <label for="inputTaskLeadId" >Task Lead ID</label>
                  <input type="text" class="form-control" id="TaskLeadId" name="TaskLeadId" value="{{ $data['task']->task_lead_id }}" disabled>
                </div>
  
        
                <!-- <div class="form-group">
                  <label for="inputTaskContactId" >Task Contact ID</label>
                  <input type="text" class="form-control" id="TaskContactId" name="TaskContactId" value="{{ $data['task']->task_contact_id }}" disabled>
                </div>
  
        
                <div class="form-group">
                  <label for="inputTaskCompaignID" >Task Campaign ID</label>
                  <input type="text" class="form-control" id="TaskCampaignId" name="TaskCampaignId" value="{{ $data['task']->task_campaign_id }}"disabled>
                </div>

      
                <div class="form-group">
                  <label for="inputTaskAccountId" >Task Account ID</label>
                  <input type="text" class="form-control" id="TaskAccountId" name="TaskAccountId" value="{{ $data['task']->task_account_id }}" disabled>
                </div> -->
                  
              <div class="form-group">
                <label for="inputTaskSubject" >Task Subject</label>
                <input type="Tell" class="form-control" id="TaskSubject" name="TaskSubject" value="{{ $data['task']->task_subject }}" disabled>
              </div>

                <div class="form-group">
                <label for="inputTaskDescription" >Task Description</label>
                <input type="text" class="form-control" id="TaskDescription" name="TaskDescription" value="{{ $data['task']->task_description}}" disabled>
              </div>

              <div class="form-group">
                <label for="inputTaskGroup">Task Group</label>
                <input type="text" class="form-control" id="TaskGroup" name="TaskGroup" value="{{ $data['task']->task_group }}" disabled>
              </div>
    
              <div class="form-group">
                <label for="TaskStatus" >Task Status</label>
                <input type="text" class="form-control" id="TaskStatus" name="TaskStatus" placeholder="TaskStatus" value="{{ $data['task']->task_status }}" disabled>
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
                <label for="inputSartDate" >Start Date</label>
                <input type="date" class="form-control" id="StartDate" name="StartDate" value="{{ $data['task']->task_startdate }}" disabled>
              </div>
            
             
        
              <div class="form-group">
                <label for="inputEnddate" >End date</label>
                <input type="date" class="form-control" id="EndDate" name="EndDate" value="{{ $data['task']->task_enddate }}" disabled>
              </div>
  
        
              <div class="form-group">
                <label for="inputAssignTo" >Assigned To</label>
                <input type="text" class="form-control" id="AssignedTo" name="AssignedTo" value="{{ $data['assignedTo'] }}" disabled>
              </div>
        
              <div class="form-group">
                <label for="inputAssignedBy" >Assigned By</label>
                <input type="text" class="form-control" id="AssignedBy" name="AssignedBy" value="{{ $data['assignedTo']}}" disabled>
              </div>

              <div class="form-group">
                <label for="TaskCompletion" >Task Completion %</label>
                <input type="text" class="form-control" id="TaskCompletion" name="TaskCompletion" placeholder="TaskCompletion" value="{{ $data['task']->task_percentage }}" disabled>
              </div>
          
        
             
            </div>
            {{-- ./FormBOXBody --}} 

          </div>
          {{-- ./RIght Form Field --}}

        </div>
          
      </form>
    </div>
    {{--  ./Horizonantal Form  --}}
  </div>
  {{--  ./Col  --}}
</div>
<!-- /.row -->


@endsection

@section('bodyScriptUpdate')
 
@endsection
