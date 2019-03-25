<?php


namespace App\Http\Controllers\API\FileTagManager;

use App\Model\FileTagManager;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\BrandResources;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Helper;
use \Spatie\Tags\Tag;
use Carbon\Carbon;




//use Illuminate\Support\Facades\Facade;

//use App\Http\Controllers\BrandController;


class  FileTagManagerController extends Controller
{
     
    public function index()
    { 
        $data['program']=config('app.name');
        $data['version']='1.0';
        $data['release']='1';
        $data['datetime']=Carbon::now();
        $data['timestamp']=Carbon::now()->timestamp;
        $data['status']='success';
        $data['code']=200;
        $data['message']='OK';
        $data['data']['file']=FileTagManager::with('tags')->get();
        return response()->json($data);
    }


    // public function create()
    // {
    //     $data['tag']=Tag::select('name')->get()->pluck('name');
    //     $data['dir']=Storage::directories('/public/files/shares/');
    //     return view('fileTagManager.createFileTagManager',compact('data'));
    // }


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


        $data['program']=config('app.name');
        $data['version']='1.0';
        $data['release']='1';
        $data['datetime']=Carbon::now();
        $data['timestamp']=Carbon::now()->timestamp;
        $data['status']='success';
        $data['code']=200;
        $data['message']='OK';
        return response()->json($data);
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

        $data['data']['file']=FileTagManager::with('tags')->find($id);
        $data['data']['dir']=Storage::directories('/public/files/shares/');
        $data['data']['tag']=Tag::select('name')->get()->pluck('name');
     


        $data['program']=config('app.name');
        $data['version']='1.0';
        $data['release']='1';
        $data['datetime']=Carbon::now();
        $data['timestamp']=Carbon::now()->timestamp;
        $data['status']='success';
        $data['code']=200;
        $data['message']='OK';
        return response()->json($data);
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

        $data['program']=config('app.name');
        $data['version']='1.0';
        $data['release']='1';
        $data['datetime']=Carbon::now();
        $data['timestamp']=Carbon::now()->timestamp;
        $data['status']='success';
        $data['code']=200;
        $data['message']='OK';
        return response()->json($data);
     }

    public function destroy($id)
    {
        FileTagManager::find($id)->delete();
        $data['program']=config('app.name');
        $data['version']='1.0';
        $data['release']='1';
        $data['datetime']=Carbon::now();
        $data['timestamp']=Carbon::now()->timestamp;
        $data['status']='success';
        $data['code']=200;
        $data['message']='OK';
        return response()->json($data);
    }
}
