@extends('layouts.adminApp')

@section('title', 'ListBrand')

@section('headAdminScriptUpdate')

<!-- DataTables -->
  <link rel="stylesheet" href="{{asset("/admin_lte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css")}}">

@endsection

@section('ContentHeader(Page_header)') 

  <h1>
    Brand  List
    <a href="/brands/create" title="">
      <i class="fa fa-edit"> create</i>
    </a>
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Brand LIst</li>
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
                  <th>Brand ID</th>
                  <th>Brand Persona</th>
                  <th>Brand guidelines</th>
                  <th>Brand color Palette</th>
                  <th>Brand Typography</thh
                  <th>Brand Email Signature</th>h
                  <th>Brand Disclaimer</th>

                  {{-- <th>Edit</th> --}} 
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($brands as $brands)
                    <tr> 
                      <td>{{$brands->brand_id}}</td>
                      <td><a href="{{ url('brands'.'/'.$brands->brand_id)}}">{{$brands->brand_persona}}</a></td>
                      
                       <td>{{$brands->brand_guidelines}}</td>
                        <td>{{$brands->brand_color_palette}}</td>
                        <td>{{$brands->brand_typography}}</td>
                        <td>{{$brands->brand_email_signature}}</td>
                        <td>{{$brands->brand_disclaimer}}</td>
      {{--                 <td>
                        <a class="btn btn-small btn-primary" href="{{ url('brand'.'/' .$brands->brand_id)}}">Edit</a>
                      </td>
       --}}                <td>
                       <form action="{{ url('brands'.'/' .$brands->brand_id)}}" method="post">
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
                  <th>Brand ID</th>
                  <th>Brand Persona</th>
                  <th>Brand guidelines</th>
                  <th>Brand color Palette</th>
                  <th>Brand Typography</th>
                   <th>Brand Email Signature</th>
                    <th>Brand Disclaimer</th>
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