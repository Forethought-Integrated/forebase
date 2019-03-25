@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

@endsection

@section('ContentHeader(Page_header)')

 <h1>
    Task Detail
    
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{asset('/')}}"><i class="fa fa-dashboard"></i>Home</a></li>
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
      <form role="form" id="update-form" action="{{ asset('/crm/task/'.$data['task']->task_id) }}" method="POST">
        {{csrf_field()}}
        @method('PUT')
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-6">
              {{-- FormBOXBody --}}
              <div class="box-body">
       
              <div class="form-group">
                <label for="inputTaskLeadId" >Task Lead ID</label>
                <input type="text" class="form-control" id="TaskLeadId" name="task_lead_id" value="{{ $data['task']->task_lead_id }}" />
              </div>
  
  
             <!--  <div class="form-group">
                <label for="inputTaskContactId" >Task Contact ID</label>
                <input type="text" class="form-control" id="TaskContactId" name="task_contact_id" value="{{ $data['task']->task_contact_id }}" />
              </div>
  
  
              <div class="frm-group">
                <label for="inputTaskCompaignID" >Task Campaign ID</label>
                <input type="text" class="form-control" id="TaskCampaignId" name="task_campaign_id" value ="{{ $data['task']->task_campaign_id }}" />
              </div>  


              <div class="form-group">
                <label for="inputTaskAccountId" >Task Account ID</label>
                <input type="text" class="form-control" id="TaskAccountId" name="task_account_id" value="{{ $data['task']->task_account_id }}" />
              </div>
             -->
              <div class="form-group">
                <label for="inputTaskSubject" >Task Subject</label>
                <input type="Tell" class="form-control" id="TaskSubject" name="task_subject" value="{{ $data['task']->task_subject }}"/>
              </div>

               <div class="form-group">
                  <label for="inputTaskDescription" >Task Description</label>
                  <input type="text" class="form-control" id="TaskDescription" name="task_description"   value="{{ $data['task']->task_description}}" />
              </div>

              <div class="form-group">
                <label for="inputTaskGroup" >Task Group</label>
                <input type="text" class="form-control" id="TaskGroup" name="task_group" value="{{ $data['task']->task_group }}" />
              </div>

             <div class="form-group">
                   <label>Task Status</label>

                   <select class="form-control" name="TaskStatus" >
                     <option> Not Started</option>
                     <option> In Progress</option>
                     <option> Completed</option>
                     <option> On Hold</option>
                    
                   </select>
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
                <input type="date" class="form-control" id="StartDate" name="task_startdate" value="{{ $data['task']->task_startdate }}" />
              </div>

               <div class="form-group">
                <label for="inputEnddate" >End date</label>
                <input type="date" class="form-control" id="EndDate" name="task_enddate" value="{{ $data['task']->task_enddate }}"/>
              </div>
  
{{--   
              <div class="form-group">
                <label for="inputAssignTo" >Assigned To</label>
                <input type="text" class="form-control" id="AssignedTo" name="task_assignedto" value="{{ $data['assignedTo'] }}" />
              </div>

 --}}             <div class="form-group">
                    <label>Assigned To</label>
  
                      <select class="form-control select2" name="AssignedTo">
                          <option value="{{ $data['task']->task_assignedto}}" selected="selected">{{$data['assignedTo']}}</option>
                      </select>
                  </div>
  
              <div class="form-group">
                <label for="inputAssignedBy" >Assigned By</label>
                <input type="text" class="form-control" id="AssignedBy" name="task_assignedby" value="{{ $data['assignedBy'] }}" disabled />
              </div>

            
           <div class="form-group">
                   <label>Task Completion</label>

                   <select class="form-control" name="taskPercentage">
                     <option  @if($data['task']->task_percentage==0)
              selected
              @endif> 0</option>
                     <option  @if($data['task']->task_percentage==20)
              selected
              @endif> 20</option>
                     <option  @if($data['task']->task_percentage==40)
              selected
              @endif> 40</option>
                     <option  @if($data['task']->task_percentage==60)
              selected
              @endif> 60</option>
                     <option  @if($data['task']->task_percentage==80)
              selected
              @endif> 80</option>
                     <option  @if($data['task']->task_percentage==100)
              selected
              @endif>100</option>
                   </select>
                 </div>
          
  
              
            </div>
            {{-- ./FormBOXBody --}} 


          </div>
          {{-- ./RIght Form Field --}}
        </div>

        <div class="box-footer">
          {{-- <button type="submit" class="btn btn-primary">Update</button> --}}
           <button class="btn remove_btn update-record" data-recordid="{{$data['task']->task_id}}" type="submit" class="btn btn-primary">Update</button>
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
                                          
                       var url='/crm/task/'+$(this).data('recordid');
                       
                       $('#modal-default-form').attr('action',url);                             
                       $('#modal-default').modal('show')
                     });
                   });
               </script>

@endsection

@section('bodyScriptUpdate')

   @include('include.modal.updateModal')

   <script>
$(document).ready(function() {
  // var url = '/search-user/email';
  // var url = '/search-user-data/name/vi';
  var pageSize = 20;
  $(".select2").select2({
      ajax: {
          dataType: 'json',
          delay: 250,
          url: function (params) {
               return '/search-user-data/name/' + params.term;
               // console.log($(this).data(field));
             },
          processResults: function (data, params) {
              params.page = params.page || 1;
              return {
                  results:  $.map(data, function (users) {
                      return {
                          // text: users.Text,
                          // id: users.Value
                          id: users.id,
                          text: users.name
                      }
                  }),
                 // pagination: {
                 //      more: (params.page * pageSize) < data.pager.TotalItemCount
                 //  }
                  pagination: {
                    more: true
                  }
              };
          },
          cache: true
      },
      minimumInputLength: 2,
      placeholder: "-- Select --",
      allowClear: true
  });
});
</script>
 
@endsection
