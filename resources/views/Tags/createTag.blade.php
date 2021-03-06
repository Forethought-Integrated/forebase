 
@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    Tags Form
    
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
      <form role="form" action="{{ asset('/tags') }}" method="POST">
        {{ csrf_field() }}
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-12">
              {{-- FormBOXBody --}}
              <div class="box-body">
                
                <div class="form-group">
                  <label for="name" >Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="name">
                </div>
                

                <div class="form-group">
                  <label for="slug" >Slug</label>
                      <input type="varchar" class="form-control" id="slug" name="slug" placeholder="Slug">
                </div>

                {[!-- <div class="form-group">
                  <label for="type" >Type</label>
                  <input type="varchar" class="form-control" id="type" name="type" placeholder="Tag type" required>
                  @foreach($data['tags'] as $tags)
                        <option value="{{$tags}}">{{$tags}}</option>
                  @endforeach

                </div> --}]

                <div class="form-group">
                 <label for="type" >Type</label>
                 <input type="varchar" class="form-control" id="type" name="type" placeholder="Tag type" required>
               </div>

                  



                <div class="form-group">
                  <label for="order_column" >Order Column</label>
                  <input type="int" class="form-control" id="order_column" name="order_column" placeholder="Order Column">
                </div>
              </div>
                
                
               <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div> 
                  {{-- ./FormBOXBody --}}
                </div>
            {{-- ./Left Form Field --}}

          

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