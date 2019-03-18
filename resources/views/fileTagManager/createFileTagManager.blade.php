@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')
<!-- Select2 -->
  <link rel="stylesheet" href="{{asset('admin_lte/bower_components/select2/dist/css/select2.min.css')}}">
@endsection

@section('ContentHeader(Page_header)')

  <h1>
    File Tag Manager
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{asset('/')}}"><i class="fa fa-dashboard"></i>Home</a></li>
    <li class="active">File Tag Manager Form</li>
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
      <form role="form" action="{{ asset('/file-manager') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-12">
              {{-- FormBOXBody --}}
              <div class="box-body">
                

                <div class="form-group">
                  <label for="file-description" >File Description</label>
                      <input type="text" class="form-control" id="file-description" name="file-description" placeholder="File Description">
                </div>

                <div class="form-group">
                  <label for="folderPath" >Folder Path</label>
                   <select class="form-control" style="width: 100%;" name="folder">
                    <option value="" disabled selected>Select Folder</option>
                      @foreach($data['dir'] as $elements)
                        <option value="{{$elements}}">{{str_replace('public/files/shares/',"",$elements)}}</option>
                      @endforeach

                  </select>
                </div>


                <div class="form-group">
                  <label for="fileUpload" >Upload File</label>
                  <input type="file" class="form-control" id="fileUpload" name="file" placeholder="Enter your email">
                </div>


                <div class="form-group">
                  <label for="folderPath">Tags</label>
                   <select class="form-control select2" style="width: 100%;" name="filetag[]" multiple="multiple" data-placeholder="Select Tag">
                     
                      @foreach($data['tag'] as $elements)
                        <option value="{{$elements}}">{{$elements}}</option>
                      @endforeach
                      
                  </select>
                </div>

               
              </div>
              {{-- ./FormBOXBody --}}
            </div>
            {{-- ./Left Form Field --}}

          
        </div>

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
 <script src="{{asset('admin_lte/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
 <script type="text/javascript">
   $(function () {
    //Initialize Select2 Elements
    $('.select2').select2({
        allowClear: true,
        tags: true,
        tokenSeparators: [',', ' '],
          insertTag: function (data, tag) {
          // Insert the tag at the end of the results
          data.push(tag);
        }
      })
     });
  // });
 </script>
@endsection