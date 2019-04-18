@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    List Form

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

      {{-- form--}}
      <form role="form" action="{{ asset('/lists') }}" method="POST">
        {{ csrf_field() }}
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-12">
              {{-- FormBOXBody --}}
              <div class="box-body">

                <div class="form-group">
                  <label for="board_id">Board Name</label>
                  <input type="hidden" class="form-control" id="board_id" name="board_id" placeholder="Board Id" value="{{$data['boardid']}}" required>
                  <input type="text" class="form-control" id="board_name" name="board_name" placeholder="Board Name" value="{{$data['boardname']}}" disabled>
                </div>



                <div class="form-group">
                  <label for="list_name" >List Name</label>
                      <input type="text" class="form-control" id="list_name" name="list_name" placeholder="List Name" required>

                </div>


                   <div class="form-group">
                     <label for="order">Order</label>
                     <input type="varchar" class="form-control" id="order" name="list_order" placeholder="order" required>
                </div>


              </div>
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