@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')
 <link rel="stylesheet" href="{{asset("/admin_lte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css")}}">
@endsection

@section('ContentHeader(Page_header)')

<h1>
    Your Notification 
</h1>
@endsection

@section('MainContent')

<div class="row">
   {{-- column --}}
  <div class="col-md-12"> 
    {{-- Box --}}
    @foreach(Auth::user()->notifications as $notification)
    {{-- <a href="{{$notification->data['url']}}" data-notif-id="{{$notification->id}}" data-notif-link="{{$notification->data['url']}}"> --}}
      <div class="box todo-list {{$notification->read_at ? '' : 'notification'}}"  >
       {{--  <div class="box-header">
        </div> --}}
        <!-- /.box-header -->
        <a href="{{$notification->data['url']}}" data-notif-id="{{$notification->id}}" data-notif-link="{{$notification->data['url']}}">
            <div class="box-body">
              <i class="fa fa-users text-aqua"></i> {{$notification->data['subject']}}
            </div>
        </a> 

        <div class="pull-right">
          <a href="{{$notification->read_at ? asset("/notification-mark-unread-icon/$notification->id") : asset("/notification-mark-read-icon/$notification->id")}}"><i class="fa {{$notification->read_at ? 'fa-circle-o' : 'fa-circle'}}"></i></a>
        </div>

        <!-- /.box-body -->
      </div>
    {{-- </a>  --}}
    @endforeach
    <!-- /.box -->
    {{-- ./BOx --}}
  </div>
  {{--  ./Col  --}}
</div>
<!-- /.row -->

@endsection

@section('bodyScriptUpdate')
 
@endsection
{{-- #00000006 --}}
                  {{-- background-color: transparent; --}}

 {{--  <ul type="none">
                    @foreach(Auth::user()->notifications as $notification)
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> {{$notification->data['subject']}}
                        </a>
                      </li>
                    @endforeach
                  </ul> --}}
                  {{-- <ul type="none">
                    @foreach(Auth::user()->unreadNotifications as $notification)
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> {{$notification->data['subject']}}
                        </a>
                      </li>
                    @endforeach
                    @foreach(Auth::user()->readNotifications as $notification)
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> {{$notification->data['subject']}}
                        </a>
                      </li>
                    @endforeach
                  </ul> --}}