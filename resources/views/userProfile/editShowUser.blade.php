@extends('layouts.adminApp')

@section('title', 'ListAccount')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

  <img src="{{asset("/storage/uploads/avatar/$users->avatar")}}" style="width: 150px; height: 150px;float: left;border-radius: 50%;border-radius: 50%;margin-right: 25px;">
  <h1 style="margin-top: 30px;">{{$users->name}}'s</h1>
    <h3>Profile</h3>

  
  <ol class="breadcrumb">
    <li><a href="{{asset('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">{{$users->name}}'s Profile</li>
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
      <form role="form" action="{{ asset('/user-profile/'.$users->id) }}" method="POST" enctype="multipart/form-data">
          {{csrf_field()}}
        @method('PUT')
        <div class="row">
            {{-- Left Form Field --}}
            <div class="col-md-6">
              {{-- FormBOXBody --}}
              <div class="box-body">
                
                <div class="form-group">
                  <label for="name" >Name</label>
                  <input type="text" class="form-control enabelInputField" id="names" name="name" value="{{$users->name}}" >
                </div>
                

                <div class="form-group">
                  <label for="email" >Email</label>
                      <input type="email" class="form-control enabelInputField" id="email" name="email" value="{{$users->email}}" >
                </div>

                <div class="form-group">
                   <label>Gender</label>

                   <select class="form-control" name="gender" id ="gender">
                    <option >--select--</option>
                     <option value="Male"> Male</option>
                     <option value="Female"> Female</option>
                     
                    
                   </select>
                 </div>


                <div class="form-group">
                  <label for="mobileNo" >Mobile No.</label>
                  <input type="text" class="form-control enabelInputField" id="mobileNo" name="mobileNo" value="{{$users->mobileNo}}" >
                </div>
                
                <div class="form-group">
                  <label for="address" >Address</label>
                  <input type="text" class="form-control enabelInputField" id="address" name="address" value="{{$users->address}}" >
                </div>


              </div>
              {{-- ./FormBOXBody --}}
            </div>
            {{-- ./Left Form Field --}}

            {{-- RIght Form Field --}}
            <div class="col-md-6">
              {{-- FormBOXBody --}}
              <div class="box-body">
                

                
                  
                 
                <div class="form-group">
                   <label>Location code</label>
                   <select class="form-control" name="locationCode">
                     <option>--select--</option>                              

                  @foreach ($location_array as $data)         
                  <option  value="{{ $data->location_code }}">{{ $data->location_name }}</option>
                  @endforeach

                   </select>
              </div>


                     

               <div class="form-group">
                   <label>Department code</label>

                   <select class="form-control" name="departmentCode">
                     <option>--select--</option>                                 
                    
                  @foreach ($department_array as $data)      
                  <option  value="{{ $data->department_code }}">{{ $data->department_name }}</option>
                  @endforeach
                     
                   </select>
              </div>


               
             
                    <div class="form-group">
                   <label>Salutation Code</label>

                   <select class="form-control" name="salutationCode" selected="">
                                <option>--select--</option>

                     <option value='Mr'> Mr</option>
                     <option value='Mrs'> Mrs</option>
                     <option value='Miss'> Miss</option>
                    
                    
                   </select>
                 </div>


                <div class="form-group">
                  <label for="designationCode" >Designation Code</label>
                  <input type="text" class="form-control enabelInputField" id="designationCode" name="designationCode" value="{{$users->designationCode}}">
                </div>

                <div class="form-group">
                  <label for="avatarFile">File input</label>
                  <input type="file" id="avatarFile" name="avatarFile">
                </div>

              </div>
              {{-- ./FormBOXBody --}} 


            </div>
            {{-- ./RIght Form Field --}}
        </div>

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Update</button>
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