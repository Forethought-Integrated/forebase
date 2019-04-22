
@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    Folder Icon Form
    
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
      <form role="form" action="{{ asset('/foldericon') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-12">
              {{-- FormBOXBody --}}
              <div class="box-body">
                
                <div class="form-group">
                  <label for="folder_name" >Folder Name</label>
                  <input type="int" class="form-control" id="folder_name" name="folder_name" placeholder="Folder Name"required>
                </div>
                

                <div class="form-group">
                  <label for="image" >Choose file</label>
                      <input type="file" class="custom-file-label"  name="file" required>
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