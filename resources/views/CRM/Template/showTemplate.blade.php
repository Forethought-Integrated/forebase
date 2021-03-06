@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    Template Detail
    <a id="editFormField" href="{{ asset('/templates/'.$templates->template_id)}}/edit/" title="">
      <i class="fa fa-edit">Edit</i>
    </a>
  </h1>
  

@endsection

@section('MainContent')
<div class="row">
  <!--  column -->
  <div class="col-md-12">
    <!-- Horizontal Form -->
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Enter Detail</h3>
            </div>
      <!-- /.card-header -->

      {{-- form--}} 
       {{csrf_field()}}
      <form role="form">
        {{csrf_field()}}
        @method('PUT')
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-12">
              {{-- FormBOXBody --}}
              <div class="box-body">
               
                 <div class="form-group">
                    <label for="template_body" >Template Body</label>
                    <textarea  class="form-control textarea" name="template_body" id="template_body" rows="15" disabled><?php echo $templates->template_body;?>
                  </textarea>
                </div>
              </div>
            </div>
          </div>
         
        {{-- <div class="box-footer">
          <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
        </div> --}} 
      </form>
      {{-- ./Form --}}
    </div>
    {{--  ./Horizonantal Form  --}}
  </div>
  {{--  ./Col  --}}
</div>
<script>
  $(function () {
        // bootstrap WYSIHTML5 - text editor

    $('.textarea').wysihtml5({
      toolbar: { fa: true }

    });

  });
</script>
<!-- /.row -->

@endsection

@section('bodyScriptUpdate')
 
@endsection