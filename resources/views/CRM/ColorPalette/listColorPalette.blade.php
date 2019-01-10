 @extends('layouts.adminApp')

@section('title', 'ListBrand')

@section('headAdminScriptUpdate')

<!-- DataTables -->
  <link rel="stylesheet" href="{{asset("/admin_lte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css")}}">

@endsection

@section('ContentHeader(Page_header)') 

  <h1>
   Color Palettes  List
    <a href="/colorpalettes/create" title="">
      <i class="fa fa-edit"> create</i>
    </a>
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Color Palettes  List</li>
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
                  <th>Color Palettes ID</th>
                  <th>Color Type</th>
                  <th>Color Description</th>
                  <th>Color CMYK Code</th>
                  <th>Color RGB Code</th>
                  <th>Color HEXA Code</th>
                  <th>Color Pantone Code</th> 
                  
                  {{-- <th>Edit</th> --}}
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($color_palettes as $color_palette)
                    <tr>
                      <td>{{$color_palette->color_palette_id}}</td>
                      <td><a href="{{ url('colorpalettes'.'/'.$color_palette->color_palette_id)}}">{{$color_palette->color_type}}</a></td>
                      
                       <td>{{$color_palette->color_description}}</td>
                        <td>{{$color_palette->color_cmyk_code}}</td>
                        <td>{{$color_palette->color_rgb_code}}</td>
                        <td>{{$color_palette->color_hex_code}}</td>
                         <td>{{$color_palette->color_pantone_code}}</td>
                     {{--                 <td>
                        <a class="btn btn-small btn-primary" href="{{ url('colorpalettes'.'/' .$color_palette->color_palette_id)}}">Edit</a>
                      </td>
       --}}                <td>
                  
                    
                     <form action="{{ url('colorpalettes'.'/' .$color_palette->color_palette_id)}}" method="post">
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
                  <th>Color Palettes ID</th>
                  <th>Color Type</th>
                  <th>Color Description</th>
                  <th>Color CMYK Code</th>
                  <th>Color RGB Code</th> 
                   <th>Color HEXA Code</th>
                    <th>Color Pantone Code</th>
                  {{-- <th>Edit</th> --}}
                  <th>Delete</th>
                </tr>
                </tfoot>
              </table>
              {{ $color_palettes->links() }}
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
