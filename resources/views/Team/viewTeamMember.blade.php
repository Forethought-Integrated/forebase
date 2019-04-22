@extends('layouts.adminApp')

@section('title', 'ListMenu')

@section('headAdminScriptUpdate') 

<!-- DataTables -->
  <link rel="stylesheet" href="{{asset("/admin_lte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css")}}">

@endsection


@section('ContentHeader(Page_header)') 

  <h1>
    {{$data['team']['team_name']}}
  </h1>
  


@endsection

@section('MainContent')
{{-- <pre>{{print_r($data['team']->toArray())}}</pre> --}}
<div class="row">
   {{-- column --}}
  <div class="col-md-12">
    {{-- Box --}}
     {{-- <pre>{{print_r($data)}}</pre>  --}}
      <a href="{{url('team-add-member/'.$data['team']['team_id'].'/')}}" class="btn btn-primary" >Add Member</a>


          <div class="box">
            <div class="box-header">
              {{-- <h3 class="box-title">Data Table With Full Features</h3> --}}
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <?php $i=1;?>
               <div class="row">
                    @foreach ($data['team']['user'] as $user)
                        <div class='col-sm-2'>
                            {{$user['name']}}
                        </div>
                        @if($i++ %5==0)
                            </div>
                            <div class='row'>
                        @endif
                    @endforeach
                </div>
            </div>
            <!-- /.box-body -->
          </div>
    {{-- ./BOx --}}
  </div>
  {{--  ./Col  --}}
</div>
<!-- /.row -->

             <!--  <script>
                $( document ).ready(function() {
                     $('.delete-record').click(function(event){ 
                      event.preventDefault();                            
                       var url='/team-view/'+$(this).data('recordid');                       
                       $('#modal-default-form').attr('action',url);                             
                       $('#modal-default').modal('show')
                     });
                   });
              </script> -->

             

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