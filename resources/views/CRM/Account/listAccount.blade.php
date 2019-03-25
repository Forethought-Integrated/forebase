@extends('layouts.adminApp')

@section('title', 'ListAccount')

@section('headAdminScriptUpdate')

<!-- DataTables -->
  <link rel="stylesheet" href="{{asset("/admin_lte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css")}}">


  <style>
.pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
}

.pagination a.active {
  background-color: #4CAF50;
  color: white;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
</style>

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    Account List
    <a href="{{ asset('/account/create') }}" title="">
      <i class="fa fa-edit"> create</i>
    </a>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{asset('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Account LIst</li>
  </ol>


@endsection

@section('MainContent')
<div class="row">
   {{-- column --}}
  <div class="col-md-12">
    {{-- <pre>{{print_r($data)}}</pre> --}}
    {{-- <pre>{{print_r($data['account'])}}</pre> --}}
    {{-- <pre>{{print_r($data['account']['0'])}}</pre> --}}
    {{-- {{$data['account']->data['0']->account_name }} --}}
    {{-- <pre>{{print_r(json_decode($data['account']))}}</pre> --}}
{{-- {{json_decode($data['account'])->data['0']->account_name}} --}}
    {{-- Box --}}
    <div class="box">
            <div class="box-header">
              <button class="btn remove_btn pull-right" data-toggle="modal" data-target="#fileModal">upload</button>
              {{-- <h3 class="box-title">Data Table With Full Features</h3> --}}
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Account ID</th>
                  <th>Account Name</th>
                  <th>Mobile No</th>
                  <th>Email</th>
                  <th>Website</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                   @foreach($data['account'] as $account)
                    <tr>
                      {{-- <td>{{$no++}}</td> --}}
                      <td>{{++$data['s_no']}}</td>

                      <td><a href="{{ asset('account'.'/'.$account['account_id'])}}">{{$account['account_name']}}</a></td>
                      <td>{{$account['account_mobileNo']}}</td>
                      <td>{{$account['account_email']}}</td>
                      <td>{{$account['account_website']}}</td>
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
                                  <a href="{{asset('/account/'.$account['account_id'].'/edit/')}}">
                                    <i>Edit</i>
                                  </a>
                                  <a href="{{asset('/account/delete/'.$account['account_id'])}}"><button class=" delete-record" data-recordid="{{$account['account_id']}}" type="submit">Delete</button>
                                    
                                  </a>
                                  <a href="{{asset('/account/contact/create/'.$account['account_id'])}}">
                                    Create Contact
                                  </a>
                                  <a href="{{asset('/account/contact/'.$account['account_id'])}}">
                                    <i>View Contact</i>
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
                  <th>Account ID</th>
                  <th>Account Name</th>
                  <th>Mobile No</th>
                  <th>Email</th>
                  <th>Website</th>
                  <th>Action</th>

                </tr>
                </tfoot>
              </table>


              <ul class="pagination pull-right">

                @if($data['pagination']['prev_page_url'])
                 <li class="paginate_button previous disabled" id="example1_previous"><a href="{{route('acc',['page'=>$data['pagination']['current_page']-1])}}" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a></li>
                @else
                  <li class="paginate_button previous disabled" id="example1_previous"><a aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a></li>
                @endif
                  <li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">{{$data['pagination']['current_page']}}</a></li>
                @if($data['pagination']['next_page_url'])
                  <li class="paginate_button next" id="example1_next"><a href="{{route('acc',['page'=>$data['pagination']['current_page']+1])}}" aria-controls="example1" data-dt-idx="2" tabindex="0">Next</a></li>
                @else
                  <li class="paginate_button next disabled" id="example1_next"><a aria-controls="example1" data-dt-idx="2" tabindex="0">Next</a></li>
                @endif

              </ul>


              {{-- <div class="pagination">
                <a 
                  @if($data['pagination']['prev_page_url'])
                  href="{{route('acc',['page'=>$data['pagination']['current_page']-1])}}"
                  @else
                  disabled="disabled"
                  @endif
                  >&laquo;</a>
                <a href="#" class="active">{{$data['pagination']['current_page']}}</a>
                <a 

                  @if($data['pagination']['next_page_url'])
                  href="{{route('acc',['page'=>$data['pagination']['current_page']+1])}}"
                  @else
                  disabled="disabled"
                  @endif
                >&raquo;</a>
              </div> --}}
             {{-- 
             <div class="pagination">
  <a href="#">&laquo;</a>
  <a href="#">1</a>
  <a href="#" class="active">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a href="#">&raquo;</a>
</div> --}}

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
       var url='/account/'+$(this).data('recordid');
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
      'paging'      : false,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : false,
      'autoWidth'   : true,
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

