<?php

namespace App\Http\Controllers\Task;

use App\Model\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\User;
use App\Notifications\TaskNotification;
use Auth;
use Illuminate\Database\Eloquent\SoftDeletes;



use App\Traits\User\UserModelHelper;


class TaskController extends Controller
{
    use UserModelHelper;

    public function __construct()
    {
        $this->middleware('auth');
    }



    function get_singel_data($id)
    {
        $data['task'] = Task::where('task_id',$id )->first();
        $data['assignedTo'] = User::select('name')->where('id',$data['task']['task_assignedto'])->first()->value('name');
        $data['assignedBy'] = User::select('name')->where('id',$data['task']['task_assignedto'])->first()->value('name');
        // $data['assignedBy'] = Task::where('task_id',$id )->first();
        return $data;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['task']=Task::paginate(10);

        // dd(gettype($task));
         // $task->withPath('custom/url');

            // return $task->getOptions();
        return view('Task.listTask',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $task =  $this->get_singel_data($id);
        // return view('Task.createTask',['task'=>$task]);
        // $data['user']=User::select('id','name')->paginate('1');
        // return $this->getUserData('name','vi');
        // return $this->getUserData(Null,Null,5);
        // return $data;
        // $data['user']=User::all();

        // $data['user']= $this->getUserData('5','name');
        // return view('Task.createTask',compact('data'));
        return view('Task.createTask');
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request['AssignedTo'];
       $task= Task::create([
            'task_lead_id' => $request['TaskLeadId'],
            'task_contact_id' => $request['TaskContactId'],
            'task_compaign_id' => $request['TaskCampaignId'],
            'task_account_id' => $request['TaskAccountId'],
            'task_subject' => $request['TaskSubject'],
            'task_description' => $request['TaskDescription'], 
            'task_startdate'=> $request['StartDate'], 
            'task_enddate' => $request['EndDate'],
            'task_assignedto' => $request['AssignedTo'],
            // 'task_assignedby' => $request['AssignedBy'],
            'task_assignedby' => $request->user()->id,
            'task_group' => $request['TaskGroup'],
            'task_status' => $request['TaskStatus'],
            'task_percentage' => $request['TaskCompletion'],
          
        ]);
       // return  $task['task_id'];
        $user=User::where('id',$task['task_assignedby'])->pluck('name');

        $notificationAr['subject']=$request['TaskSubject'];
        $notificationAr['icon']=$request['TaskSubject'];    
        $notificationAr['url']="/crm/task/$task->task_id";
        $notificationAr['type']='Task';
        $notificationAr['assignedBy']=$user['0'];
        $notificationAr['assignedByUrl']="/users/".$task['task_assignedby'];
        // $notificationAr['assignedByUrl']=asset("users/".$task['task_assignedby']);
        $notificationAr['taskId']=$task['task_id'];
        $notificationAr['taskEndDate']=$task['task_enddate'];
        // $ab=implode(',',$a);
        // $ab=$a['0'];
        // return $ab;
        // User::find($task['task_assignedto'])->notify(new TaskNotification($notificationAr));
        


    
        return redirect('/crm/task');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $data = $this->get_singel_data($id);
        // return $data;
         // show the view and pass the lead to it
        return view('Task.showTask',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
                 // get the lead of id 
        $data = $this->get_singel_data($id);
        // show the view and pass the lead to it 
        return view('Task.editTask',['data'=>$data]);
       
   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) 
    {
        //
        // DB::table('tasks')->where('id', $id)->update(['name' => $request->name]);
        $task = Task::findOrFail($id);
        $task->update($request->all());
        $task->save();
        return redirect('/crm/task');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
         $task = Task::findOrFail($id);
         $task->delete();
         return redirect('/crm/task'); 
    }


    public function trashdata()
    {
       return 'hi';
        $data = $this->get_singel_data($id);
        return view('Task.trashTask',['data'=>$data]);
       
    }

    // public function restore()
    // {
    //    $task=Task::findOrFail()
    //    $task->restore();
    //    return redirect ('/crm/trashdata');
    // }
}
