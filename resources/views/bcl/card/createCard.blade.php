@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')
  <link rel="stylesheet" href="{{asset('admin_lte/bower_components/select2/dist/css/select2.min.css')}}">


@endsection



@section('ContentHeader(Page_header)')

  <h1>
    Card Form

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
                  <input type="hidden" class="form-control" id="board_id" name="board_id" value="{{$data['list']['board_id']}}" required>
                </div>


                <div class="form-group">
                  <label for="card_name"> Card Name</label>

                   <input type="text" class="form-control" id="card_name" name="card_name" placeholder="Card Name" required>
                </div>

                <div class="form-group">
                  <label for="card_description" >Description</label>
                  <input type="varchar" class="form-control" id="card_description" name="card_description" placeholder="Description" required>
                </div>
                   <div class="form-group">
                     <label for="card_order">Order</label>
                     <input type="varchar" class="form-control" id="card_order" name="card_order" placeholder="order" required>
                </div>

               
                <!-- <div class="form-group">
                  <label for="card_members">Members</label>
                   <select class="form-control select2" style="width: 100%;" name="card_members[]" multiple="multiple" data-placeholder="Select Members">
                  </select>
                </div> -->

                <div class="form-group">
                  <label for="members">Members</label>
                  <input type="varchar" class="form-control" id="members" name="card_members" placeholder="Members" required>
                </div>

                <div class="form-group">
                  <label for="card_date">Due Date</label>
                  <input type="datetime-local" class="form-control" id="card_date" name="card_date">
                </div>

                 <div class="form-group">
                    <label for="comments" >Add  Comments</label>
                    <textarea  class="form-control textarea " name="card_comment" id="card_comment" rows="5" placeholder="Add Comments">
                    </textarea >
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
 <!-- // bootstrap WYSIHTML5 - text editor -->

<!-- <script>
  $(function () {
    $('.textarea').wysihtml5({
      toolbar: { fa: true }
    });
  });
</script> -->

@endsection

@section('bodyScriptUpdate')

<script src="{{asset('admin_lte/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
 <script type="text/javascript">
   $(function () {
    $('.select2').select2({
        allowClear: true,
        tags: true,
        tokenSeparators: [',', ' '],
          insertTag: function (data, tag) {
          data.push(tag);
        }
      })
     });
  // });
 </script>

@endsection