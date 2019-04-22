@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    Tag Detail
    <a id="editFormField" href="{{ asset('/tags/'. $tag->id) }}/edit/" title="">
      <i class="fa fa-edit">Edit</i>
    </a>
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
      <form role="form">
        {{csrf_field()}}
        @method('PUT')
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-12">
              {{-- FormBOXBody --}}
              <div class="box-body">
                
                <div class="form-group">
                  <label for="name" >Name</label>
                  <input type="text" class="form-control enabelInputField" id="name" name="name" value="{{ $tag->name}}" disabled>
                </div>
                

                <div class="form-group">
                  <label for="slug" >Slug</label>
                      <input type="text" class="form-control enabelInputField" id="slug" name="slug" value="{{ $tag->slug}}" disabled>
                </div>

                <div class="form-group">
                  <label for="type" >Type</label>
                      <input type="text" class="form-control enabelInputField" id="type" name="type" value="{{ $tag->type}}" disabled>
                </div>

                <div class="form-group">
                  <label for="order_column" >Order Column</label>
                  <input type="int" class="form-control enabelInputField" id="order_column" name="order_column" value="{{$tag->order_column}}" disabled>
                </div>


               

              </div>
              {{-- ./FormBOXBody --}}
            </div>
            {{-- ./Left Form Field --}}

          </div>
              {{-- ./FormBOXBody --}} 
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