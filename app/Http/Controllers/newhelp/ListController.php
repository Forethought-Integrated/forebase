<?php

namespace App\Http\Controllers\newhelp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class ListController extends Controller
{
    private $ENV_URL;

    private $URL;


    public function __construct()
    {
        $this->ENV_URL = env('API_HELPDESKURL');
        $this->URL=$this->ENV_URL.'lists/';     
                // $this->middleware('auth');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index()
 
    { 
        $client = new Client();
        $res = $client->request('GET',  $this->URL);
        $listJson=$res->getBody(); 
        $list = json_decode($listJson, true);
        $data['lists']=$list;
        return view('bcl.list.listList')->with('data',$data);

    }


      public function create()
    {
        $data['list']=User::select('id','name')->get();
        //$User = User::where('list_name',$user->id)->first();
        return view('bcl.list.createList');

     }

     public function store(request $request)

     { 
     // return "hello";
                    $client = new Client();
                    $response = $client->request('POST', $this->URL, [
                    'form_params' => [
                    'board_id' => $request->user()->id,
                    'name' => $request->name,                    
                    'order' => $request->order,                    
                    'archieved' => $request->archieved,
                    ]
                ]);
                     // return "hello";
                    return redirect('/lists');
     }

     public function show($id)

     {      
        //return "hello";
        $client = new Client();
        $res = $client->request('GET',$this->URL.$id);
        $listJson=$res->getBody();
        $list=json_decode($listJson, true);        
        $data['lists']=$list;         

        return view('bcl.list.showList',['data'=>$data]);
     }


     public function edit($id)
    {     

        
        $client = new Client();
        $res = $client->request('GET', $this->URL.$id);
        $listJson=$res->getBody();
        $list = json_decode($listJson, true);
        
        $data['lists']=$list;

       
        return view('bcl.list.editList',['data'=>$data]);
    }



     public function update(Request $request, $id)

     {  
        $client = new Client();
        $response = $client->request('PUT', $this->URL.$id, [
                    'form_params' => [
                    //'owner_id' => $request->user()->id,
                    'board_id' => $request->board_id,
                    'name' => $request->name,                     
                    'order' => $request->order,                     
                    'archieved' => $request->archieved,                  
                    ]
        ]);
        // return response()->json(['success'=>'200']); 
         return redirect('/lists');       
     }

      public function destroy($id)

    {
        $client = new Client();
        $res = $client->request('DELETE', $this->URL.$id);
        return redirect('/lists');
    }


}


