@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')
 <link rel="stylesheet" href="{{asset("/admin_lte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css")}}">

@endsection

@section('ContentHeader(Page_header)')

<h1>
    Task List 
    <a href="/crm/task/create" title="">
      <i class="fa fa-edit">create</i>
    </a>
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Task LIst</li>
  </ol>


@endsection

@section('MainContent')

<div class="row">
   {{-- column --}}
  <div class="col-md-12"> 
    {{-- Box --}}
    <div class="box">
            <div class="box-header">
              {{-- <h3 class="box-title">Data Table With Full Features</h3> --}}
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Task ID</th>
                  {{-- <th>Task Lead ID</th> --}}
                  {{-- <th>Task Contact ID</th> --}}
                  {{-- <th>Task Campaign ID</th> --}}
                  {{-- <th>Task ID</th> --}}
                  <th>Task Subject</th>
                  <th>Task Start Date</th>
                  <th>Task End Date</th>
                  <th>Assigned To</th>
                  <th>Assigned By</th>
                 
                  {{-- <th>Edit</th> --}}
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                  <?php $no=1;?>
                 <!--  <tr class="odd"><td valign="top" colspan="6" class="dataTables_empty">No data available in table</td></tr>
 -->
                  @foreach($task as $tasks)
                 <tr>
                    <!-- <td>{{$tasks->task_id}}</td> -->
                    <td>{{$no++}}</td>
                    {{-- <td>{{$tasks->task_lead_id}}</td> --}}
                    {{-- <td>{{$tasks->task_contact_id}}</td> --}} 
                    {{-- <td>{{$tasks->task_campaign_id}}</td> --}}
                    {{-- <td>{{$tasks->task_id}}</td> --}}
                    <td><a href="{{ url('/crm/task'.'/'.$tasks->task_id.'/')}}">{{$tasks->task_subject}}</a></td>
                    <td>{{$tasks->task_startdate}}</td>
                    <td>{{$tasks->task_enddate}}</td>
                    <td>{{$tasks->task_assignedto}}</td>
                    <td>{{$tasks->task_assignedby}}</td>
{{--                <td>
                      <a class="btn btn-small btn-primary" href="{{ url('/crm/task'.'/' .$tasks->task_id.'/'.'edit/')}}">Edit</a>
                    </td>
 --}}
                     <td>
                      {{-- <form action="{{url('/crm/task'.'/'.$tasks->task_id)}}" method="post"> --}}
                        {{-- {{csrf_field()}} --}}
                         {{-- @method('DELETE')        --}}
                        <button class="btn remove_btn delete-record" data-taskid="{{$tasks->task_id}}" type="submit">Delete</button>
                      {{-- </form> --}}

                    </td>
                </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                 <th>Task ID</th>
                  {{-- <th>Task Lead ID</th> --}}
                  {{-- <th>Task Contact ID</th> --}}
                  {{-- <th>Task Campaign ID</th> --}}
                  {{-- <th>Task ID</th> --}}
                  <th>Task Subject</th>
                  <th>Task Start Date</th>
                  <th>Task End Date</th>
                  <th>Assigned To</th>
                  <th>Assigned By</th>
                 
                  {{-- <th>Edit</th> --}}
                  <th>Delete</th>
                </tr>
                </tfoot>
            </table>
            {{ $task->links() }}
           
         </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    {{-- ./BOx --}}
  </div>
  {{--  ./Col  --}}
</div>
<!-- /.row -->

@endsection

@section('bodyScriptUpdate')
  <script src="{{asset("/js/modal/deleteModal.js")}}"></script>
  @include('include.modal.deleteModal')
@endsection