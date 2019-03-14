@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

  <h1>
   Tag Form
    
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Tag Detail</li>
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
      <form role="form" id="update-form" action="{{ url('tags'.'/'.$tag->id )}}" method="POST">
        {{csrf_field()}}
        @method('PUT')
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-12">
              {{-- FormBOXBody --}}
              <div class="box-body">
                
                <div class="form-group">
                  <label for="color_type" >Name</label>
                  <input type="text" class="form-control enabelInputField" id="color_type" name="name" value="{{ $tag->name }}" >
                </div>
                

                <div class="form-group">
                  <label for="slug" >Slug</label>
                      <input type="text" class="form-control enabelInputField" id="slug" name="slug" value="{{ $tag->slug }}"  >
                </div>

                <div class="form-group">
                  <label for="order_column" >Order Column</label>
                  <input type="text" class="form-control enabelInputField" id="order_column" name="order_column" value="{{ $tag->order_column }}" >
                </div>


                

              </div>
              {{-- ./FormBOXBody --}}
            </div>
            {{-- ./Left Form Field --}}

          
            {{-- ./RIght Form Field --}}
        </div>

        <div class="box-footer">
          <button type="submit" data-recordid="{{$tag->id}}" type="submit" class="btn btn-primary  update-record">Update</button>
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
                                          
                       var url='/tags'+$(this).data('recordid');
                       
                       $('#modal-default-form').attr('action',url);                             
                       $('#modal-default').modal('show')
                     });
                   });
               </script>

@endsection

@section('bodyScriptUpdate')

@include('include.modal.updateModal')
 
@endsection

