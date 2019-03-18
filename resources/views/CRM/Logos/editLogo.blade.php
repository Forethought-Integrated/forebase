   @extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    Logo Details
    
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{asset('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Logo Details</li>
  </ol>

@endsection

@section('MainContent')
<div class="row">
  <!--  column -->
  <div class="col-md-12">
    <!-- Horizontal Form -->
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Logo Detail</h3>
            </div>
      <!-- /.card-header -->

      {{-- form--}}
      <form role="form" id="update-form" action="{{ asset('logos'.'/'.$logos->logo_id)}}" method="POST">
        {{csrf_field()}}
        @method('PUT')
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-12">
              {{-- FormBOXBody --}}
              <div class="box-body">
                
                <div class="form-group">
                  <label for="primary_logo_url" >Primary Logo URL</label>
                  <input type="varchar" class="form-control enabelInputField" id="primary_logo_url" name="primary_logo_url" value="{{ $logos->primary_logo_url }}" >
                </div>
                

                <div class="form-group">
                  <label for="secondary_logo_url" >Secondry Logo URL</label>
                      <input type="varchar" class="form-control enabelInputField" id="secondary_logo_url" name="secondary_logo_url" value="{{ $logos->secondary_logo_url }}" >
                </div>

                <div class="form-group">
                  <label for="mnemonic_url" >Mnemonic URL</label>
                      <input type="varchar" class="form-control enabelInputField" id="mnemonic_url" name="mnemonic_url" value="{{ $logos->mnemonic_url }}" >
                </div>

                <div class="form-group">
                  <label for="logo_usage" >Logo Usage</label>
                      <input type="text" class="form-control enabelInputField" id="logo_usage" name="logo_usage	" value="{{ $logos->logo_usage }}" >
                </div>
              </div>



                
                  <div class="box-footer">
                   <button type="submit" data-recordid="{{$logos->logo_id}}" type="submit" class="btn btn-primary  update-record">Update</button>
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

               <script>
                 $( document ).ready(function() {
                     $('.update-record').click(function(event){ 
                      event.preventDefault();                                        
                                          
                       var url='/logos'+$(this).data('recordid');
                       
                       $('#modal-default-form').attr('action',url);                             
                       $('#modal-default').modal('show')
                     });
                   });
               </script>

@endsection

@section('bodyScriptUpdate')
@include('include.modal.updateModal')
 
@endsection
