<?php

namespace App\Http\Controllers\Helpdesk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class BoardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index()

    { 

        $client = new Client();
        $res = $client->request('GET', 'http://localhost:8002/api/v1/account');
        $accountJson=$res->getBody();
        $account = json_decode($accountJson, true);
        // $accountData['dataArray']=$account;
        // return view('CRM.Account.listAccount')->with('accountdata', $accountData);
        $data['account']=$account;
        return view('CRM.Account.listAccount')->with('data', $data);

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
                    return redirect('/account');
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
        
        // return view('CRM.Account.listAccount')->with('accountdata', $accountData);


        // $account = Account::where('id',$id);
        // return response()->json($account, 200);

        return view('CRM.Account.showAccount',['data'=>$data]);
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
        return view('CRM.Account.editAccount',['data'=>$data]);
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
        ]);<?php

namespace App\Http\Controllers\Helpdesk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class BoardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index()

    { 

        $client = new Client();
        $res = $client->request('GET', 'http://localhost:8002/api/v1/account');
        $accountJson=$res->getBody();
        $account = json_decode($accountJson, true);
        // $accountData['dataArray']=$account;
        // return view('CRM.Account.listAccount')->with('accountdata', $accountData);
        $data['account']=$account;
        return view('CRM.Account.listAccount')->with('data', $data);

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
                    return redirect('/account');
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
        
        // return view('CRM.Account.listAccount')->with('accountdata', $accountData);


        // $account = Account::where('id',$id);
        // return response()->json($account, 200);

        return view('CRM.Account.showAccount',['data'=>$data]);
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
        return view('CRM.Account.editAccount',['data'=>$data]);
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
<?php

namespace App\Http\Controllers\Helpdesk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class BoardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index()

    { 

        $client = new Client();
        $res = $client->request('GET', 'http://localhost:8002/api/v1/account');
        $accountJson=$res->getBody();
        $account = json_decode($accountJson, true);
        // $accountData['dataArray']=$account;
        // return view('CRM.Account.listAccount')->with('accountdata', $accountData);
        $data['account']=$account;
        return view('CRM.Account.listAccount')->with('data', $data);

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
                    return redirect('/account');
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
        
        // return view('CRM.Account.listAccount')->with('accountdata', $accountData);


        // $account = Account::where('id',$id);
        // return response()->json($account, 200);

        return view('CRM.Account.showAccount',['data'=>$data]);
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
        return view('CRM.Account.editAccount',['data'=>$data]);
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
