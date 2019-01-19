<?php

namespace App\Http\Controllers\Helpdesk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class BoardController extends Controller
{
    private $ENV_URL;

    private $URL;


    public function __construct()
    {
        $this->ENV_URL = env('API_HELPDESKURL');
        $this->URL=$this->ENV_URL.'boards/';     
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
        $boardJson=$res->getBody(); 
        $board = json_decode($boardJson, true);
        $data['boards']=$board;
        return view('helpdesk.board.listBoard')->with('data',$data);

    }


      public function create()
    {
        
        return view('helpdesk.board.createBoard');

     }

     public function store(request $request)

     { 
     // return "hello";
                    $client = new Client();
                    $response = $client->request('POST', $this->URL, [
                    'form_params' => [
                    'owner_id' => $request->user()->id,
                    'name' => $request->name,
                    'description'=>$request->description,
                    ]
                ]);
                     // return "hello";
                    return redirect('/boards');
     }

     public function show($id)

     {      
        //return "hello";
        $client = new Client();
        $res = $client->request('GET',$this->URL.$id);
        $boardJson=$res->getBody();
        $board=json_decode($boardJson, true);        
        $data['boards']=$board;         

        return view('helpdesk.board.showBoard',['data'=>$data]);
     }


     public function edit($id)
    {     

        
        $client = new Client();
        $res = $client->request('GET', $this->URL.$id);
        $boardJson=$res->getBody();
        $board = json_decode($boardJson, true);
        
        $data['boards']=$board;

       
        return view('helpdesk.board.editBoard',['data'=>$data]);
    }



     public function update(Request $request, $id)

     {  
        $client = new Client();
        $response = $client->request('PUT', $this->URL.$id, [
                    'form_params' => [
                    //'owner_id' => $request->user()->id,
                    'owner_id' => $request->user()->id,
                    'name' => $request->name,
                    'description' => $request->description,                    
                    ]
        ]);
        // return response()->json(['success'=>'200']); 
         return redirect('/boards');       
     }

      public function destroy($id)

    {
        //return "hello";
        $client = new Client();
        $res = $client->request('DELETE', $this->URL.$id);
        return redirect('/boards');
    }


}
