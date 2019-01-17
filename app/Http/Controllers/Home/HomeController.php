<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Task;
use Auth;
use Session;
use Helper;
use App\User;
use App\Notifications\TaskNotification;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // return view('home');
        // $taskData=Task::where('task_assignedto',Auth::user()->id)->get()->pluck('task_subject','task_percentage');
        $taskData=Task::where('task_assignedto',Auth::user()->id)->get();
        $taskCount= $taskData->count();
        // return $taskCount;
        Session::put('taskData',$taskData);
        Session::put('taskCount',$taskCount);

        // User::find($request->user()->id)->notify(new TaskNotification);
        // return $taskData;
         return view('/dashboard/dashboard');
   
    }

    public function mail()
    {
       $name = 'Vikram Pratap Singh';
       // Mail::to('krunal@appdividend.com')->send(new SendMailable($name));
       Mail::to('vikram2327@gmail.com')->send(new SendMailable($name));
       
       return 'Email was sent';
    }
}
