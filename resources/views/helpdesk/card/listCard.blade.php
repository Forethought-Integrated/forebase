@extends('layouts.adminApp')

@section('title', 'ListAccount')

@section('headAdminScriptUpdate')

<!-- DataTables -->
  <link rel="stylesheet" href="{{asset("/admin_lte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css")}}">

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    Card List
    {{-- /board/{boardID}/{userID}/list/{listID}/create/ --}}
    {{-- /board/{boardID}/{userID}/list/{listID}/create/ --}}
    {{-- <a href="/contact/create" title=""> --}}
     {{--  @if(is_null($data['card']))
      null --}}
        <a href="/board/{{$data['boardID']}}/{{Auth::user()->id}}/list/{{$data['listID']}}/create" title="">


     {{--  @else
      not no=ull --}}
        {{-- <a href="/board/{{$data['boardID']}}/{{Auth::user()->id}}/list/{{$data['card']['cards']['0']['lists_id']}}/create" title=""> --}}
       {{--  <a href="/contact/create" title="">
      @endif --}}
      <i class="fa fa-edit"> create</i>
    </a>
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Card</li>
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
                <th>Card ID</th>
                <th>Card Name</th>
                <th>Card Description</th>
                  {{-- <th>Edit</th> --}}
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                  @if(is_null($data['card']))
                    
                    @foreach($data['card']['cards'] as $dataCard)
                      <tr>
                        <td>{{$dataCard['id']}}</td>
                        {{-- <td><a href="{{ url('card'.'/'.$data['id'])}}">{{$data['name']}}</a></td>  --}}
                        <td>{{$dataCard['name']}}</td> 
                        <td>{{$dataCard['description']}}</td>
        {{--            <td>
                          <a class="btn btn-small btn-primary" href="{{ url('card'.'/'.$data['id'])}}">Edit</a>
                        </td>
         --}}           <td>
                         <form action="{{ url('/board/'.$data['boardID'].'/'.Auth::user()->id.'/list/'.$dataCard['lists_id'].'/card'.'/'.$dataCard['id'])}}" method="post">
                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="DELETE">
                            <button class="btn remove_btn" type="submit.">Delete</button>
                          </form>
                          
                        </td>
                      </tr>
                    @endforeach

                  @else
                  @endif 
                </tbody>
                <tfoot>
                <tr>
                <th>Card ID</th>
                <th>Card Name</th>
                <th>Card Description</th>
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