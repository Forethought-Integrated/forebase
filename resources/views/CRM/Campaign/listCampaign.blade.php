@extends('layouts.adminApp')

@section('title', 'ListAccount')

@section('headAdminScriptUpdate')

<!-- DataTables -->
  <link rel="stylesheet" href="{{asset("/admin_lte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css")}}">

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    Campaign List
    <a href="/campaign/create" title="">
      <i class="fa fa-edit"> create</i>
    </a>
  </h1>
  


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
                <th>Campaign ID</th>
                <th>Campaign Name</th>
                <th>Campaign Type</th>
                <th>Description</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Budget Cost</th>
                  {{-- <th>Edit</th> --}} 
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                  <?php $no=1;?>
                  @foreach($data['campaign']['data'] as $data)
                    <tr>
                      <!-- <td>{{$data['campaign_id']}}</td> -->
                      <td>{{$no++}}</td>
                      <td><a href="{{ asset('campaign'.'/'.$data['campaign_id'])}}">{{$data['campaign_name']}}</a></td>
                      {{-- <td>{{$data['campaign_name']}}</td> --}}
                      <td>{{$data['campaign_type']}}</td>
                      <td>{{$data['campaign_description']}}</td> 
                      <td>{{$data['campaign_startDate']}}</td>
                      <td>{{$data['campaign_endDate']}}</td>
                      <td>{{$data['campaign_budgetCost']}}</td>
                      
      {{--                 <td>
                        <a class="btn btn-small btn-primary" href="{{ url('campaign'.'/'.$data['campaign_id'])}}">Edit</a>
                      </td>
       --}}                <td>
                        <button class="delete-record" data-recordid="{{$data['campaign_id']}}" type="submit">Delete</button>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                <th>Campaign ID</th>
                <th>Campaign Name</th>
                <th>Campaign Type</th>
                <th>Description</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Budget Cost</th>
                  {{-- <th>Edit</th> --}}
                  <th>Delete</th>
                </tr>
                </tfoot>
              </table>
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    {{-- ./BOx --}}
  </div>
  {{--  ./Col  --}}
</div>
<!-- /.row -->

<script>
$( document ).ready(function() {
     $('.delete-record').click(function(event){ 
      event.preventDefault();                                  
       // console.log($(this).data('taskid'));                                 
       var url='/campaign/'+$(this).data('recordid');
       // var url="/boards/"+$data['boardid']+'/'.data('boardid');

       // console.log(url);
       $('#modal-default-form').attr('action',url);                             
       $('#modal-default').modal('show')
     });
   });
</script>


@endsection

@section('bodyScriptUpdate')

<!-- DataTables -->
<script src="{{asset("/admin_lte/bower_components/datatables.net/js/jquery.dataTables.min.js")}}"></script>
<script src="{{asset("/admin_lte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js")}}"></script>
{{-- Page Script--}}
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
{{-- ./Page Script--}}


<div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            {{-- <form action="{{route('tasks.destroy','/crm/task/')}}" method="post"> --}}
          <form id="modal-default-form" {{-- action=" --}}" method="post">
                {{method_field('delete')}}
                {{csrf_field()}} 
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
               <center> <h4 class="modal-title">Are you Sure You Want to delete?</h4></center>
              </div>
              
              <div class="modal-footer">
                <button type="button" class="btn btn-success pull-left" data-dismiss="modal">No, Cancel</button>
                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                <button type="submit" class="btn btn-danger">Yes, Delete</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </form>
        </div>
          <!-- /.modal-dialog -->
  </div>
 
@endsection