  @extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

  <h1>
   Color Palette Form
    
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Color Palette Detail</li>
  </ol>

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
      <form role="form" id="update-form" action="{{ asset('colorpalettes'.'/'.$color_palette->color_palette_id )}}" method="POST">
        {{csrf_field()}}
        @method('PUT')
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-12">
              {{-- FormBOXBody --}}
              <div class="box-body">
                
                <div class="form-group">
                  <label for="color_type" >Color Type</label>
                  <input type="text" class="form-control enabelInputField" id="color_type" name="color_type" value="{{ $color_palette->color_type }}" >
                </div>
                

                <div class="form-group">
                  <label for="color_description" >Color Description</label>
                      <input type="text" class="form-control enabelInputField" id="color_description" name="color_description" value="{{ $color_palette->color_description }}"  >
                </div>

                <div class="form-group">
                  <label for="color_cmyk_code" >Color CMYK Code</label>
                  <input type="text" class="form-control enabelInputField" id="color_cmyk_code" name="color_cmyk_code " value="{{ $color_palette->color_cmyk_code }}" >
                </div>


                <div class="form-group">
                  <label for="color_rgb_code" >Color RGB Code</label>
                  <input type="text" class="form-control enabelInputField" id="color_rgb_code" name="color_rgb_code" value="{{ $color_palette->color_rgb_code }}"  >
                </div>
                
                <div class="form-group">
                  <label for="color_hex_code" >Color Hexa Code</label>
                  <input type="varchar" class="form-control enabelInputField" id="color_hex_code" name="color_hex_code" value="{{ $color_palette->color_hex_code}}"  >
                </div>

                <div class="form-group">
                  <label for="color_pantone_code" >Color Pantone Code</label>
                  <input type="Text" class="form-control enabelInputField" id="color_pantone_code" name="color_pantone_code" value="{{ $color_palette->color_pantone_code}}"  >
                </div>

              </div>
              {{-- ./FormBOXBody --}}
            </div>
            {{-- ./Left Form Field --}}

          
            {{-- ./RIght Form Field --}}
        </div>

        <div class="box-footer">
          <button type="submit" data-recordid="{{$color_palette->color_palette_id}}" type="submit" class="btn btn-primary  update-record">Update</button>
        </div> 
      </form>
      {{-- ./Form --}}
    </div>
    {{--  ./Horizonantal Form  --}}
  </div>
  {{--  ./Col  --}}
</div>
<!-- /.row -->

              <script>
                 $( document ).ready(function() {
                     $('.update-record').click(function(event){ 
                      event.preventDefault();                                        
                                          
                       var url='/colorpalettes'+$(this).data('recordid');
                       
                       $('#modal-default-form').attr('action',url);                             
                       $('#modal-default').modal('show')
                     });
                   });
               </script>

@endsection

@section('bodyScriptUpdate')

@include('include.modal.updateModal')
 
@endsection

