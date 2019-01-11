@extends('layouts.adminApp')

@section('title', 'ListAccount')

@section('headAdminScriptUpdate')

<!-- DataTables -->
  <link rel="stylesheet" href="{{asset("/admin_lte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css")}}">

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    Account List
    <a href="/account/create" title="">
      <i class="fa fa-edit"> create</i>
    </a>
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Account LIst</li>
  </ol>


@endsection

@section('MainContent')
<div class="row">
   {{-- column --}}
  <div class="col-md-12">
    {{-- Box --}}
    <div class="box">
            <div class="box-header">
              <button class="btn remove_btn pull-right" data-toggle="modal" data-target="#fileModal">upload</button>
              {{-- <h3 class="box-title">Data Table With Full Features</h3> --}}
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Account ID</th>
                  <th>Account Name</th>
                  <th>Mobile No</th>
                  <th>Email</th>
                  <th>Website</th>
                  {{-- <th>Edit</th> --}}
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                   <?php $no=1;?>
                  @foreach($data['account']['data'] as $data)
                    <tr>
                     <!--  <td>{{$data['account_id']}}</td> -->
                     <td>{{$no++}}</td>
                      <td><a href="{{ url('account'.'/'.$data['account_id'])}}">{{$data['account_name']}}</a></td>
                      {{-- <td>{{$data['account_name']}}</td> --}}
                      <td>{{$data['account_mobileNo']}}</td>
                      <td>{{$data['account_email']}}</td>
                      <td>{{$data['account_website']}}</td>
      {{--                 <td>
                        <a class="btn btn-small btn-primary" href="{{ url('account'.'/'.$data['account_id'])}}">Edit</a>
                      </td>
       --}}                <td>
                       <form action="{{url('account'.'/'.$data['account_id'])}}" method="post">
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
                  <th>Account ID</th>
                  <th>Account Name</th>
                  <th>Mobile No</th>
                  <th>Email</th>
                  <th>Website</th>
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