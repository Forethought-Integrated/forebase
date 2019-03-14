<?php

namespace App\Http\Controllers\CRM;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Helper;
use App\Model\DataMapper;
use App\Model\ServiceAuthorization;


class AccountController extends Controller
{
    private $ENV_URL;

    private $URL;

    private $client;
    


    public function __construct()
    {
        $this->ENV_URL = config('customServices.services.crm');
        $this->URL=$this->ENV_URL.'account';  
        $token=ServiceAuthorization::select('authorizations_token')->where('authorizations_client','crmapi')->first()->authorizations_token;
        $this->client = new Client(['headers' => ['Authorization' => 'Bearer '.$token]]);   
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index()
    { 
        $res = $this->client->request('GET', $this->URL);
        $accountJson=$res->getBody();
        $account = json_decode($accountJson, true);
        $data['account']=$account;
        $data['fileModalTitle']='File Upload';
        $data['fileUrl']=url('/account/uploadFile');
        return view('CRM.Account.listAccount',compact('data'));

    }

    public function indexAccountContact($accountid)
    { 
        $res = $this->client->request('GET', $this->URL.'/contact/'.$accountid);
        $accountJson=$res->getBody();
        $account = json_decode($accountJson, true);
        $data['contact']=$account;
        $data['fileModalTitle']='File Upload';
        $data['fileUrl']=url('/account/uploadFile');
        return view('CRM.Contact.listAccountContact',compact('data'));
    }

    public function createContactAccount($accountID)
    {
        $res = $this->client->request('GET', $this->URL.'/'.$accountID);
        $accountJson=$res->getBody();
        $account = json_decode($accountJson, true);
        $data['account']=$account;
        return view('CRM.Contact.createContactAccount',compact('data'));
    }


      public function create()
    {
        
        return view('CRM.Account.createAccount');

     }

     public function store(Request $request)

     { 
                    $response = $this->client->request('POST', $this->URL, [
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
        $res = $this->client->request('GET', $this->URL.'/'.$id);
        $accountJson=$res->getBody();
        $account = json_decode($accountJson, true);
        if(empty($account))
            return redirect('/account');
        else
            $data['account']=$account;
              

        return view('CRM.Account.showAccount',['data'=>$data]);
     }


     public function edit($id)
    {     
        $res = $this->client->request('GET', $this->URL.'/'.$id);
        $accountJson=$res->getBody();
        $account = json_decode($accountJson, true);
        $data['account']=$account;

        return view('CRM.Account.editAccount',['data'=>$data]);
    }



     public function update(Request $request, $id)

     {  
        $response = $this->client->request('PUT', $this->URL.'/'.$id, [
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
         return redirect('/account');       
     }

    public function destroy($id)
    {
        $res = $this->client->request('DELETE', $this->URL.'/'.$id);
        return redirect('/account');
    }

    public function importCsv(Request $request)
    {  
       

        if($request->hasFile('file')){
            // $filePath Is the Path in storage where stored file is stored
            $filePath='/public/csv-upload/crm/account';
            $storedFilePath=Helper::fileUpload($request,$filePath);

            $file= storage_path('app/'.$storedFilePath);
            // return  count(Helper::csvToArray($file));
            $dataArr = Helper::csvToArray($file);
            $client = new Client();
            foreach ($dataArr as $data) {
                $response = $client->request('POST', $this->URL, [
                       'form_params' => $data
                   ]);
            }
            return redirect('/account');
        }
        else
        {
            return 'empty File';
        }
    }


}
