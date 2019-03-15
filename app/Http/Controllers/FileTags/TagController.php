<?php

namespace App\Http\Controllers\FileTags;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Tags;
use Illuminate\Support\Facades\DB;

class TagController extends Controller
{
    
     function get_singel_data($id)
    {
        $data = DB::table('tags')->where('id',$id)->first();
               
        return $data;
    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tags::all();

        return view('Tags.listTag', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Tags.createTag');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



                $arr = array('en' => $request->name,);
                $arr2 = array('en' => $request->slug,);
                $arr_tojson = json_encode($arr);
                $arr_tojson2 = json_encode($arr2);
                $tags= new Tags;
                $tags->name=$arr_tojson;
                $tags->slug=$arr_tojson2;
                $tags->type=$request->type;
                $tags->order_column=$request->order_column;
                $tags->save();

                return redirect('/tags'); 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
            public function show($id)
            {
                
                 $tags = $this->get_singel_data($id);
                return view('Tags.showTag',['tag'=>$tags]);
            }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $tags = $this->get_singel_data($id);
        return view('Tags.editTag',['tag'=>$tags]);   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tags=Tags::findOrfail($id);
        $tags->update($request->all());
        $tags->save();
        return redirect('/tags');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tags = Tags::find($id);
        $tags->delete();
       return redirect('/tags');

    }
}