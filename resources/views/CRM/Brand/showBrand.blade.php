@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    Brand Detail
    <a id="editFormField" href="/brands/{{ $brand->brand_id}}/edit/" title="">
      <i class="fa fa-edit">Edit</i>
    </a>
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Brand Detail</li>
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
       {{csrf_field()}}
      <form role="form">
        {{csrf_field()}}
        @method('PUT')
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-6">
              {{-- FormBOXBody --}}
              <div class="box-body">
                
                <div class="form-group">
                  <label for="brandPerson" >Brand Persona</label>
                  <input type="text" class="form-control enabelInputField" id="brandPerson" name="brandPerson" value="{{ $brand->brand_persona}}" disabled>
                </div>
                

                <div class="form-group">
                  <label for="brandGuidelines" >Brand Guidelines</label>
                      <input type="text" class="form-control enabelInputField" id="brandGuidelines" name="brandGuidelines" value="{{ $brand->brand_guidelines}}" disabled>
                </div>

                <div class="form-group">
                  <label for="brandColorpalate" >Brand Color Palatte</label>
                  <input type="text" class="form-control enabelInputField" id="brandColorpalate" name="brandColorpalate" value="{{ $brand->brand_color_palette}}" disabled>
                </div>


                <div class="form-group">
                  <label for="brandTypography" >Brand Typography</label>
                  <input type="text" class="form-control enabelInputField" id="brandTypography" name="brandTypography" value="{{ $brand->brand_typography}}" disabled>
                </div>
                
                <div class="form-group">
                  <label for="brandEmail" >Brand Email Signature</label>
                  <input type="varchar" class="form-control enabelInputField" id="brandEmail" name="brandEmail" value="{{ $brand->brand_email_signature}}" disabled>
                </div>

                <div class="form-group">
                  <label for="brandDisc" >Brand Disclaimer</label>
                  <input type="Text" class="form-control enabelInputField" id="brandDisc" name="brandDisc" value="{{ $brand-> brand_disclaimer}}" disabled>
                </div>

              </div>
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
<!-- /.row -->

@endsection

@section('bodyScriptUpdate')
 
@endsection