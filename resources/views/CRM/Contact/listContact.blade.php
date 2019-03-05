@extends('layouts.adminApp')

@section('title', 'ListAccount')

@section('headAdminScriptUpdate')

<!-- DataTables -->
  <link rel="stylesheet" href="{{asset("/admin_lte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css")}}">

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    Contact List
    <a href="/contact/create" title="">
      <i class="fa fa-edit"> create</i>
    </a>
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Contact LIst</li>
  </ol>
{{-- <pre>{{print_r($data)}}</pre> --}}
{{-- <pre>{{print_r($data['contact']['data']['0']->account())}}</pre> --}}

@endsection

@section('MainContent')
{{-- <pre>{{print_r($data)}}</pre> --}}
<div class="row">
   {{-- column --}}
  <div class="col-md-12">
    {{-- Box --}}
    <div class="box">
            <div class="box-header">
              {{-- <form action="{{url('account')}}" method="post" class="pull-right"> --}}
                {{-- <a href="#fileModel"> --}}
                <button class="btn remove_btn pull-right" data-toggle="modal" data-target="#fileModal">upload</button>
                {{-- </a> --}}
              {{-- </form> --}}
              {{-- <h3 class="box-title">Data Table With Full Features</h3> --}}
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th>Contact ID</th>
                <th>Contact Type</th>
                <th>Name</th>
                <th>Mobile No</th>
                <th>Landline No</th>
                <th>Email</th>
                {{--<th>Delete</th>--}}
                <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php $no=1;?>
                  @foreach($data['contact']['data'] as $contact)
                    <tr>
                      {{-- <td>{{$contact['contact_id']}}</td> --}}
                      <td>{{$no++}}</td>
                      <td>{{$contact['contact_type']}}</td>
                      <td><a href="{{ url('contact'.'/'.$contact['contact_id'])}}">{{$contact['contact_name']}}</a></td> 
                      <td>{{$contact['contact_mobileNo']}}</td>
                      <td>{{$contact['contact_landlineNo']}}</td>
                      <td>{{$contact['contact_email']}}</td>
      {{--            <td>
                        <a class="btn btn-small btn-primary" href="{{ url('contact'.'/'.$data['contact_id'])}}">Edit</a>
                      </td>
       --}}                <td>
                       <form action="{{ url('contact'.'/'.$contact['contact_id'])}}" method="post">
                          {{csrf_field()}}
                          <li class="dropdown notifications-menu" type="none">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i>Action</i>
                          </a>
                          {{-- <ul class="dropdown-menu"> --}}
                          <ul class="dropdown-menu" style="padding: 0px 30px 0px 0px;left: -6px;min-width: -webkit-fill-available;">
                            {{-- <li class="header">{{Auth::user()->unreadNotifications->count()}} unread notifications<span class="pull-right"><a href="/notification-mark-read-all">Mark All As Read</a></span></li>
                            <li> --}}
                              <li class="header"></li>
                              <!-- inner menu: contains the actual data -->
                              <ul class="menu" type="none">
                                 <li class="">
                                  <a href="{{asset('/contact/'.$contact['contact_id'].'/edit/')}}">
                                    <i>Edit</i>
                                  </a>
                                  <a href=button class="delete-record" data-recordid="{{$contact['contact_id']}}" type="submit">Delete</button></a>
                                  
                                  </a>
                                  <a href="{{asset('/account/'.$contact['contact_id'])}}">
                                    View Account
                                  </a>
                                  {{-- <a href="{{asset('/lead/'.$contact['contact_id'].'/'.$contact['contact_account_id'].'/create')}}">
                                    <i>Create Lead</i>
                                  </a> --}}
                                 {{--  <a href="{{ count($contact['contact_account_id']) ? asset('/lead/'.$contact['contact_id'].'/'.$contact['contact_account_id'].'/create') : asset('/lead') }}">
                                    <a href="{{ count($contact['contact_account_id']) ? asset('/lead') :  asset('/lead/'.$contact['contact_id'].'/'.$contact['contact_account_id'].'/create')}}">
                                    <i>Create Lead</i> --}}
                                  </a>
                                  <a href="{{asset('/lead/'.$contact['contact_id'].'/'.$contact['contact_account_id'])}}">
                                    <i>View Lead</i>
                                  </a>

                                </li>
                              </ul>
                            </ul>
                            </li>
                          </ul>
                        </li>

                          
                        </form>
                        
                      </td>
                      
                       {{--  --}}

                      

                      {{--  --}}  

                    </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                <th>Contact ID</th>
                <th>Contact Type</th>
                <th>Name</th>
                <th>Mobile No</th>
                <th>Landline No</th>
                <th>Email</th>
                  {{-- <th>Edit</th> --}}
                  {{--<th>Delete</th>--}}
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            {{-- $data['contact']['data'] --}}
            {{-- {{$data['contact']->links('vendor.pagination.custom')}} --}}
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    {{-- ./BOx --}}
  </div>
  {{--  ./Col  --}}
</div>
<!-- /.row -->
<!-- Upload File  Model -->
{{-- <div class="modal fade" id="fileModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <form  id="model-post-form" method="post" action="{{url('/contact/uploadFile')}}" enctype="multipart/form-data">
      {{ csrf_field() }}
        <div class="modal-header">
          <h4 class="modal-title">Upload File</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <!--<form>-->
          <div class="form-group">
            <input type="file"  name="file">
          </div>
          <!--</form>-->
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
            <button type="submit" id="post-save-model" class="btn btn-primary">Upload</button>
        </div>
      </form>
    </div>
  </div>
</div>
 --}}<!-- ./Create Folder/Directory  Model -->

 <script>
$( document ).ready(function() {
     $('.delete-record').click(function(event){ 
      event.preventDefault();                                  
       // console.log($(this).data('taskid'));                                 
       var url='/contact/'+$(this).data('recordid');
       // var url="/boards/"+$data['boardid']+'/'.data('boardid');

       // console.log(url);
       $('#modal-default-form').attr('action',url);                             
       $('#modal-default').modal('show')
     });
   });
</script>

@endsection

@section('bodyScriptUpdate')

@include('include.uploadFilePlatform')
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