@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')
@endsection

@section('ContentHeader(Page_header)')

  <h1>
    {{$data['board']['board_name']}}
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{asset('/')}}"><i class="fa fa-dashboard"></i>Home</a></li>
    <li class="active"> Form</li>
  </ol>


@endsection

@section('MainContent')
<!-- <div class="row">
  <!- column -->
  <div class="col-md-12">
    <!-- Horizontal Form -->
    <div class="box box-primary">
           <!--  <div class="box-header with-border">
              <h3 class="box-title">{{$data['board']['board_name']}}</h3>
            </div> -->

      <!-- /.card-header -->

      {{-- form--}}
      <form role="form">
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-12">
              {{-- FormBOXBody --}}
              <div class="box-body">

                 <div class="form-group">
                  <a href="{{ asset('/lists/'.$data['board']['board_name'].'/'.$data['board']['board_id']) }}/create" title="" style="float: right;">
                    @can('List create')
                   <h3> <i class="fa fa-edit">create</i></h3>
                   @endcan
                  </a>

                   <label>List</label>
                   <select class="form-control abs" name="list_name" id="link" data-board="asdfs">
                    @if(empty($data['list']))
                      <option >Empty List</option>
                      @else
                        @foreach($data['list'] as $list)
                        <option  data-list="{{$list['list_id']}}">{{$list['list_name']}}</option>
                    @endforeach
                    @endif
                   </select>
                 </div>

                 <div class="form-group">
                   <label>Card</label>
                <a id="create-card-link" href="{{ asset('/card/'.$data['list']['0']['list_id']) }}/create" title="" style="float: right;">
                  @can('Card create')
                  <h3> <i class="fa fa-edit">create</i></h3>
                  @endcan
                </a>

             <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Card ID</th>
                  <th>List ID</th>
                  <th>Name</th>
                  <!-- <th>Description</th> -->
                  <th>Order</th>
                  <th>Members</th>
                  <th>Comment</th>
                  <th>Date & Time</th>

                  {{-- <th>Edit</th> --}}
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody id="tbody">

                   @if(empty($data['card']))
                    @else
                      @foreach($data['card'] as $card)
                  <tr>
                      <td>{{$card['card_id']}}</td>
                      <td>{{$card['list_id']}}</a></td>

                      <td><a href="{{ asset('cards'.'/'.$card['card_id'])}}">{{$card['card_name']}}</td>
                      <!-- <td>{{$card['card_description']}}</td> -->
                      <td>{{$card['card_order']}}</td>
                      <td>{{$card['card_members']}}</td>
                      <td>{!!$card['card_comment']!!}</td>
                      <td>{{$card['created_at']}}</td>

      {{--            <td>
                       <a class="btn btn-small btn-primary" href="{{ url('cards'.'/'.$data['board_id'])}}">Edit</a>
                      </td>
       --}}
                      <td>
                         <button class="btn remove_btn delete-record" data-recordid="{{$card['card_id']}}" type="submit">Delete</button>
                      </td>
                   </tr>
                   @endforeach
                   @endif


              </tbody>
                <tfoot>
                <tr>
                  <th>Card ID</th>
                  <th>List ID</th>
                  <th>Name</th>
                  <!-- <th>Description</th> -->
                  <th>Order</th>
                  <th>Members</th>
                  <th>Comment</th>
                  <th>Date & Time</th>

                  {{-- <th>Edit</th> --}}
                  <th>Delete</th>
                </tr>
                </tfoot>
              </table>
            </div>


            </div>
            <!-- /.box-body -->

          <!-- /.box -->
    {{-- ./BOx --}}
        </div>

       </div>
     </div>

     <script>
                $( document ).ready(function() {
                     $('.delete-record').click(function(event){
                      event.preventDefault();
                       // console.log($(this).data('recordid'));
                       var url='/cards/'+$(this).data('recordid');

                       $('#modal-default-form').attr('action',url);
                       $('#modal-default').modal('show')
                     });
                   });
</script>









       <div class="box-footer">

        </div>
      </div>

      </form>
      {{-- ./Form --}}

{{--  ./Horizonantal Form  --}}

  </div>
  {{--  ./Col  --}}
</div>
<!-- /.row -->

<div class="modal fade" action="san" id="modal-default">
          <div class="modal-dialog">
            {{-- <form action="{{route('tasks.destroy','/crm/task/')}}" method="post"> --}}
          <form id="modal-default-form" {{-- action=" --}}" method="post">
                {{method_field('delete')}}
                {{csrf_field()}}
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
               <center> <h4 class="modal-title">Are you Sure You Want to delete?</h4></center>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-success pull-left" data-dismiss="modal">No, Cancel</button>
                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                <button type="submit" class="btn btn-danger">Yes, Delete</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </form>
        </div>
          <!-- /.modal-dialog -->
  </div>

@endsection

@section('bodyScriptUpdate')
<script src="{{asset("/js/app.js")}}"></script>

@endsection