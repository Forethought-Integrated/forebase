  
@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    Logo Form 
   
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
      <form role="form" action="{{ asset('/logos') }}" method="POST">
        {{ csrf_field() }}
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-12">
              {{-- FormBOXBody --}}
              <div class="box-body">
                
                <div class="form-group">
                  <label for="primary_logo_url" >Primary Logo URL</label>
                  <input type="varchar" class="form-control" id="primary_logo_url" name="primary_logo_url" placeholder="Primary Logo URL">
                </div>
                

                <div class="form-group">
                  <label for="secondary_logo_url" >Secondry Logo URL</label>
                      <input type="varchar" class="form-control" id="secondary_logo_url" name="secondary_logo_url" placeholder="Secondry Logo URL">
                </div>


                <div class="form-group">
                  <label for="mnemonic_url" >Mnemonic URL</label>
                      <input type="varchar" class="form-control" id="mnemonic_url" name="mnemonic_url" placeholder="Mnemonic URL">
                </div>

                <div class="form-group">
                  <label for="logo_usage" >Logo Usage</label>
                      <input type="text" class="form-control" id="logo_usage" name="logo_usage" placeholder="Logo Usage">
                </div>
              </div>


                 <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div> 

                

              </div>
              {{-- ./FormBOXBody --}}
            </div>
            {{-- ./Left Form Field --}}

            {{-- RIght Form Field --}}
           
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