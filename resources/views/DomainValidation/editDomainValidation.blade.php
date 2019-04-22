  @extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    User Domain Details
    
  </h1>
  

@endsection

@section('MainContent')
<div class="row">
  <!--  column -->
  <div class="col-md-12">
    <!-- Horizontal Form -->
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">User Domain Details</h3>
            </div>
      <!-- /.card-header -->

      {{-- form--}}
      <form role="form" action="{{ asset('UsersDomains'.'/'.$domain->domain_id)}}" method="POST" >
        {{csrf_field()}}
        @method('PUT')
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-12">
              {{-- FormBOXBody --}}
              <div class="box-body">
                
                
                

                <div class="form-group">
                  <label for="domain_name" >Domain</label>
                      <input type="text" class="form-control enabelInputField" id="domain" name="domain_name" value="{{ $domain->domain_name}}" >
                </div>

                
                 
                
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                  </div> 

              </div>
              {{-- ./FormBOXBody --}}
            </div>
            {{-- ./Left Form Field --}}

          
            {{-- ./RIght Form Field --}}
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
