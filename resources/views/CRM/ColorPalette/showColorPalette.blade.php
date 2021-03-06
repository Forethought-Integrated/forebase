@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    Color Palette Detail
    <a id="editFormField" href="{{ asset('/colorpalettes/'.$color_palette->color_palette_id)}}/edit/"title="">
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
      <form role="form">
        {{csrf_field()}}
        @method('PUT')
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-12">
              {{-- FormBOXBody --}}
              <div class="box-body">
                
                <div class="form-group">
                  <label for="color_type" >Color Type</label>
                  <input type="text" class="form-control enabelInputField" id="color_type" name="color_type" value="{{ $color_palette->color_type}}" disabled>
                </div>
                

                <div class="form-group">
                  <label for="color_description" >Color Description</label>
                      <input type="text" class="form-control enabelInputField" id="color_description" name="color_description" value="{{ $color_palette->color_description}}" disabled>
                </div>

                <div class="form-group">
                  <label for="color_cmyk_code" >Color CMYK Code</label>
                  <input type="text" class="form-control enabelInputField" id="color_cmyk_code" name="color_cmyk_code" value="{{$color_palette->color_cmyk_code}}" disabled>
                </div>


                <div class="form-group">
                  <label for="color_rgb_code" >Color RGB Code</label>
                  <input type="text" class="form-control enabelInputField" id="color_rgb_code" name="color_rgb_code" value="{{ $color_palette->color_rgb_code}}" disabled>
                </div>
                
                <div class="form-group">
                  <label for="color_hex_code" >Color Hexa Code</label>
                  <input type="varchar" class="form-control enabelInputField" id="color_hex_code" name="color_hex_code" value="{{ $color_palette->color_hex_code}}" disabled>
                </div>

                <div class="form-group">
                  <label for="color_pantone_code" >Color Pantone Code</label>
                  <input type="Text" class="form-control enabelInputField" id="color_pantone_code" name="color_pantone_code" value="{{$color_palette->color_pantone_code}}" disabled>
                </div>

              </div>
              {{-- ./FormBOXBody --}}
            </div>
            {{-- ./Left Form Field --}}

          </div>
              {{-- ./FormBOXBody --}} 
      </form>
      {{-- ./Form --}}
    </div>
    {{--  ./Horizonantal Form  --}}
  </div>
  {{--  ./Col  --}}
</div>
<!-- /.row -->

@endsection

@section('bodyScriptUpdate')
 
@endsection