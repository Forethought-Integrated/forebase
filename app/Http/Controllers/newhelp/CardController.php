<?php

namespace App\Http\Controllers\newhelp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class CardController extends Controller
{
    private $ENV_URL;

    private $URL;


    public function __construct()
    {
        $this->ENV_URL = env('API_HELPDESKURL');
        $this->URL=$this->ENV_URL.'cards/';     
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
        $cardJson=$res->getBody(); 
        $card = json_decode($cardJson, true);
        $data['cards']=$card;
        return view('bcl.card.listCard')->with('data',$data);
    }

   
    public function CardCreate($listid)
    {        
        $client = new Client();
        $res = $client->request('GET',env('API_HELPDESKURL').'lists/'.$listid);
        $listJson=$res->getBody();
        $list=json_decode($listJson, true);        
        $data['list']=$list;
        return view('bcl.card.createCard')->with('data',$data);
     }


    public function Create()
    {
        
        return view('bcl.card.createCard');

    }

     public function store(Request $request)

     { 
        $client = new Client();
        $response = $client->request('POST', $this->URL, [
        'form_params' => [
        'list_id' => $request->list_id,
        'card_name' => $request->card_name,
        'card_description'=>$request->card_description,
        'card_order' => $request->card_order,
        'card_members' => $request->card_members,
        'card_archieved' => $request->card_archieved,
        ]
  ]);
       // return "hello";
      return redirect("/board-detail/$request->board_id");
     }

     public function show($id)

     {      
        //return "hello";
        $client = new Client();
        $res = $client->request('GET',$this->URL.$id);
        $cardJson=$res->getBody();
        $card=json_decode($cardJson, true);        
        $data['cards']=$card;         

        return view('bcl.card.showCard',['data'=>$data]);
     }


     public function edit($id)
    {     

        
        $client = new Client();
        $res = $client->request('GET', $this->URL.$id);
        $cardJson=$res->getBody();
        $card = json_decode($cardJson, true);
        
        $data['cards']=$card;

       
        return view('bcl.card.editCard',['data'=>$data]);
    }



     public function update(Request $request,$id)

     {  
      // return $id;
       // return $request;
      // return $request->card_members;
        $client = new Client();
        $response = $client->request('PUT',$this->URL.$id, [
                    'form_params' => [
                   // 'owner_id' => $request->user()->id,
                   // 'list_id' => $request->list_id,
                    'card_name' => $request->card_name,
                    'card_description'=> $request->card_description, 
                    'card_order' => $request->card_order, 
                    'card_members' => $request->card_members,
                    'card_archieved' => $request->card_archieved,                  
                    ]
        ]);        
         // return redirect("/board-detail/$request->board_id");       
        return redirect()->back();       

     }

    public function destroy($id)
    {
        $client = new Client();
        $res = $client->request('DELETE', $this->URL.$id);
        return redirect()->back();       

        
    }

}


       