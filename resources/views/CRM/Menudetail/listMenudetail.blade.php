@extends('layouts.adminApp')

@section('title', 'ListMenudetail')

@section('headAdminScriptUpdate')

<!-- DataTables -->
  <link rel="stylesheet" href="{{asset("/admin_lte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css")}}">

@endsection

@section('ContentHeader(Page_header)') 

  <h1>
     Menu Details List
    <a href="{{ asset('/menudetails/create') }}" title=""> 
      <i class="fa fa-edit">create</i>
    </a>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{asset('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Menu Details List</li>
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
                  <th>Menu Detail ID</th>
                  <th>Menu ID</th>
                  <th>Menu Field Name</th>
                  <th>Menu URL</th> 
                  <th>Menu Sort</th>
                 

                  {{-- <th>Edit</th> --}}
                  <th>Delete</th>
                 </tr>
                </thead>
                <tbody>
                  @foreach($menu_detail as $menu_details)
                    <tr>
                      <td>{{$menu_details->menu_detail_id}}</td>
                      <td><a href="{{ url('menudetails'.'/'.$menu_details->menu_detail_id)}}">{{$menu_details->menu_id}}</a></td>
                      
                            <td>{{$menu_details->menu_field_name}}</td>
                            <td>{{$menu_details->menu_url}}</td>
                            <td>{{$menu_details->menu_sort}}</td>
      {{--                 <td>
                        <a class="btn btn-small btn-primary" href="{{ url('menudetails'.'/' .$menu_details->menu_detail_id)}}">Edit</a>
                      </td>
       --}}                <td>
                       <form action="{{ asset('menudetails'.'/' .$menu_details->menu_detail_id)}}" method="post">
                          {{csrf_field()}}
                          <input name="_method" type="hidden" value="DELETE">
                          <button class="btn remove_btn " type="submit">Delete</button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                   <th>Menu Detail ID</th>
                  <th>Menu ID</th>
                  <th>Menu Field Name</th>
                  <th>Menu URL</th>
                  <th>Menu Sort</th>
                  
                  {{-- <th>Edit</th> --}}
                  <th>Delete</th>
                </tr>
                </tfoot>
              </table>
              {{$menu_detail->links()}}
            </div>
            <!-- /.box-body -->
          </div>
        </div>
          <!-- /.box -->
    {{-- ./BOx --}}
  </div>
  {{--  ./Col  --}}
</div>
<!-- row -->

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