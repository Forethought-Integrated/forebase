<?php

namespace App\Http\Controllers\Task;

use App\Model\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\User;
use App\Notifications\TaskNotification;
use Auth;

use App\Traits\User\UserModelHelper;


class TaskController extends Controller
{
    use UserModelHelper;

    public function __construct()
    {
        $this->middleware('auth');
    }



    function get_singel_data($idd)
    {
        $data = DB::table('tasks')->where('task_id',$idd )->first();
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
        $task=DB::table('tasks')->paginate(10);
        return view('Task.listTask',['task'=>$task]);
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
        $data['user']= $this->getUserData('5','name');
        // return $data;
        // $data['user']=User::all();
        return view('Task.createTask',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
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
        //
                            // get the lead of id 

        $task = $this->get_singel_data($id);
        
        // show the view and pass the lead to it
        return view('Task.showTask',['task'=>$task]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit($idd)
    {
        //
                 // get the lead of id 
        $task = $this->get_singel_data($idd);
            
        // show the view and pass the lead to it 
        return view('Task.editTask',['task'=>$task]);
       
   
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
       
         DB::table('tasks')->where('task_id','=',$id)->delete();
       
         return redirect('/crm/task'); 
    }
}
