<?php

namespace App\Http\Controllers\Task;

use App\Model\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class TaskController extends Controller
{





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
        //
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
        //
        Task::create([
            'task_lead_id' => $request['TaskLeadId'],
            'task_contact_id' => $request['TaskContactId'],
            'task_compaign_id' => $request['TaskCampaignId'],
            'task_account_id' => $request['TaskAccountId'],
            'task_subject' => $request['TaskSubject'],
            'task_description' => $request['TaskDescription'], 
            'task_startdate'=> $request['StartDate'], 
            'task_enddate' => $request['EndDate'],
            'task_assignedto' => $request['AssignedTo'],
            'task_assignedby' => $request['AssignedBy'],
            'task_group' => $request['TaskGroup'],
            'task_status' => $request['TaskStatus'],
            'task_percentage' => $request['TaskCompletion'],
          
        ]);
    
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
