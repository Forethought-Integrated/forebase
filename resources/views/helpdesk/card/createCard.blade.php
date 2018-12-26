@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    Create Card
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Create Card</li>
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
{{-- Route::post('/board/{boardID}/{userID}/list/{listID}/card','Helpdesk\CardController@store'); --}}

      {{-- form--}}
      <form role="form" action="/board/{{$data['boardID']}}/{{Auth::user()->id}}/list/{{$data['listID']}}/card/" method="POST">
        {{ csrf_field() }}
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-12">
              {{-- FormBOXBody --}}
              <div class="box-body">

                <div class="form-group">
                  <label for="CardName" >Card Name</label>
                      <input type="text" class="form-control" id="CardName" name="CardName" placeholder="Card Name">
                </div>

                <div class="form-group">
                  <label for="CardDescription" >Card Description</label>
                  <input type="text" class="form-control" id="CardDescription" name="CardDescription" placeholder="Card Description">
                </div>


              </div>
              {{-- ./FormBOXBody --}}
            </div>
            {{-- ./Left Form Field --}}

            {{-- RIght Form Field --}}
          <!--   <div class="col-md-6">
              {{-- FormBOXBody --}}
              <div class="box-body">
                
                {{-- ........ --}}

            


                {{-- ........ --}}

              </div>
              {{-- ./FormBOXBody --}} 


            </div> -->
            {{-- ./RIght Form Field --}}
        </div>

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Add Card</button>
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