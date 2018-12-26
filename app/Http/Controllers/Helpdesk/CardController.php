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
        $this->URL=$this->ENV_URL.'boards/';    
                // $this->middleware('auth');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index($boardID,$userID,$listID)

    { 

        $client = new Client();
        $res = $client->request('GET', $this->URL.$boardID.'/'.$userID.'/'.'list'.'/'.$listID.'/'.'card');
        $cardJson=$res->getBody();
        $card = json_decode($cardJson, true);
        $data['card']=$card;
        $data['boardID']=$boardID;
        return view('helpdesk.card.listCard')->with('data', $data);

    }


      public function create($boardID,$userID,$listID)
     {
        $data['boardID']=$boardID;
        $data['listID']=$listID;
        return view('helpdesk.card.createCard')->with('data',$data);
     }

     public function store(Request $request,$boardID,$userID,$listID)

     { 
                    $client = new Client();
                    $response = $client->request('POST', $this->URL.$boardID.'/'.$userID.'/'.'list'.'/'.$listID.'/'.'card', [
                    'form_params' => [
                    'card_name' => $request->CardName,
                    'card_description' => $request->CardDescription,
                    ]
                ]);
                    return redirect('/board/'.$boardID.'/'.$userID.'/list/'.$listID.'/card/');
     }

     public function show($id)

     {


        $client = new Client();
        $res = $client->request('GET', 'http://localhost:8002/api/v1/card/'.$id);
        $cardJson=$res->getBody();
        $card = json_decode($cardJson, true);
        $data['card']=$card;
        return view('helpdesk.card.showcard',['data'=>$data]);
     }


     public function edit($id)
    {     
        $client = new Client();
        $res = $client->request('GET', 'http://localhost:8002/api/v1/card/'.$id);
        $cardJson=$res->getBody();
        $card = json_decode($cardJson, true);
        // $cardData['dataArray']=$card;
        $data['card']=$card;

        // $card = card::find($id);
        return view('helpdesk.card.editcard',['data'=>$data]);
    }



     public function update(Request $request, $id)

     {  
        $client = new Client();
        $response = $client->request('PUT', "http://localhost:8002/api/v1/card/".$id, [
                    'form_params' => [
                    'card_name' => $request->cardName,
                    'card_email' => $request->cardEmail,
                    'card_mobileNo '=> $request->cardMobileNo,
                    'card_landlineNo' => $request->cardLandlineNo,
                    'card_address' => $request->cardAddress,
                    'card_website' => $request->cardWebsite,
                    'card_city' => $request->cardCity,
                    'card_state' => $request->cardState,
                    'card_country' => $request->cardCountry,
                    'card_pincode' => $request->cardPincode,
                    'card_panNo' => $request->cardPanNo,
                    'card_GSTNo' => $request->cardGSTNo
                    ]
        ]);
        // return response()->json(['success'=>'200']); 
         return redirect('/card');       
     }

      public function destroy($id)

    {
        $client = new Client();
        $res = $client->request('DELETE', 'http://localhost:8002/api/v1/card/'.$id);
        return redirect('/card');
    }


}
