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
use App\Jobs\ProcessEmail;
use Carbon\Carbon;

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
       // single mail
       // Mail::to('vikram2327@gmail.com')->send(new SendMailable($name));
       
        // using without Job working email queue
        // $ar['0']=['digvijay.dubey@forethought.in'];
        // $ar['1']=['dig.d12345@gmail.com'];
        // $ar['2']=['khushi.jain@forethought.in'];
        // $ar['3']=['khushijain857@gmail.com'];
        // $ar['4']=['ayush.patel@forethought.in'];
        // $ar['5']=['patelayush94@gmail.com'];
        // $ar['6']=['sandip.gupta@forethought.in'];
        // $ar['7']=['sandipg309@gmail.com'];
        // $ar['8']=['pankhuri.prakash@forethought.in'];
        // $ar['9']=['pankhuri.prakash5@gmail.com'];
        // $ar['10']=['vikram.singh@forethought.in'];
        // $ar['11']=['vikramforvk@gmail.com'];
        // $ar['12']=['vibhav.kanoujiya@forethought.in'];
        // $ar['13']=['kumarvibhav81@gmail.com'];
        // $ar['14']=['jay.prakash@forethought.in'];
        // $ar['15']=['jpforever1999@gmail.com'];
        // $ar['16']=['mishrahimanshu@gmail.com'];

        // foreach($ar as $a)
        //  {
        //    Mail::to($a)->later((Carbon::now()->addSeconds(10)),new SendMailable($name));
        //  }
        // using without Job working email queue

        



        // dispatch(new ProcessEmail($name));
       // $job=(new ProcessEmail($name))->delay(Carbon::now()->addSeconds(10));

        // using Job working email queue
       $job=(new ProcessEmail())->delay(Carbon::now()->addSeconds(10));
        dispatch($job);

       return 'Email was sent';
    }
}
