@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

 

@endsection

@section('MainContent')
<div class="row">
  <!--  column -->
  <div class="col-md-12">
    <!-- Horizontal Form -->
    <div class="box box-primary">
            <!-- <div class="box-header with-border">
              <h3 class="box-title">Enter Detail</h3>
            </div> -->
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
                
              
                {!! $brand->brand_persona !!}

                {!!$brand->brand_guidelines!!}

                {{!!$brand->brand_color_palette!!}}

                {{!!$brand->brand_typography!!}}

                {{!!$brand->brand_email_signature!!}}

                {{!!$brand->brand_disclaimer!!}}
                
              {{-- ./FormBOXBody --}}
            </div>
            {{-- ./Left Form Field --}}

            {{-- RIght Form Field --}} 
           


              </div>
              {{-- ./FormBOXBody --}} 


            </div>
            {{-- ./RIght Form Field --}}
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