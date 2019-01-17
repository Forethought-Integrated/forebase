@extends('layouts.adminApp')

@section('title', 'ListAccount')

@section('headAdminScriptUpdate')

<!-- DataTables -->
  <link rel="stylesheet" href="{{asset("/admin_lte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css")}}">

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    Board List
    <a href="/boards/create" title="">
      <i class="fa fa-edit">create</i>
    </a>
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Helpdesk List</li>
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
                  <th>Board ID</th>
                  <th>Owner ID</th>
                  <th>Name</th>
                  <th>Description</th>
                  
                  {{-- <th>Edit</th> --}}
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                 <!-- <pre>{{print_r($data)}}</pre> -->
                  @foreach($data['boards'] as $data)
                    <tr>
                      <td>{{$data['board_id']}}</td>
                      <td><a href="{{ url('boards'.'/'.$data['board_id'])}}">{{$data['owner_id']}}</a></td>
                      {{-- <td>{{$data['account_name']}}</td> --}}
                      <td>{{$data['name']}}</td>
                      <td>{{$data['description']}}</td>
                     
      {{--                 <td>
                        <a class="btn btn-small btn-primary" href="{{ url('account'.'/'.$data['board_id'])}}">Edit</a>
                      </td>
       --}}                <td>
                       <form action="{{url('boards'.'/'.$data['board_id'])}}" method="post">
                          {{csrf_field()}}
                            @method('DELETE')
                          <button class="btn remove_btn" type="submit">Delete</button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                   <th>Board ID</th>
                  <th>Owner ID</th>
                  <th>Name</th>
                  <th>Description</th>
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