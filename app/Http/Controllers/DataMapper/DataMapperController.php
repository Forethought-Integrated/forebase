<?php

namespace App\Http\Controllers\DataMapper;

use App\Model\DataMapper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class DataMapperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['mapper']=DataMapper::all();
        return view('dataMapper.listDataMapper',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dataMapper.createDataMapper');

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
        DataMapper::Create(['table_name'=>$request['tableName'],'field_name'=>$request['tableFieldName'],'mapping_table_name'=>$request['mappingTableName'],'mapping_field_name'=>$request['mappingFieldName'],'mapping_platform'=>$request['mappingPlatform']]);
        return redirect('datamapper');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DataMapper  $dataMapper
     * @return \Illuminate\Http\Response
     */
    public function show($id,DataMapper $dataMapper)
    {
        //
        $data['mapper']=$dataMapper->find($id);
        return view('dataMapper/showDataMapper');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DataMapper  $dataMapper
     * @return \Illuminate\Http\Response
     */
    public function edit(DataMapper $dataMapper)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DataMapper  $dataMapper
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataMapper $dataMapper)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DataMapper  $dataMapper
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,DataMapper $dataMapper)
    {
        //
        // return $id;
        // return $dataMapper->findOrFail($id);
        $dataMapper->find($id)->delete();
        return redirect('datamapper');
    }
}
