@extends('layouts.adminApp')

@section('title', 'ListMenu')

@section('headAdminScriptUpdate') 

<!-- DataTables -->
  <link rel="stylesheet" href="{{asset("/admin_lte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css")}}">

  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{asset("/admin_lte/plugins/iCheck/all.css")}}">

@endsection


@section('ContentHeader(Page_header)') 

  <h1>
     Add Membber To {{$data['team']['team_name']}}
     {{-- Add Membber To <pre>{{print_r($data['team'])}}</pre> --}}
    {{-- <a href="{{ asset('/team/create') }}" title=""> --}}
      {{-- <i class="fa fa-edit"> create</i> --}}
    {{-- </a> --}}
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{asset('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Team List</li>
  </ol>


@endsection

@section('MainContent')
{{-- <pre>{{print_r($data['user']['0']['name'])}}</pre> --}}
{{-- <pre>{{print_r($data['user']->toArray())}}</pre> --}}
<div class="row">
   {{-- column --}}
  <div class="col-md-12">
    <form action="{{ asset("/team-add-member/".$data['team']['team_id']) }}" method="POST">
      @csrf()
    {{-- Box --}}
    <div class="box">
            {{-- <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div> --}}
            <!-- /.box-header -->
            <div class="box-body">
            <?php $i=1;?>
              <div class="row">
                  <fieldset>
                    @foreach ($data['user'] as $user)
                        <div class='col-sm-2'>
                            {{-- {{$user['name']}} --}}

                            {{-- <pre>{{print_r($user->toArray())}}</pre> --}}

                         <div class="form-group">
                          <label>
                            {{-- <input type="checkbox" class="minimal" {{($user->team()->where('team_id',$data['currentTeam'])->exists())?'checked ':''}} name='member' value="1"> --}}
                            <input type="checkbox" class="minimal" {{($user->team()->where('team_id',$data['currentTeam'])->exists())?'checked value='.$user['id']:'value='.$user['id']}} name='member[]'>
                              {{-- {{$user->team->list('team_id')}} --}}
                              {{-- {{($user->team()->where('team_id',$data['currentTeam'])->exists())?'true':'false'}} --}}
                              {{-- {{in_array($data['currentTeam'],$user['team']->toArray())?'true':'false'}} --}}
                              {{$user['name']}}
                          </label>
             
                        </div>

                        </div>
                        @if($i++ %5==0)
                            </div>
                            <div class='row'>
                        @endif
                    @endforeach
                    </fieldset>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </form>
          {{-- /.box --}}
    {{-- ./BOx --}}
  </div>
  {{--  ./Col  --}}
</div>
<!-- /.row -->

             <script>
                $( document ).ready(function() {
                     $('.delete-record').click(function(event){ 
                      event.preventDefault();                            
                       var url='/team/'+$(this).data('recordid');                       
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

<!-- iCheck 1.0.1 -->
<script src="{{asset("/admin_lte/plugins/iCheck/icheck.min.js")}}"></script>
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
  });

  $(document).ready(function(){
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      // radioClass   : 'iradio_minimal-blue'
    });

  }); 
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