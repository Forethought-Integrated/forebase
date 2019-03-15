@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

@endsection

@section('ContentHeader(Page_header)')

<div class="row mb-2">
  <div class="col-sm-6">
    <h1>User List Blade</h1>
  </div>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="/">Home</a></li>
      <li class="breadcrumb-item active">View All User</li>
    </ol>
  </div>
</div>

@endsection

@section('MainContent')
<div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">User List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <td>ID</td>
                      <td>Name</td>
                      <td>E-mail</td>
                      <td colspan="3">Action</td>
                     
                    </tr>
                  </thead>
                 
                  <tbody>
                    @foreach($users as $users)
                    <tr>
                      <td>{{$users->id}}</td>
                      <td><a href="{{ asset('user'.'/'.$users->id)}}">{{$users->name}}</a></td>
                      <td>{{$users->email}}</td>
                    <!--  <td>
                        <form action="user/{{$users->id}}" method="post">
                          {{csrf_field()}}
                          <input name="_method" type="hidden" value="DELETE">
                          <button class="btn btn-info" type="submit">Edit</button>
                        </form>
                      </td> -->
                  
                         <td>
                        <form action="{{ asset('user/'.$users->id) }}" method="post">
                          {{csrf_field()}}
                          <input name="_method" type="hidden" value="DELETE">
                          <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                      </td>
                    </tr>
                      @endforeach
                    </tbody>
                  </table>
                  <!-- Model Code -->
                  <div class="modal fade" id="modal-default">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title"></h4>
                          </div>
                          <div class="modal-body">
                            <h2>Work Is in Progress</h2>
                            <p>Are You Sure To Delete The User&hellip;</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                            <a href="{{ asset('user/delete','$users->email')}}"><button type="button" class="btn btn-primary">Delete <?php echo "$users->email"; ?> </button></a>
                          </div>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                    <!--/.Model Code -->
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

@endsection

@section('bodyScriptUpdate')

@endsection