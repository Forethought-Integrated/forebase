<?php

namespace App\Http\Controllers\CRM;

// use App\Account;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\AccountResorces;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client;

class AccountController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index()

    { 

        $client = new Client();
        $res = $client->request('GET', 'http://localhost:8002/api/v1/accounts');
        $accountJson=$res->getBody();
        $account = json_decode($accountJson, true);
        $accountData['dataArray']=$account;
        return view('CRM.Account.listAccount')->with('accountdata', $accountData);

    }


      public function create()
    {
        
        return view('CRM.Account.createAccount');

     }

     public function store(Request $request)

     { 
                    $client = new Client();
                    $response = $client->request('POST', 'http://localhost:8002/api/v1/account', [
                    'form_params' => [
                    'account_name' => $request->account_name,
                    'account_email' => $request->account_email,
                    'account_mobileNo'=> $request->account_mobileNo,
                    'account_landlineNo' => $request->account_landlineNo,
                    'account_address' => $request->account_address,
                    'account_website' => $request->account_website,
                    'account_city' => $request->account_city,
                    'account_state' => $request->account_state,
                    'account_country' => $request->account_country,
                    'account_pincode' => $request->account_pincode,
                    'account_panNo' => $request->account_panNo,
                    'account_GSTNo' => $request->account_GSTNo
                    ]
                ]);
                    return redirect('/account');
     }

     public function show($id)

     {
        $account = Account::where('id',$id);
        // return response()->json($account, 200);

        return view('CRM.Account.showAccount',['account'=>$account]);
     }


     public function edit(Account $account)


    {
        $account = Account::find($id);
        return view('CRM.Account.editAccount',['account'=>$account]);
    }



     public function update(Request $request, $id)

     {  
        $client = new Client();
        $response = $client->request('PUT', "http://localhost:8002/api/v1/account/{id}".$id, [
                    'form_params' => [
                    'account_name' => $request->account_name,
                    'account_email' => $request->account_email,
                    'account_mobileNo '=> $request->account_mobileNo,
                    'account_landlineNo' => $request->account_landlineNo,
                    'account_address' => $request->account_address,
                    'account_website' => $request->account_website,
                    'account_city' => $request->account_city,
                    'account_state' => $request->account_state,
                    'account_country' => $request->account_country,
                    'account_pincode' => $request->account_pincode,
                    'account_panNo' => $request->account_panNo,
                    'account_GSTNo' => $request->account_GSTNo
                    ]
    ]);
        // return response()->json(['success'=>'200']); 
         return redirect('/account');       
     }

      public function destroy($id)

    {
        $client = new Client();
        $res = $client->request('DELETE', 'http://localhost:8002/api/v1/account/{id}'.$id);
        return redirect('/account');
    }


}
