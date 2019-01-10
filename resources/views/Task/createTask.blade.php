@extends('layouts.adminApp')
@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

<h1>
    Task Form
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i>Home</a></li>
    <li class="active">Task Form</li>
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
      <form role="form" action="/crm/task" method="POST">
        {{ csrf_field() }}
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-6">
              {{-- FormBOXBody --}}
              <div class="box-body">
              
                <div class="form-group">
                  <label for="inputTaskLeadId" >Task Lead ID</label>
                  <input type="text" class="form-control" id="TaskLeadId" name="TaskLeadId" placeholder="TaskLeadId">
                </div>
  
  
                {{-- <div class="form-group">
                  <label for="inputTaskContactId" >Task Contact ID</label>
                  <input type="text" class="form-control" id="TaskContactId" name="TaskContactId" placeholder="TaskContactId">
                </div>
  
  
              <div class="form-group">
                <label for="inputTaskCompaignID" >Task Campaign ID</label>
                <input type="text" class="form-control" id="TaskCampaignId" name="TaskCampaignId" placeholder="TaskCampaignId">
              </div>


              <div class="form-group">
                <label for="inputTaskAccountId" >Task Account ID</label>
                <input type="text" class="form-control" id="TaskAccountId" name="TaskAccountId" placeholder="TaskAccountId">
              </div>
 --}}
              <div class="form-group">
                <label for="inputTaskSubject" >Task Subject</label>
                <input type="Tell" class="form-control" id="TaskSubject" name="TaskSubject" placeholder="TaskSubject">
              </div>
           
              <div class="form-group">
                <label for="inputTaskDescription" >Task Description</label>
                <input type="text" class="form-control" id="TaskDescription" name="TaskDescription" placeholder="TaskDescription">
              </div>

              <div class="form-group">
                <label for="inputTaskGroup" >Task Group</label>
                <input type="text" class="form-control" id="TaskGroup" name="TaskGroup" placeholder="TaskGroup">
              </div>
            

             <!--  <div class="form-group">
                <label for="TaskStatus" >Task Status</label>
                <input type="text" class="form-control" id="TaskStatus" name="TaskStatus" placeholder="TaskStatus">
              </div> -->
              <div class="form-group">
                   <label>Task Status</label>

                   <select class="form-control" name="TaskStatus">
                     <option> Not Started</option>
                     <option> In Progress</option>
                     <option> Completed</option>
                     <option> On Hold</option>
                    
                   </select>
                 </div>


            


            </div>
          </div>

         <div class="col-md-6">
          {{-- FormBOXBody --}}
          <div class="box-body">
              
  
            
            <div class="form-group">
              <label for="inputStartDate" >Start Date</label>
              <input type="date" class="form-control" id="StartDate" name="StartDate" placeholder="Start Date">
            </div>
  
            <div class="form-group">
              <label for="inputEnddate" >End date</label>
              <input type="date" class="form-control" id="EndDate" name="EndDate" placeholder="EndDate">
            </div>
  
  
            <div class="form-group">
              <label for="inputAssignTo" >Assigned To</label>
              <input type="text" class="form-control" id="AssignedTo" name="AssignedTo" placeholder="AssignedTo">
            </div>
  
            <div class="form-group">
              <label for="inputAssignedBy" >Assigned By</label>
              <input type="text" class="form-control" id="AssignedBy" name="AssignedBy" placeholder="AssignedBy">
            </div>
 
           <!--  <div class="form-group">
              <label for="TaskCompletion" >Task Completion %</label>
              <input type="text" class="form-control" id="TaskCompletion" name="TaskCompletion" placeholder="TaskCompletion">
            </div> -->
             <div class="form-group">
                   <label>Task Completion</label>

                   <select class="form-control" name="TaskCompletion">
                     <option> 0</option>
                     <option> 20</option>
                     <option> 40</option>
                     <option> 60</option>
                     <option> 80</option>
                     <option>100</option>
                   </select>
                 </div>


 
            
  
          </div> 
        </div> 
      </div>
      
  
        
           
                          
          <div class="card-footer">
            <button type="submit" class="btn btn-info float-right">Submit</button>
          </div>
          <!-- /.card-footer -->
        </form>
        
      </div>
  
    </div>
  </div>
  <!-- /.row -->
  

@endsection

@section('bodyScriptUpdate')
 
@endsection
