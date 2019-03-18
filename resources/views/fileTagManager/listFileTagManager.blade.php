@extends('layouts.adminApp')

@section('title', 'ListAccount')

@section('headAdminScriptUpdate')

<!-- DataTables -->
  <link rel="stylesheet" href="{{asset("/admin_lte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css")}}">

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    File Tag Manager
    <a href="{{ asset('/file-manager/create') }}" title="">
      <i class="fa fa-edit">Create</i>
    </a>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{asset('/')}}"><i class="fa fa-dashboard"></i>Home</a></li>
    <li class="active">File Tag Manager</li>
  </ol>


@endsection

@section('MainContent')
<div class="row">
  {{-- <pre>{{print_r($data)}}</pre> --}}
  {{-- <pre>{{print_r($data['file'])}}</pre> --}}
  {{-- <pre>{{print_r($data['file']['8']->tags['1']->name)}}</pre> --}}
   {{-- column --}}
  <div class="col-md-12">
    {{-- Box --}}
    <div class="box">
            <div class="box-header">
             {{--  <button class="btn remove_btn pull-right" data-toggle="modal" data-target="#fileModal">upload</button> --}}
              {{-- <h3 class="box-title">Data Table With Full Features</h3> --}}
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>File ID</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Tags</th>
                  <th>Location</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php $no=1;?>
                  @foreach($data['file'] as $elements)
                    <tr>
                      <td>{{$no++}}</td>
                      <td><a href="{{ asset('storage/'.str_replace('public',"",$elements['filemanager_filepath']))}}" target="_blank">{{$elements['filemanager_name']}}</a></td>
                      <td>{{$elements['filemanager_description']}}</td>
                      {{-- <td>{{$elements->tags()->name}}</td> --}}
                      {{-- <td>{{ --}}
                      <td>
                        
                        @foreach ($elements->tags as $subelement)
                          {{$subelement->name}}
                        <br>
                        @endforeach
                      </td>
                      {{-- }}</td> --}}
                      <td>{{str_replace('public/files/shares/',"",$elements['filemanager_folderpath'])}}</td>
                      {{-- <td>{{$elements['filemanager_website']}}</td> --}}

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
                                  <a href="{{asset('/file-manager/'.$elements['filemanager_id'].'/edit/')}}">
                                    <i>Edit</i>
                                  </a>
                                </li>
                                <li class="">
                                  <a href="{{asset('/file-manager'.$elements['filemanager_id'])}}"<button class=" delete-record" data-recordid="{{$elements['filemanager_id']}}" type="submit">Delete</button>
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
                  <th>File ID</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Tags</th>
                  <th>Location</th>
                  {{-- <th>Tags</th> --}}
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
       var url='/file-manager/'+$(this).data('recordid');
       // var url="/boards/"+$data['boardid']+'/'.data('boardid');

       // console.log(url);
       $('#modal-default-form').attr('action',url);                             
       $('#modal-default').modal('show')
     });
   });
</script>

@endsection

@section('bodyScriptUpdate')
{{-- @include('include.uploadFilePlatform') --}}

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
          <form id="modal-default-form"  method="post">
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
                <button type="submit" class="btn btn-danger">Yes, Delete</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </form>
        </div>
          <!-- /.modal-dialog -->
  </div>
 
@endsection

