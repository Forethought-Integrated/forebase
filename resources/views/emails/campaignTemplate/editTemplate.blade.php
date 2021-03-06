@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

  <h1>
    Template Detail
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
      @if(empty ($templates->template_created_by))
      default
      <form role="form" action="{{ asset('templates')}}" method="POST">
        {{csrf_field()}}
      @else
      user created
       <form role="form" action="{{ asset('templates'.'/'.$templates->template_id)}}" method="POST">
        {{csrf_field()}}
        @method('PUT')
              
      @endif
 
      
     
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-12">
              {{-- FormBOXBody --}}
              <div class="box-body">  
               <div class="form-group">
                    <label for="template_body">Template Body</label>
                  <textarea  class="form-control textarea " name="template_body" id="template_body" rows="15">
                   <?php echo $templates->template_body;?>                     
                  </textarea>
                </div>
                <div class="box-footer">

                   @if(empty ($templates->template_created_by))
      default
                     <button type="submit" class="btn btn-primary">save</button>

                     @else
                      user created
                    <button type="submit" class="btn btn-primary">Update</button>
              
                     @endif


                 </div> 
                </div>
              </div>
            </div>
          </form>
    
         
              {{-- ./FormBOXBody --}}
       </div>
            {{-- ./Left Form Field --}}

          
            {{-- ./RIght Form Field --}}
   
    {{--  ./Horizonantal Form  --}}
  </div>
  {{--  ./Col  --}}
 </div>
<script>
  $(function () {
        // bootstrap WYSIHTML5 - text editor

    $('.textarea').wysihtml5({
      toolbar: { fa: true }
    });

  });
</script>
<!-- /.row -->

@endsection

@section('bodyScriptUpdate')
 
@endsection
