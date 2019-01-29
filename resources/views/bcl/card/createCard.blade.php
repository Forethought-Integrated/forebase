  @extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    Card Form
    
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Card Form</li>
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
      <form role="form" action="{{route('cards.store')}}" method="POST">
        {{ csrf_field() }}
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-12">
              {{-- FormBOXBody --}}
              <div class="box-body">
                
                <div class="form-group">
                  <label for="list_name">List Name</label>
                  <input type="text" class="form-control" id="list_name" name="list_name" value="{{$data['list']['list_name']}}" disabled>
                  <input type="hidden" class="form-control" id="list_id" name="list_id" value="{{$data['list']['list_id']}}">
                  <input type="hidden" class="form-control" id="board_id" name="board_id" value="{{$data['list']['board_id']}}">
                </div>
                

                <div class="form-group">
                  <label for="card_name"> Card Name</label>

                   <input type="text" class="form-control" id="card_name" name="card_name" placeholder="Card Name">
                </div>

                <div class="form-group">
                  <label for="card_description" >Description</label>
                  <input type="varchar" class="form-control" id="card_description" name="card_description" placeholder="Description">
                </div>
                   <div class="form-group">
                     <label for="card_order">Order</label>
                     <input type="varchar" class="form-control" id="card_order" name="card_order" placeholder="order">
                </div>

                 <div class="form-group">
                  <label for="members">Members</label>
                  <input type="varchar" class="form-control" id="members" name="card_members" placeholder="Members">
                </div>

                 <div class="form-group">
                  <label for="archieved">Archieved</label>
                  <input type="varchar" class="form-control" id="archieved" name="card_archieved" placeholder="Archieved">
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