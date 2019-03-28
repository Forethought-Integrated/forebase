<?php

namespace App\Http\Controllers\Department;

use App\Model\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;



class DepartmentController extends Controller
{
     function get_singel_data($id)
    {
        $data = DB::table('departments')->where('department_id',$id)->first();
               
        return $data;
    }
    
    public function index()
    {
        $departments=Department::all();
        return view('Department.listDepartment',compact('departments'));

       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Department.createDepartment');

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return 'hio';
        // return $request['location'];
        //
        $departments = $request->all();
         Department::create($departments);
         return redirect('/department');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DataMapper  $dataMapper
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $departments = $this->get_singel_data($id);

        return view('Department.showDepartment',['department'=>$departments]);


    }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\DataMapper  $dataMapper
    //  * @return \Illuminate\Http\Response
    //  */
     public function edit($id)
    {
      $departments = Department::find($id);
        
        //load form view
        return view('Department.editDepartment', ['department' => $departments]);

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
        
        $departments= Department::findOrFail($id);
        $departments ->update($request->all());
        $departments->save(); 
 
        return redirect('/department');
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DataMapper  $dataMapper
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         DB::table('departments')->where('department_id','=',$id)->delete();
         return redirect()->back();
    }

   
}
