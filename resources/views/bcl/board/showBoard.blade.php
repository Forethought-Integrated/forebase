@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')
@endsection

@section('ContentHeader(Page_header)')

  <h1>
    {{$data['board']['board_name']}}  
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i>Home</a></li>
    <li class="active"> Form</li>
  </ol>
<!-- <pre>{{print_r($data)}}</pre> -->

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
                <!-- <pre>{{print_r($data)}}</pre> -->
                
               
                 <div class="form-group">
                  <a href="/lists/{{$data['board']['board_name']}}/{{$data['board']['board_id']}}/create" title="" style="float: right;">
                   <h3> <i class="fa fa-edit">create</i></h3>
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
                 
                <a id="create-card-link" href="/card/{{$data['list']['0']['list_id']}}/create" title="" style="float: right;">
                  <h3> <i class="fa fa-edit">create</i></h3>
                </a>

             <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Card ID</th>
                  <th>List ID</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Order</th>
                  <th>Members</th>
                  <th>Archieved</th>
                  
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

                      <td><a href="{{ url('cards'.'/'.$card['card_id'])}}">{{$card['card_name']}}</td>
                      <td>{{$card['card_description']}}</td>
                      <td>{{$card['card_order']}}</td>
                      <td>{{$card['card_members']}}</td>
                      <td>{{$card['card_archieved']}}</td>

      {{--            <td>
                       <a class="btn btn-small btn-primary" href="{{ url('cards'.'/'.$data['board_id'])}}">Edit</a>
                      </td>
       --}}           
                      <td>
                        <form action="{{ url('cards'.'/'.$card['card_id']) }}" method="POST">
                          @method('DELETE')
                          {{csrf_field()}}
                          <!-- <button type="submit" value="submit" class="btn remove_btn" >Delete</button> -->
                          <input type="submit" value="Delete" class="btn remove_btn" >
                        </form>
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
                  <th>Description</th>
                  <th>Order</th>
                  <th>Members</th>
                  <th>Archieved</th>
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

@endsection

@section('bodyScriptUpdate')
<script src="{{asset("/js/app.js")}}"></script>

@endsection