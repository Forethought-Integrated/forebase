<?php

namespace App\Http\Controllers\newhelp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class BoardController extends Controller
{
    private $ENV_URL;

    private $URL;
    private $URLList;
    private $URLCard;


    public function __construct()
    {
        $this->ENV_URL = env('API_HELPDESKURL');
        $this->URL=$this->ENV_URL.'boards/';     
        $this->URLList=$this->ENV_URL.'lists/';     
        $this->URLCard=$this->ENV_URL.'cards/';     
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
        $board = json_decode($boardJson,true);
        $data['boards']=$board;
        return view('bcl.board.listBoard')->with('data',$data);

    }


      public function create()
    {
        
        return view('bcl.board.createBoard');

     }

     public function store(request $request)

     { 
     //return "hello";
                    $client = new Client();
                    $response = $client->request('POST', $this->URL, [
                    'form_params' => [
                    'owner_id' => $request->user()->id,
                    'board_name' => $request->board_name,
                    'board_description'=>$request->board_description,
                    ]
                ]);
                     // return "hello";
                    return redirect('/boards');
     }

     public function show($id)
     {      
        $client = new Client();
        $res = $client->request('GET',$this->URL.$id);
        $boardJson=$res->getBody();
        $board=json_decode($boardJson,true);        
        $data['boards']=$board;  

        // $resList = $client->request('GET','http://localhost:8003/lists/'.$id);
        // $ListJson=$resList->getBody();
        // $List=json_decode($ListJson,true);
        // $data['lists']=$List; 
        // $data['cardList']=$board;  
      // return $data;


        return view('bcl.board.showBoard',['data'=>$data]);
     }

    // this method take selected board id and get selected board Detail , get all List Of that Board,
    // and Card Of First List  
    public function boardIndex($id)
    {  
        $client = new Client();
        // Get Board 
        $res = $client->request('GET',$this->URL.$id);
        $boardJson=$res->getBody();
        $board=json_decode($boardJson,true);        
        $data['board']=$board;  
        // return $data['boards']['board_id'];
        // Get List
        $resList = $client->request('GET','http://localhost:8003/board/list/'.$data['board']['board_id']);
        $listJson=$resList->getBody();
        $list=json_decode($listJson,true);
        if(empty($list))
        {
            // $data['list']=$list; 
            //  // Get all card of First List
            // $resCard = $client->request('GET','http://localhost:8003/board/list/card/'.$data['list']['0']['list_id']);
            // $cardJson=$resCard->getBody();
            // // return $listJson;
            // $card=json_decode($cardJson,true);
            // $data['card']=$card;

                        $data['list']=NULL; 
            $data['card']=NULL;

            return view('bcl.board.showBoard',['data'=>$data]);
        }
        else
        {
                $data['list']=$list; 
             // Get all card of First List
            $resCard = $client->request('GET','http://localhost:8003/board/list/card/'.$data['list']['0']['list_id']);
            $cardJson=$resCard->getBody();
            $card=json_decode($cardJson,true);
            $data['card']=$card;

            // $data['list']=NULL; 
            // $data['card']=NULL;
            return view('bcl.board.showBoard',['data'=>$data]);
        }
        // if()
        // return $listJson;
        // if($resList==null)
        // {
        //     // return $list;

        //    return $list;
        // }
        // else
        // {
        //     return  $data;
        //     //return 'hiisasa';
        // }
        // if (empty($resList) || count($resList)==0)
        // {
        //     return back()->withError('there is no list!');
        // }

        // $list=json_decode($listJson,true);
        // return $data['lists']['0']['list_id'];

        
    }

    // 
    public function boardListCardIndex($id,$listid)
    {  
        // return 'hio';    
        $client = new Client();
        $resCard = $client->request('GET','http://localhost:8003/board/list/card/'.$listid);
        $cardJson=$resCard->getBody();
        // return $listJson;
        // return $cardJson;
        // return response()->json($cardJson);

        $card=json_decode($cardJson,true);
        // return $card;
        // return response()->json($card);

        $data['card']=$card;
        return $data;
        //return response()->json($data);
         // return $data['card'];
        // $data['cardList']=$board;  
      // return $data;


        // return view('bcl.board.showBoard',['data'=>$data]);
    }



    public function edit($id)
    {     

        
        $client = new Client();
        $res = $client->request('GET', $this->URL.$id);
        $boardJson=$res->getBody();
        $board = json_decode($boardJson, true);
        
        $data['boards']=$board;

       
        return view('bcl.board.editBoard',['data'=>$data]);
    }



     public function update(Request $request, $id)

     {  
        $client = new Client();
        $response = $client->request('PUT', $this->URL.$id, [
                    'form_params' => [
                    //'owner_id' => $request->user()->id,
                    'owner_id' => $request->user()->id,
                    'board_name' => $request->board_name,
                    'board_description' => $request->board_description,                    
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
