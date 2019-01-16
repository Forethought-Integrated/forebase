<?php
namespace App\Http\Controllers\Notification;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;


class NotificationController extends Controller
{   

    public function index()
    {
        // return 'hinot';
        return view('notifications/listNotification');

    }

    public function markAsRead(Request $request)
    { 
         // return 'himark';
        Auth::user()->notifications->where('id', $request->data['id'])->markAsRead();
        return 'success';
    }

    public function markAsReadAll(Request $request)
    { 
         // return 'himark';
        foreach ($request->user()->unreadNotifications as $notification) {
            $notification->markAsRead();
        }
        // Auth::user()->unnotifications->markAllAsRead();
        return redirect()->back();
    }

    public function markAsReadIcon($id)
    {
        // return 'read';
        Auth::user()->notifications->where('id', $id)->markAsRead();
        return redirect()->back();
    }

    public function markAsUnReadIcon($id)
    {
        // return 'unread';
        Auth::user()->notifications->where('id', $id)->markAsUnread();
        return redirect()->back();
    }
    

    public function create()
    {
        return view('CRM.Menudetail.createMenudetail');
    }

    public function store(Request $request)
    {
                   
    }

    public function show($id)
    {

    }

     public function edit($id)
    {

    }

    public function update(Request $request, $id)
    { 
         
    }


    public function destroy($id)
    {

    }
}
