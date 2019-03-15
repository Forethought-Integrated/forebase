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
        {{-- <a href="{{$notification->data['url']}}" data-notif-id="{{$notification->id}}" data-notif-link="{{$notification->data['url']}}"> --}}
          @if($notification->type=='App\Notifications\RegisterationNotification')
          <div class="box-body">
            <a href="{{asset($notification->data['url'])}}"><span class="fa fa-users text-aqua">{{$notification->data['subject']}}</span></a>
          </div>

          <div class="pull-right">
          <a href="{{$notification->read_at ? asset("/notification-mark-unread-icon/$notification->id") : asset("/notification-mark-read-icon/$notification->id")}}"><i class="fa {{$notification->read_at ? 'fa-circle-o' : 'fa-circle'}}"></i></a>
        </div>
          @endif
          @if($notification->type=='App\Notifications\TaskNotification')
            {{-- Task --}}
             <div class="box-body">
             <span class="fa fa-users text-aqua">{{$notification->data['type']}} with Subject: <a href="{{asset($notification->data['url'])}}"> <b><i style="font-size: 15px">{{$notification->data['subject']}}</i></b> </a> has been assigned to you by <a href="{{asset($notification->data['assignedByUrl'])}}">{{$notification->data['assignedBy']}}</a> with due date {{$notification->data['taskEndDate']}}</span>
            </div>

            <div class="pull-right">
              <a href="{{$notification->read_at ? asset("/notification-mark-unread-icon/$notification->id") : asset("/notification-mark-read-icon/$notification->id")}}"><i class="fa {{$notification->read_at ? 'fa-circle-o' : 'fa-circle'}}"></i></a>
            </div>
          @endif
          {{-- Working --}}
            {{-- <div class="box-body">
             <span class="fa fa-users text-aqua">{{$notification->data['type']}} with Subject: <a href="{{$notification->data['url']}}"> <b><i style="font-size: 15px">{{$notification->data['subject']}}</i></b> </a> has been assigned to you by <a href="{{$notification->data['assignedByUrl']}}">{{$notification->data['assignedBy']}}</a> with due date {{$notification->data['taskEndDate']}}
            </div> --}}
          {{-- Working --}}

        {{-- </a>  --}}
        {{-- task with subject:value has been assigned to you by himanshu with due date...... (notification date:time) --}}
          {{-- Working --}}
        {{-- <div class="pull-right">
          <a href="{{$notification->read_at ? asset("/notification-mark-unread-icon/$notification->id") : asset("/notification-mark-read-icon/$notification->id")}}"><i class="fa {{$notification->read_at ? 'fa-circle-o' : 'fa-circle'}}"></i></a>
        </div> --}}
          {{-- Working --}}


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