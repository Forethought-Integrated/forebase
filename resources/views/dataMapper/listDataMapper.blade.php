@extends('layouts.adminApp')

@section('title', 'ListAccount')

@section('headAdminScriptUpdate')

<!-- DataTables -->
  <link rel="stylesheet" href="{{asset("/admin_lte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css")}}">

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    Data Mapper
    <a href="{{ asset('/datamapper/create') }}" title="">
      <i class="fa fa-edit"> create</i>
    </a>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{asset('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Data Mapper</li>
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
               <button class="btn remove_btn pull-right" data-toggle="modal" data-target="#fileModal">upload</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <?php $no=1;?>   
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sn. No.</th>
                  <th>Tabel</th>
                  <th>Tabel Field</th>
                  <th>Mapping Tabel</th>
                  <th>Mapping Table Field</th>
                  <th>Mapping Platform</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($data['mapper'] as $mapper)
                    <tr>
                      <td>{{$no++}}</td>
                      {{-- <td>{{$mapper['data_mappers_id']}}</td> --}}
                      <td><a href="{{ url('datamapper'.'/'.$mapper['data_mappers_id'])}}">{{$mapper['table_name']}}</a></td>
                      <td>{{$mapper['field_name']}}</td>
                      <td>{{$mapper['mapping_table_name']}}</td>
                      <td>{{$mapper['mapping_field_name']}}</td>
                      <td>{{$mapper['mapping_platform']}}</td>
                      <td>
                       <form action="{{url('datamapper'.'/'.$mapper['data_mappers_id'])}}" method="post">
                          {{csrf_field()}}
                            @method('DELETE')
                          <button class="btn remove_btn " type="submit">Delete</button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Sn No</th>
                  <th>Tabel</th>
                  <th>Tabel Field</th>
                  <th>Mapping Tabel</th>
                  <th>Mapping Table Field</th>
                  <th>Mapping Platform</th>
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

@endsection

@section('bodyScriptUpdate')
@include('include.uploadFile')

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