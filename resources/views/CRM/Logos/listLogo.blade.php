 @extends('layouts.adminApp')

@section('title', 'ListMenu')

@section('headAdminScriptUpdate') 

<!-- DataTables -->
  <link rel="stylesheet" href="{{asset("/admin_lte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css")}}">

@endsection

@section('ContentHeader(Page_header)') 

  <h1>
     Logo List
    <a href="/logos/create" title="">
      <i class="fa fa-edit"> create</i>
    </a>
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Logo List</li>
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
                  <th>Logo ID</th>
                  <th>Primary Logo URL</th>
                  <th>Secondry Logo URL</th>
                   <th>Mnemonic URL</th>
                   <th>Logo Usage</th>
                 

                  {{-- <th>Edit</th> --}}
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                  
                  @foreach($logo as $logos)
                    <tr>
                      <td>{{$logos->logo_id}}</td>
                      <td><a href="{{ url('logos'.'/'.$logos->logo_id)}}">{{$logos->primary_logo_url}}</a></td>
                      
                       <td>{{$logos->secondary_logo_url}}</td>
                       <td>{{$logos->mnemonic_url}}</td>
                       <td>{{$logos->logo_usage}}</td>
                       
                       
      {{--                 <td>
                        <a class="btn btn-small btn-primary" href="{{ url('logos'.'/' .$logos->logo_id)}}">Edit</a>
                      </td>
       --}}                <td>
                       <form action="{{ url('logos'.'/' .$logos->logo_id)}}" method="post">
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
                  <th>Logo ID</th>
                  <th>Primary Logo URL</th>
                  <th>Secondry Logo URL</th>
                  <th>Mnemonic URL</th>
                  <th>Logo Usage</th>
                 
                  
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