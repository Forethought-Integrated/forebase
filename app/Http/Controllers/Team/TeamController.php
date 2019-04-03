<?php

namespace App\Http\Controllers\Team;

use App\Model\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;



class TeamController extends Controller
{
     function get_singel_data($id)
    {
        $data = DB::table('team')->where('team_id',$id)->first();
               
        return $data;
    }
    
    public function index()
    {
        $team=Team::all();
        return view('Team.listTeam',compact('team'));

       
    }

    public function create()
    {
        return view('Team.createTeam');

    }
   
    public function store(Request $request)
    {
        
        $team = $request->all();
         Team::create($team);
         return redirect('/team');

    }

    public function show($id)
    {
        $team = $this->get_singel_data($id);

        return view('Team.showTeam',['team'=>$team]);


    }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\DataMapper  $dataMapper
    //  * @return \Illuminate\Http\Response
    //  */
     public function edit($id)
    {
      $team = Team::find($id);
        
        //load form view
        return view('Team.editTeam', ['team' => $team]);

      }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\DataMapper  $dataMapper
    //  * @return \Illuminate\Http\Response
    //  */
     public function update(Request $request,    $id)
     {
        
        $team= Team::findOrFail($id);
        $team ->update($request->all());
        $team->save(); 
 
        return redirect('/team');
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DataMapper  $dataMapper
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         DB::table('team')->where('team_id','=',$id)->delete();
         return redirect()->back();
    }

   
}
