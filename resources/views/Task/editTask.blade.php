@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

 <h1>
    Task Detail
    
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i>Home</a></li>
    <li class="active">Task Detail</li>
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
      <form role="form" action="/crm/task/{{$task->task_id}}" method="POST">
        {{csrf_field()}}
        @method('PUT')
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-6">
              {{-- FormBOXBody --}}
              <div class="box-body">
       
              <div class="form-group">
                <label for="inputTaskLeadId" >Task Lead ID</label>
                <input type="text" class="form-control" id="TaskLeadId" name="task_lead_id" value="{{ $task->task_lead_id }}" />
              </div>
  
  
              <div class="form-group">
                <label for="inputTaskContactId" >Task Contact ID</label>
                <input type="text" class="form-control" id="TaskContactId" name="task_contact_id" value="{{ $task->task_contact_id }}" />
              </div>
  
  
              <div class="frm-group">
                <label for="inputTaskCompaignID" >Task Campaign ID</label>
                <input type="text" class="form-control" id="TaskCampaignId" name="task_campaign_id" value ="{{ $task->task_campaign_id }}" />
              </div>  


              <div class="form-group">
                <label for="inputTaskAccountId" >Task Account ID</label>
                <input type="text" class="form-control" id="TaskAccountId" name="task_account_id" value="{{ $task->task_account_id }}" />
              </div>
            
              <div class="form-group">
                <label for="inputTaskSubject" >Task Subject</label>
                <input type="Tell" class="form-control" id="TaskSubject" name="task_subject" value="{{ $task->task_subject }}"/>
              </div>

              <div class="form-group">
                <label for="inputTaskGroup" >Task Group</label>
                <input type="text" class="form-control" id="TaskGroup" name="task_group" value="{{ $task->task_group }}" />
              </div>

              <div class="form-group">
                <label for="TaskStatus" >Task Status</label>
                <input type="text" class="form-control" id="TaskStatus" name="task_status" placeholder="TaskStatus" value="{{ $task->task_status }}">
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
                  <label for="inputTaskDescription" >Task Description</label>
                  <input type="text" class="form-control" id="TaskDescription" name="task_description"   value="{{ $task->task_description}}" />
              </div>
  
              <div class="form-group">
                <label for="inputSartDate" >Start Date</label>
                <input type="date" class="form-control" id="StartDate" name="task_startdate" value="{{ $task->task_startdate }}" />
              </div>
  
              <div class="form-group">
                <label for="inputEnddate" >End date</label>
                <input type="date" class="form-control" id="EndDate" name="task_enddate" value="{{ $task->task_enddate }}"/>
              </div>
  
  
              <div class="form-group">
                <label for="inputAssignTo" >Assigned To</label>
                <input type="text" class="form-control" id="AssignedTo" name="task_assignedto" value="{{ $task->task_assignedto }}" />
              </div>
  
              <div class="form-group">
                <label for="inputAssignedBy" >Assigned By</label>
                <input type="text" class="form-control" id="AssignedBy" name="task_assignedby" value="{{ $task->task_assignedby }}" />
              </div>


            <div class="form-group">
              <label for="TaskCompletion" >Task Completion %</label>
              <input type="text" class="form-control" id="TaskCompletion" name="task_percentage" placeholder="TaskCompletion" value="{{ $task->task_percentage }}">
            </div>
          
  
              
            </div>
            {{-- ./FormBOXBody --}} 


          </div>
          {{-- ./RIght Form Field --}}
        </div>

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Update</button>
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