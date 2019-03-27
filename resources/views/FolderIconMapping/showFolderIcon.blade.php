 @extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    Folder Icon detail
    <a id="editFormField" href="{{asset('/foldericon/'.$foldericon->id)}}/edit/" title="">
      <i class="fa fa-edit">Edit</i>
    </a>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{asset('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Folder Icon detail</li>
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
            <div class="col-md-12">
              {{-- FormBOXBody --}}
              <div class="box-body">
                
                <div class="form-group">
                  <label for="id" >Folder Icon ID</label>
                  <input type="int" class="form-control enabelInputField" id="id" name="id" value="{{$foldericon->id}}" disabled>
                </div>
                

                <div class="form-group">
                  <label for="folder_name" >Folder Name</label>
                      <input type="text" class="form-control enabelInputField" id="folder_name" name="folder_name" value="{{$foldericon->folder_name}}" disabled>
                </div>

                <div class="form-group">
                  <label for="menu_type" >Image</label>
                      <input type="file" class="custom-file-label" id="menu_type" name="image" value="{{$foldericon->image}}" disabled>
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