<?php 


namespace App\Http\Controllers\FolderIcon;

// use App\Http\Requests\MenuRequest;
use App\Model\FolderIcon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Storage;
use Helper;



class FolderIconController extends Controller
{
    
     function get_singel_data($id)
    {
        $data = DB::table('folder_icon_mapping')->where('id',$id)->first();
               
        return $data;
    }


    public function index()
    {
      $foldericons = DB::table('folder_icon_mapping')->paginate(10);

       return view('FolderIconMapping.listFolderIcon',['foldericons'=>$foldericons]);
    }
      
    
    public function create()
    {
         return view('FolderIconMapping.createFolderIcon');

    }

    public function store(Request $request)
    {  
      $folder='/public/files/shares';
      $storedFilePath=Helper::fileUpload($request,$folder);
      // dd($storedFilePath);
      $fileName=str_replace($folder.'/',"",'/'.$storedFilePath);
      // return $fileName;
      // $fileName=str_replace($request['folder'].'/',"",'/'.$storedFilePath);
       FolderIcon::create([
                    
                    'folder_name' => $request->folder_name,
                    'image' => $fileName,
                    'file_path'=>$storedFilePath,

                     ]);
                    return redirect('/foldericon');
    }

    public function show($id)
    {
      $foldericons= $this->get_singel_data($id);
       
        return view('FolderIconMapping.showFolderIcon',['foldericon'=>$foldericons]);
    }
    

    public function edit($id)
    {
       $foldericons = $this->get_singel_data($id);
            
        
         return view('FolderIconMapping.editFolderIcon',['foldericon'=>$foldericons]);


    }
    public function update(Request $request, $id)
    {
        
        $foldericons=FolderIcon::findOrFail($id);
        $foldericons->update($request->all());
        $foldericons->save();

         return redirect('/foldericon');
    }

    public function destroy($id) 
    {
       DB::table('folder_icon_mapping')->where('id','=',$id)->delete();

       
            return redirect('/foldericon');
    }
}
