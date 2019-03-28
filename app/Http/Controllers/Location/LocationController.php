<?php

namespace App\Http\Controllers\Location;

use App\Model\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;



class LocationController extends Controller
{
    function get_singel_data($id)
    {
        $data = DB::table('locations')->where('location_id',$id)->first();
               
        return $data;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations=Location::all();
        return view('Location.listLocation',compact('locations'));

        // //
        // $data['mapper']=DataMapper::all();
        // $data['fileModalTitle']='File Upload';
        // $data['fileUrl']=url('/datamapper/uploadFile');
        
        // return view('location.listLocation',compact('data'));
        // return view('location.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Location.createLocation');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request['location'];
        //
        $locations = $request->all();
         Location::create($locations);
         return redirect('/location');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DataMapper  $dataMapper
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $locations = $this->get_singel_data($id);

        return view('Location.showLocation',['location'=>$locations]);


    }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\DataMapper  $dataMapper
    //  * @return \Illuminate\Http\Response
    //  */
     public function edit($id)
    {
      $locations = Location::find($id);
        
        //load form view
        return view('Location.editLocation', ['location' => $locations]);

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
        
        $locations= Location::findOrFail($id);
 
        $locations ->update($request->all());
        $locations->save(); 
 
     return redirect('/location');
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DataMapper  $dataMapper
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        // return $id;
        // return $dataMapper->findOrFail($id);
         DB::table('locations')->where('location_id','=',$id)->delete();
        

        return redirect()->back();
    }

   
}
