  @extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    folder Icon Details
    
  </h1>
 

@endsection

@section('MainContent')
<div class="row">
  <!--  column -->
  <div class="col-md-12">
    <!-- Horizontal Form -->
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Folder Icon Details</h3>
            </div>
      <!-- /.card-header -->

      {{-- form--}}
      <form role="form" action="{{ asset('foldericon'.'/'.$foldericon->id)}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        @method('PUT')
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-12">
              {{-- FormBOXBody --}}
              <div class="box-body">
                
                
                

                <div class="form-group">
                  <label for="folder_name" >Folder Name</label>
                      <input type="text" class="form-control enabelInputField" id="folder_name" name="folder_name" value="{{ $foldericon->folder_name }}" >
                </div>

                <div class="form-group">
                  <label for="image" >Choose file</label>
                      <input type="file" class="custom-file-label"  name="image" value="{{ $foldericon->image }}">
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
