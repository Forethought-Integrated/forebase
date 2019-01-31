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
{{-- <pre>{{print_r($data)}}</pre> --}}

@endsection

@section('MainContent')
<div class="row">
   {{-- column --}}
  <div class="col-md-12">
    {{-- Box --}}
    <div class="box">
            <div class="box-header">
                <button class="btn remove_btn pull-right" data-toggle="modal" data-target="#fileModal">upload</button>
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
                <th>Delete</th>
                <th>Action</th>
                </tr>
                </thead>
                    <tbody>
                  <?php $no=1;?>
                  @foreach($data['contact'] as $contact)
                    <tr>
                      <td>{{$no++}}</td>
                      <td>{{$contact['contact_type']}}</td>
                      <td><a href="{{ url('contact'.'/'.$contact['contact_id'])}}">{{$contact['contact_name']}}</a></td> 
                      <td>{{$contact['contact_mobileNo']}}</td>
                      <td>{{$contact['contact_landlineNo']}}</td>
                      <td>{{$contact['contact_email']}}</td>
                      <td>
                       <form action="{{ url('contact'.'/'.$contact['contact_id'])}}" method="post">
                          {{csrf_field()}}
                            <!-- <input name="_method" type="hidden" value="DELETE">
                            <button class="btn remove_btn" type="submit">Delete</button> -->
                        </form>
                        
                      </td>
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
                                  <a href="{{asset('/contact/'.$contact['contact_id'].'/edit/')}}">
                                    <i>Edit</i>
                                  </a>
                                  <a href="{{asset('/contact/.delete/'.$contact['contact_id'])}}">
                                    <i>Delete</i>
                                  </a>
                                  <a href="{{asset('/account')}}">
                                    View Account
                                  </a>
                                  <a href="{{asset('/lead/create')}}">
                                    <i>Create Lead</i>
                                  </a>
                                  <a href="{{asset('/lead')}}">
                                    <i>View Lead</i>
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
                <th>Contact ID</th>
                <th>Contact Type</th>
                <th>Name</th>
                <th>Mobile No</th>
                <th>Landline No</th>
                <th>Email</th>
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

@include('include.uploadFilePlatform')
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