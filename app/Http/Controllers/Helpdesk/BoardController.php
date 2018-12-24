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

    public function index($userID)

    { 
        $client = new Client();
        $res = $client->request('GET',  $this->URL.$userID);
        $boardJson=$res->getBody();
        $board = json_decode($boardJson, true);
        $data['board']=$board;
        return view('helpdesk.board.listBoard')->with('data', $data);

    }


      public function create()
    {
        
        return view('helpdesk.board.createBoard');

     }

     public function store(Request $request)

     { 
                    $client = new Client();
                    $response = $client->request('POST', 'http://localhost:8002/api/v1/account', [
                    'form_params' => [
                    'account_name' => $request->accountName,
                    'account_email' => $request->accountEmail,
                    'account_mobileNo'=> $request->accountMobileNo,
                    'account_landlineNo' => $request->accountLandlineNo,
                    'account_address' => $request->accountAddress,
                    'account_website' => $request->accountWebsite,
                    'account_city' => $request->accountCity,
                    'account_state' => $request->accountState,
                    'account_country' => $request->accountCountry,
                    'account_pincode' => $request->accountPinCode,
                    'account_panNo' => $request->accountPanNo,
                    'account_GSTNo' => $request->accountGSTNo
                    ]
                ]);
                    return redirect('/board');
     }

     public function show($id)

     {


        $client = new Client();
        $res = $client->request('GET', 'http://localhost:8002/api/v1/account/'.$id);
        $accountJson=$res->getBody();
        $account = json_decode($accountJson, true);
        // $accountData['dataArray']=$account;
        $data['account']=$account;


        // return view('social.socialjson',['posts' => $accountData]);
        
        // return view('helpdesk.board.listAccount')->with('accountdata', $accountData);


        // $account = Account::where('id',$id);
        // return response()->json($account, 200);

        return view('helpdesk.board.showAccount',['data'=>$data]);
     }


     public function edit($id)
    {     
        $client = new Client();
        $res = $client->request('GET', 'http://localhost:8002/api/v1/account/'.$id);
        $accountJson=$res->getBody();
        $account = json_decode($accountJson, true);
        // $accountData['dataArray']=$account;
        $data['account']=$account;

        // $account = Account::find($id);
        return view('helpdesk.board.editAccount',['data'=>$data]);
    }



     public function update(Request $request, $id)

     {  
        $client = new Client();
        $response = $client->request('PUT', "http://localhost:8002/api/v1/account/".$id, [
                    'form_params' => [
                    'account_name' => $request->accountName,
                    'account_email' => $request->accountEmail,
                    'account_mobileNo '=> $request->accountMobileNo,
                    'account_landlineNo' => $request->accountLandlineNo,
                    'account_address' => $request->accountAddress,
                    'account_website' => $request->accountWebsite,
                    'account_city' => $request->accountCity,
                    'account_state' => $request->accountState,
                    'account_country' => $request->accountCountry,
                    'account_pincode' => $request->accountPincode,
                    'account_panNo' => $request->accountPanNo,
                    'account_GSTNo' => $request->accountGSTNo
                    ]
        ]);
        // return response()->json(['success'=>'200']); 
         return redirect('/account');       
     }

      public function destroy($id)

    {
        $client = new Client();
        $res = $client->request('DELETE', 'http://localhost:8002/api/v1/account/'.$id);
        return redirect('/account');
    }


}
