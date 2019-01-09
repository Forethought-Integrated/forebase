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


@endsection

@section('MainContent')
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
                  {{-- <th>Edit</th> --}}
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($data['contact']['data'] as $data)
                    <tr>
                      <td>{{$data['contact_id']}}</td>
                      <td>{{$data['contact_type']}}</td>
                      <td><a href="{{ url('contact'.'/'.$data['contact_id'])}}">{{$data['contact_name']}}</a></td> 
                      <td>{{$data['contact_mobileNo']}}</td>
                      <td>{{$data['contact_landlineNo']}}</td>
                      <td>{{$data['contact_email']}}</td>
      {{--            <td>
                        <a class="btn btn-small btn-primary" href="{{ url('contact'.'/'.$data['contact_id'])}}">Edit</a>
                      </td>
       --}}                <td>
                       <form action="{{ url('contact'.'/'.$data['contact_id'])}}" method="post">
                          {{csrf_field()}}
                          <input name="_method" type="hidden" value="DELETE">
                          <button class="btn remove_btn" type="submit">Delete</button>
                        </form>
                        
                      </td>
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
<!-- Upload File  Model -->
<div class="modal fade" id="fileModal">
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
<!-- ./Create Folder/Directory  Model -->

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
 
@endsection