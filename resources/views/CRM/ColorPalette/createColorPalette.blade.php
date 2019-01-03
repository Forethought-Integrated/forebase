 
@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    Color Palette Form
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Color Palette Form</li>
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
      <form role="form" action="/colorpalettes" method="POST">
        {{ csrf_field() }}
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-6">
              {{-- FormBOXBody --}}
              <div class="box-body">
                
                <div class="form-group">
                  <label for="color_type" >Color Type</label>
                  <input type="varchar" class="form-control" id="color_type" name="color_type" placeholder="Color Type">
                </div>
                

                <div class="form-group">
                  <label for="color_description" >Color Description</label>
                      <input type="text" class="form-control" id="color_description" name="color_description" placeholder="color_description">
                </div>

                <div class="form-group">
                  <label for="color_cmyk_code" >Color CMYK Code</label>
                  <input type="varchar" class="form-control" id="color_cmyk_code" name="color_cmyk_code" placeholder="Color CMYK Code">
                </div>


                <div class="form-group">
                  <label for="color_rgb_code" >Color RGB Code</label>
                  <input type="varchar" class="form-control" id="color_rgb_code" name="color_rgb_code" placeholder="Color RGB Code">
                </div>
                
                <div class="form-group">
                  <label for="color_hex_code" >Color Hexa Code</label>
                  <input type="varchar" class="form-control" id="color_hex_code" name="color_hex_code" placeholder="Color Hexa Code" >
                </div>

                <div class="form-group">
                  <label for="color_pantone_code" >Color Pantone Code</label>
                  <input type="varchar" class="form-control" id="color_pantone_code" name="color_pantone_code" placeholder="Color Pantone Code">
                  
                </div>

              </div>
              {{-- ./FormBOXBody --}}
            </div>
            {{-- ./Left Form Field --}}

            {{-- RIght Form Field --}}
          
        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div> 
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