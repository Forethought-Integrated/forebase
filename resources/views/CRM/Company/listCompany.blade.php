@extends('layouts.adminApp')

@section('title', 'ListCompany')

@section('headAdminScriptUpdate')

<!-- DataTables -->
  <link rel="stylesheet" href="{{asset("/admin_lte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css")}}">

@endsection

@section('ContentHeader(Page_header)') 

  <h1>
    Company  List
    <a href="/companies/create" title="">
      <i class="fa fa-edit"> create</i>
    </a>
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Company List</li>
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
                  <th>Company ID</th>
                  <th>Company Name</th>
                  <th>Company Registration Address</th>
                  <th>Company State</th>
                  <th>Company Country</th>
                  <th>Country Pincode</th> 
                  <!-- <th>Company Email</th>
                  <th>Company Phone No.</th>
                  <th>Company Primary Contact</th>
                  <th>Company Secondry Contact</th>
                  <th>Company Pan No.</th>
                  <th>Company Registration no.</th>
                  <th>Company Overview</th> -->
                  <th>Company Industry</th>
                  <th>Company Website</th>

                  {{-- <th>Edit</th> --}}
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($company as $companies)
                    <tr> 
                      <td>{{ $companies->company_id }}</td>
                      <td><a href="{{ url('companies'.'/'.$companies->company_id )}}">{{$companies->company_name}}</a></td>
                      
                       <td>{{$companies->company_registration_address}}</td>
                        <td>{{$companies->company_state}}</td>
                        <td>{{$companies->company_country}}</td>
                        <td>{{$companies->company_pincode}}</td>
                       <!--  <td>{{$companies->company_email}}</td>
                        <td>{{$companies->company_phone_no}}</td>
                        <td>{{$companies->company_primary_contact}}</td>
                        <td>{{$companies-> company_secondary_contact}}</td>
                        <td>{{$companies->company_pan_no}}</td>
                         <td>{{$companies->company_registration_no}}</td>
                         <td>{{$companies-> company_overview}}</td> -->
                         <td>{{$companies->company_industry}}</td>
                         <td>{{$companies->company_website}}</td>
      {{--                 <td>
                        <a class="btn btn-small btn-primary" href="{{ url('companies'.'/' .$companies->company_id )}}">Edit</a>
                      </td>
       --}}                <td>
                       <form action="{{ url('companies'.'/' .$companies->company_id)}}" method="post">
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
                   <th>Company ID</th>
                  <th>Company Name</th>
                  <th>Company Registration Address</th>
                  <th>Company State</th>
                  <th>Company Country</th>
                  <th>Country Pincode</th> 
                  <!-- <th>Company Email</th>
                  <th>Company Phone No.</th>
                  <th>Company Primary Contact</th>
                  <th>Company Secondry Contact</th>
                  <th>Company Pan No.</th>
                  <th>Company Registration no.</th>
                  <th>Company Overview</th> -->
                  <th>Company Industry</th>
                  <th>Company Website</th>
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