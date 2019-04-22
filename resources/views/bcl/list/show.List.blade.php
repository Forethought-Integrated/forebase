@extends('layouts.adminApp')

@section('title', 'ListAccount')

@section('headAdminScriptUpdate')

<!-- DataTables -->
  <link rel="stylesheet" href="{{asset("/admin_lte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css")}}">

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    List List
    <a href="{{ asset('/lists/create') }}" title="">
      <i class="fa fa-edit">create</i>
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
                  <th>List ID</th>
                  <th>Board ID</th>
                  <th>Name</th>
                  <th>Order</th>
                  <th>Archieved</th>

                  {{-- <th>Edit</th> --}}
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                 <!-- <pre>{{print_r($data)}}</pre> -->
                  @foreach($data['lists'] as $data)
                    <tr>
                      <td>{{$data['list_id']}}</td>
                      <td><a href="{{ asset('lists'.'/'.$data['list_id'])}}">{{$data['board_id']}}</a></td>
                      {{-- <td>{{$data['account_name']}}</td> --}}
                      <td>{{$data['list_name']}}</td>
                      <td>{{$data['list_order']}}</td>
                      <td>{{$data['list_archieved']}}</td>

                     <td>
                       <form action="{{asset('cards'.'/'.$data['card_id'])}}" method="post">
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
                  <th>List ID</th>
                  <th>Board ID</th>
                  <th>Name</th>
                  <th>Order</th>
                  <th>Archieved</th>
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