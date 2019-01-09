<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Task;
use Auth;
use Session;
use Helper;

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
    public function index()
    {
        // return view('home');
        // $taskData=Task::where('task_assignedto',Auth::user()->id)->get()->pluck('task_subject','task_percentage');
        $taskData=Task::where('task_assignedto',Auth::user()->id)->get();
        $taskCount= $taskData->count();
        // return $taskCount;
        Session::put('taskData',$taskData);
        Session::put('taskCount',$taskCount);
        // return $taskData;
         return view('/dashboard/dashboard');
   
    }
}
