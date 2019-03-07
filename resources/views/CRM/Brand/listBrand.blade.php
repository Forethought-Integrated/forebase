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
                  <th>Brand Logo</th>                 
                  <th>Brand color Palette</th>
                  <th>Brand Typography</th>
                 <!--  <th>Brand Email Signature</th>  -->
                 <!--  <th>Brand Disclaimer</th> -->

                   <th>Show</th> 
                  <th>Delete</th>
                </tr>
                </thead>
                <tbohy>
                  @foreach($brands as $brands)
                    <tr> 
                      <td>{{$brands->brand_id}}</td>
                      <td><a href="{{ url('brands'.'/'.$brands->brand_id)}}">{!!$brands->brand_persona!!}</a></td>
                      
                       <td>{!!$brands->brand_guidelines!!}</td>
                        <td>{!!$brands->brand_color_palette!!}</td>
                        <td>{!!$brands->brand_typography!!}</td>
                        <!-- <td>{!!$brands->brand_email_signature!!}</td> -->
                       <!--  <td>{!!$brands->brand_disclaimer!!}</td> -->
                     <td>
                        <a class="btn btn-small btn-primary" href="{{ url('brands-view'.'/'.$brands->brand_id)}}">show</a>

                      </td>
                       <td>
                       <form action="{{ url('brands'.'/' .$brands->brand_id)}}" method="post">
                          {{csrf_field()}}
                          <input name="_method" type="hidden" value="DELETE">
                          {{-- <button class="btn remove_btn " type="submit">Delete</button> --}}
                          <button class="btn remove_btn delete-record" data-recordid="{{$brands->brand_id}}" type="submit">Delete</button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Brand ID</th>
                  <th>Brand Persona</th>
                  <th>Brand Logo</th>
                  <th>Brand color Palette</th>
                  <th>Brand Typography</th>
                   <!-- <th>Brand Email Signature</th> -->
                    <!-- <th>Brand Disclaimer</th> -->
                  <th>Show</th>
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

              <script>
                $( document ).ready(function() {
                     $('.delete-record').click(function(event){ 
                      event.preventDefault();                                  
                       // console.log($(this).data('taskid'));                                 
                       var url='/brands/'+$(this).data('recordid');
                       
                       $('#modal-default-form').attr('action',url);                             
                       $('#modal-default').modal('show')
                     });
                   });
              </script>

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