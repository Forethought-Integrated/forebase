@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    List Form
    
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">List Form</li>
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
      <!-- <pre>{{print_r($data)}}</pre> -->

      {{-- form--}}
      <form role="form" action="/lists" method="POST">
        {{ csrf_field() }}
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-12">
              {{-- FormBOXBody --}}
              <div class="box-body">
                
                <!-- <div class="form-group">
                  <label for="board_id">Board Id</label>
                  <input type="int" class="form-control" id="board_id" name="board_id" placeholder="Board Id">
                </div> -->
               
                

                <div class="form-group">
                  <label for="list_name" >Name</label>
                      <input type="text" class="form-control" id="list_name" name="list_name" value="{{$list['id']}}">{{$list['list_name']}}">
                </div>

               
                   <div class="form-group">
                     <label for="order">Order</label>
                     <input type="varchar" class="form-control" id="order" name="list_order" placeholder="order">
                </div>

                 

                 <div class="form-group">
                  <label for="archieved">Archieved</label>
                  <input type="varchar" class="form-control" id="archieved" name="archieved" placeholder="Archieved">
                </div>

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
 
@endsection