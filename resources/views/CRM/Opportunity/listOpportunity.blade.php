@extends('layouts.adminApp')

@section('title', 'ListAccount')

@section('headAdminScriptUpdate')

<!-- DataTables -->
  <link rel="stylesheet" href="{{asset("/admin_lte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css")}}">

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    Opportunity List
    <a href="{{ asset('/opportunity/create') }}" title="">
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
                    <th>Opportunity ID</th>
                    <th>Deal Owner</th>
                    <th>Deal Name</th>
                    <th>Account Name</th>
                    <th>Lead ID</th>
                    <th>Campaign ID</th>
                    <th>Contact ID</th>
                    <th>Amount</th>
                    <th>Stage</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1;?>
                  @foreach($data['opportunity']['data'] as $data)
                    <tr>
                      <!-- <td>{{$data['opportunity_id']}}</td> -->
                      <td>{{$no++}}</td>
                      <td>{{$data['opportunity_deal_owner']}}</td>
                      <td><a href="{{ url('opportunity'.'/'.$data['opportunity_id'])}}">{{$data['opportunity_deal_name']}}</a></td>
                      <td>{{$data['opportunity_account_name']}}</td> 
                      <td>{{$data['opportunity_lead_id']}}</td>
                      <td>{{$data['opportunity_campaign_id']}}</td>
                      <td>{{$data['opportunity_contact_id']}}</td>
                      <td>{{$data['opportunity_amount']}}</td>
                      <td>{{$data['opportunity_stage']}}</td>
      {{--                 <td>
                        <a class="btn btn-small btn-primary" href="{{ url('opporyunity'.'/'.$data['opportunity_id'])}}">Edit</a>
                      </td>
       --}}                {{-- <td>
                       <form action="{{url('opportunity'.'/'.$data['opportunity_id'])}}" method="post">
                          {{csrf_field()}}
                          <input name="_method" type="hidden" value="DELETE">
                          <button class="btn remove_btn " type="submit">Delete</button>
                        </form>
                      </td> --}}

                      <td>
                        <li class="dropdown notifications-menu" type="none">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i>Action</i>
                          </a>
                          <ul class="dropdown-menu" style="padding: 0px 30px 0px 0px;left: -6px;min-width: -webkit-fill-available;">
                            <li>
                              <li class="header"></li>
                              <!-- inner menu: contains the actual data -->
                              <ul class="menu" type="none">
                                 <li class="">
                                  <a href="{{asset('opportunity/'.$data['opportunity_id'].'/edit')}}">
                                    <i>Edit</i>
                                  </a>
                                  <br>
                                  
                                    <a href=button class="delete-record" data-recordid="{{$data['opportunity_id']}}" type="submit">Delete</button>
                                    
                                  </a>
                                  
                                </li>
                              </ul>
                            </ul>
                            </li>
                          </ul>
                        </li>
                      </td>

                    </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>Opportunity ID</th>
                    <th>Deal Owner</th>
                    <th>Deal Name</th>
                    <th>Account Name</th>
                    <th>Lead ID</th>
                    <th>Campaign ID</th>
                    <th>Contact ID</th>
                    <th>Amount</th>
                    <th>Stage</th>
                    <th>Action</th>
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
       var url='/opportunity/'+$(this).data('recordid');
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