
@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    Menu Detail Form 
    
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Menudetail Form</li>
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
      <form role="form" action="{{ asset('/menudetails') }}" method="POST">
        {{ csrf_field() }}
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-12">
              {{-- FormBOXBody --}}
              <div class="box-body">
                
                <div class="form-group">
                  <label for="menu_id" >Menu Id</label>
                  <input type="int" class="form-control" id="menu_id" name="menu_id" placeholder="Menu Id">
                </div>
                

                <div class="form-group">
                  <label for="menu_field_name" >Menu Field Name</label>
                      <input type="varchar" class="form-control" id="menu_field_name" name="menu_field_name" placeholder="Menu Field Name">
                </div>


                <div class="form-group">
                  <label for="menu_url" >Menu URL</label>
                      <input type="varchar" class="form-control" id="menu_url" name="menu_url" placeholder="Menu URL">
                </div>

               <!--  <div class="form-group">
                  <label for="menu_sort" >Menu Sort</label>
                  
                      <input type="int" class="form-control" id="menu_sort" name="menu_sort" placeholder="Menu Sort">

                </div>-->

                <div class="form-group">
                   <label>Menu Sort</label>

                   <select class="form-control" name="menu_sort">
                     <option> 1</option>
                     <option> 2</option>
                     <option> 3</option>
                     <option> 4</option>
                     <option> 5</option>
                   </select>
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