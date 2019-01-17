<?php

namespace App\Http\Controllers\Helpdesk;

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
        return view('helpdesk.card.listCard')->with('data',$data);

    }


      public function create()
    {
        
        return view('helpdesk.card.createCard');

     }

     public function store(request $request)

     { 
     // return "hello";
                    $client = new Client();
                    $response = $client->request('POST', $this->URL, [
                    'form_params' => [
                    'list_id' => $request->user()->id,
                    'name' => $request->name,
                    'description'=>$request->description,
                    'order' => $request->order,
                    'members' => $request->members,
                    'archieved' => $request->archieved,
                    ]
                ]);
                     // return "hello";
                    return redirect('/cards');
     }

     public function show($id)

     {      
        //return "hello";
        $client = new Client();
        $res = $client->request('GET',$this->URL.$id);
        $cardJson=$res->getBody();
        $card=json_decode($cardJson, true);        
        $data['cards']=$card;         

        return view('helpdesk.card.showCard',['data'=>$data]);
     }


     public function edit($id)
    {     

        
        $client = new Client();
        $res = $client->request('GET', $this->URL.$id);
        $cardJson=$res->getBody();
        $card = json_decode($cardJson, true);
        
        $data['cards']=$card;

       
        return view('helpdesk.card.editCard',['data'=>$data]);
    }



     public function update(Request $request, $id)

     {  
        $client = new Client();
        $response = $client->request('PUT', $this->URL.$id, [
                    'form_params' => [
                    //'owner_id' => $request->user()->id,
                    'list_id' => $request->list_id,
                    'name' => $request->name,
                    'description' => $request->description, 
                    'order' => $request->order, 
                    'members' => $request->members,
                    'archieved' => $request->archieved,                  
                    ]
        ]);
        // return response()->json(['success'=>'200']); 
         return redirect('/cards');       
     }

      public function destroy($id)

    {
        $client = new Client();
        $res = $client->request('DELETE', $this->URL.$id);
        return redirect('/cards');
    }


}


