  
@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    Brand Form
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Brand Form</li>
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
      <form role="form" action="/brands" method="POST">
        {{ csrf_field() }}
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-6">
              {{-- FormBOXBody --}}
              <div class="box-body">
                
                <div class="form-group">
                  <label for="brandPerson" >Brand Persona</label>
                  <input type="text" class="form-control" id="brandPerson" name="brandPerson" placeholder="Brand Persona">
                </div>
                

                <div class="form-group">
                  <label for="brandGuidelines" >Brand Guidelines</label>
                      <input type="text" class="form-control" id="brandGuidelines" name="brandGuidelines" placeholder="Brand Guidelines">
                </div>

                <div class="form-group">
                  <label for="brandColorpalate" >Brand Color Palatte</label>
                  <input type="text" class="form-control" id="brandColorpalate" name="brandColorpalate" placeholder="Brand Color Palatte">
                </div>


                <div class="form-group">
                  <label for="brandTypography" >Brand Typography</label>
                  <input type="text" class="form-control" id="brandTypography" name="brandTypography" placeholder="Brand Typography">
                </div>
                
                <div class="form-group">
                  <label for="brandEmail" >Brand Email Signature</label>
                  <input type="varchar" class="form-control" id="brandEmail" name="brandEmail" placeholder="Brand Email Signature" >
                </div>

                <div class="form-group">
                  <label for="brandDisc" >Brand Disclaimer</label>
                  <input type="text" class="form-control" id="brandDisc" name="brandDisc" placeholder="Brand Disclaimer">
                  
                </div>

              </div>
              {{-- ./FormBOXBody --}}
            </div>
            {{-- ./Left Form Field --}}

            {{-- RIght Form Field --}}
           <!--  <div class="col-md-6">
              {{-- FormBOXBody --}}
              <div class="box-body">
                
                {{-- ........ --}}

                <div class="form-group">
                  <label for="accountCity" >City</label>
                  <input type="text" class="form-control" id="accountCity" name="accountCity" placeholder="City">
                </div>

                <div class="form-group">
                  <label for="accountState" >State</label>
                  <input type="text" class="form-control" id="accountState" name="accountState" placeholder="State">
                </div>

                <div class="form-group">
                  <label for="accountCountry" >Country</label>
                  <input type="text" class="form-control" id="accountCountry" name="accountCountry" placeholder="Country">
                </div>


                <div class="form-group">
                  <label for="accountPinCode" >Pin Code</label>
                  <input type="text" class="form-control" id="accountPinCode" name="accountPinCode" placeholder="Pincode">
                </div>

                <div class="form-group">
                  <label for="accountPanNo" >Pan No.</label>
                  <input type="text" class="form-control" id="accountPanNo" name="accountPanNo" placeholder="Pan No.">
                </div>

                <div class="form-group">
                  <label for="accountGSTNo" >GST No.</label>
                  <input type="text" class="form-control" id="accountGSTNo" name="accountGSTNo" placeholder="GST No.">
                </div>


                {{-- ........ --}}

              </div>
              {{-- ./FormBOXBody --}} 


            </div>
            {{-- ./RIght Form Field --}}
        </div> -->

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