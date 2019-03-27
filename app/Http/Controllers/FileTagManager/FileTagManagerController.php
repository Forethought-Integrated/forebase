<?php


namespace App\Http\Controllers\FileTagManager;

use App\Model\FileTagManager;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\BrandResources;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Helper;
use \Spatie\Tags\Tag;



//use Illuminate\Support\Facades\Facade;

//use App\Http\Controllers\BrandController;


class  FileTagManagerController extends Controller
{
     
    public function index()
    { 
        $data['file']=FileTagManager::with('tags')->get();
        return view('fileTagManager.listFileTagManager',compact('data'));
    }


    public function create()    
    {
        $data['tag']=Tag::select('name')->get()->pluck('name');
        $data['dir']=Storage::directories('/public/files/shares/');
        return view('fileTagManager.createFileTagManager',compact('data'));
    }


    public function store(Request $request)
    {   
        $storedFilePath=Helper::fileUpload($request,$request['folder']);
        $filerecord=FileTagManager::create([
            'filemanager_name' => str_replace($request['folder'].'/',"",$storedFilePath),
            'filemanager_description' => $request['file-description'],
            'filemanager_folderpath'=> $request['folder'],
            'filemanager_filepath' => $storedFilePath,
        ]);
        $filerecord->addMedia($storedFilePath);
        $filerecord->attachTags($request['filetag']);
        return redirect('/file-manager'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) 
    {
        $brands = $this->get_singel_data($id);
        return view('CRM.Brand.showBrand',['brand'=>$brands]);
    }

     public function view($id) 
    {
        $brands = $this->get_singel_data($id);
        return view('CRM.Brand.listDemo',['brand'=>$brands]);
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data['file']=FileTagManager::with('tags')->find($id);
        $data['dir']=Storage::directories('/public/files/shares/');
        $data['tag']=Tag::select('name')->get()->pluck('name');
        return view('fileTagManager.editFileTagManager',compact('data'));
    }

    public function update(Request $request, $id)
    {
        $storedFilePath;
        if($request->hasFile('file')){
            $storedFilePath=Helper::fileUpload($request,$request['folder']);
            $filerecord=FileTagManager::find($id);
            $filerecord->filemanager_name = str_replace($request['folder'],"",$storedFilePath);
            $filerecord->filemanager_description = $request['file-description'];
            $filerecord->filemanager_filepath=$storedFilePath;
            $filerecord->filemanager_folderpath= $request['folder'];
            $filerecord->addMedia($storedFilePath);
            $filerecord->syncTags($request['filetag']);
            $filerecord->save();
        }
        else
        {
            $filerecord=FileTagManager::find($id);
            $filerecord->filemanager_description = $request['file-description'];
            $filerecord->syncTags($request['filetag']);
            $filerecord->save();
        }
        return redirect('/file-manager'); 
     }

    public function destroy($id)
    {
        FileTagManager::find($id)->delete();
        return redirect('/file-manager');
    }
}
