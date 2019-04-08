@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    Card Form
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href={{asset('/')}}><i class="fa fa-dashboard"></i> Home</a></li>
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
      <form role="form" id="update-form" action="{{ asset('/cards/'.$data['cards']['card_id']) }}" method="POST">
        {{ csrf_field()}}
        @method('PUT')
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-12">
              {{-- FormBOXBody --}}
              <div class="box-body">

                <div class="form-group">
                  <label for="list_id" >List ID</label>
                  <input type="text" class="form-control enabelInputField" id="list_id" name="list_id" value="{{$data['cards']['list_id']}}" disabled>
                </div>

                <div class="form-group">
                  <label for="name" >Name</label>
                  <input type="text" class="form-control enabelInputField" id="name" name="card_name" value="{{$data['cards']['card_name']}}">
                </div>


                <div class="form-group">
                  <label for="description" >Description</label>
                      <input type="text" class="form-control enabelInputField" id="card_description" name="card_description" value="{{$data['cards']['card_description']}}">
                </div>

                <div class="form-group">
                   <label for="order" >Order</label>
                    <input type="text" class="form-control enabelInputField" id="order" name="card_order" value="{{$data['cards']['card_order']}}">
                </div>

                <div class="form-group">
                   <label for="members" >Members</label>
                    <input type="text" class="form-control enabelInputField" id="members" name="card_members" value="{{$data['cards']['card_members']}}">
                </div>


              <div class="form-group">
                    <label for="comments">Add  Comments</label>
                    <textarea  class="form-control textarea " name="card_comment" id="card_comment" rows="5" ><?php echo $data['cards']['card_comment'];?>
                    </textarea >
                </div>
              </div>

              <div class="box-footer">
          <button type="submit" data-recordid="{{$data['cards']['card_id']}}" type="submit" class="btn btn-primary  update-record">Update</button>
        </div>

      </form>
      {{-- ./Form --}}
    </div>
{{--  ./Horizonantal Form  --}}
  </div>
  {{--  ./Col  --}}
  <script>
  $(function () {
        // bootstrap WYSIHTML5 - text editor

    $('.textarea').wysihtml5({
      toolbar: { fa: true }
    });

  });
</script>
</div>
<!-- /.row -->

               <script>
                 $( document ).ready(function() {
                     $('.update-record').click(function(event){
                      event.preventDefault();
                       var url='/boards/'+$(this).data('recordid');
                       $('#modal-default-form').attr('action',url);
                       $('#modal-default').modal('show')
                     });
                   });
               </script>

@endsection
<script>
  $(function () {
        // bootstrap WYSIHTML5 - text editor

    $('.textarea').wysihtml5({
      toolbar: { fa: true }
    });

  });
</script>

@section('bodyScriptUpdate')


@include('include.modal.updateModal')

@endsection