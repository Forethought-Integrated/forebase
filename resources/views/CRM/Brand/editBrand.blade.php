@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    Brand Detail
    
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
      <form role="form" id="update-form" action="{{ url('brands'.'/'.$brand->brand_id)}}" method="POST">
        {{csrf_field()}}
        @method('PUT')
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-12">
              {{-- FormBOXBody --}}
              <div class="box-body"> 
                
               <!--  <div class="form-group">
                  <label for="brandPerson" >Brand persona</label>
                  <input type="text" class="form-control enabelInputField" id="brandPerson" name="brand_persona" value="{{ $brand->brand_persona }}" >
                </div> -->
                

               <div class="form-group">
                    <label for="brand_persona">Brand Persona</label>
                  <textarea  class="form-control textarea " name="brand_persona" id="brandPerson" rows="15">
                   <?php echo $brand->brand_persona;?>  
                   
                  </textarea>

                <div class="form-group">
                    <label for="brand_guidelines">Brand Logo</label>
                    <textarea  class="form-control textarea " name="brand_guidelines" id="brand_guidelines" rows="15">   <?php echo $brand->brand_guidelines;?> 
                  </textarea >

              <!--   <div class="form-group">
                  <label for="brandColorpalate" >Brand Color Palette</label>
                  <input type="text" class="form-control enabelInputField" id="brandColorpalate" name="brand_color_palette " value="{{ $brand->brand_color_palette }}" >
                </div> -->

                <div class="form-group">
                    <label for="brand_color_palette">Brand Color Palette</label>
                    <textarea  class="form-control textarea " name="brand_color_palette" id="brand_color_palette" rows="15">   <?php echo $brand->brand_color_palette;?> 
                  </textarea >


               <!--  <div class="form-group">
                  <label for="brandTypography" >Brand Typography</label>
                  <input type="text" class="form-control enabelInputField" id="brandTypography" name="brand_typography" value="{{ $brand->brand_typography }}"  >
                </div> -->

                  <div class="form-group">
                    <label for="brand_typography">Brand Typography</label>
                    <textarea  class="form-control textarea " name="brand_typography" id="brand_typography" rows="15" ><?php echo $brand->brand_typography;?> 
                  </textarea >

                   <div class="form-group">
                    <label for="brand_email_signature">Brand Email Signature</label>
                    <textarea  class="form-control textarea " name="brand_email_signature" id="brand_email_signature" rows="15" ><?php echo $brand->brand_email_signature;?> 
                  </textarea >  
                
               <!--  <div class="form-group">
                  <label for="brandEmail" >Brand Email Signature</label>
                  <input type="varchar" class="form-control enabelInputField" id="brandEmail" name="brand_email_signature" value="{{ $brand->brand_email_signature}}"  >
                </div> -->

                <!-- <div class="form-group">
                  <label for="brandDisc" >Brand Disclaimer</label>
                  <input type="Text" class="form-control enabelInputField" id="brandDisc" name="brand_disclaimer" value="{{ $brand->brand_disclaimer}}"  >
                </div> -->

                <div class="form-group">
                    <label for="brand_disclaimer">Brand Disclaimer</label>
                    <textarea  class="form-control textarea " name="brand_disclaimer" id="brand_disclaimer" rows="15" ><?php echo $brand->brand_disclaimer;?>
                </textarea >

              </div>
              {{-- ./FormBOXBody --}}
            </div>
            {{-- ./Left Form Field --}}

          
            {{-- ./RIght Form Field --}}
        </div>

        <div class="box-footer">
         <button type="submit" data-recordid="{{$brand->brand_id}}" type="submit" class="btn btn-primary  update-record">Update</button>
        </div> 
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

               <script>
                 $( document ).ready(function() {
                     $('.update-record').click(function(event){ 
                      event.preventDefault();                                        
                                          
                       var url='/brands'+$(this).data('recordid');
                       
                       $('#modal-default-form').attr('action',url);                             
                       $('#modal-default').modal('show')
                     });
                   });
               </script>
<!-- /.row -->

@endsection

@section('bodyScriptUpdate')

    @include('include.modal.updateModal')
 
@endsection
