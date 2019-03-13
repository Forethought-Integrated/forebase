<?php

namespace App\Http\Controllers\CRM;

// use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ContactResources;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client;
use Helper;
use App\Model\ServiceAuthorization;



class ContactController extends Controller
{

    private $ENV_URL;
    private $URL;
    private $ENV_AccountURL;
    private $AccountURL;
    private $client;


    public function __construct()
    {
        $this->ENV_URL = config('customServices.services.crm');
        $this->URL=$this->ENV_URL.'contact';    
        $this->ENV_AccountURL = config('customServices.services.crm');

        $this->AccountURL=$this->ENV_AccountURL.'account'; 
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
        $contactJson=$res->getBody();
        $contact = json_decode($contactJson, true);
        $data['contact']=$contact;
        $data['fileModalTitle']='File Upload';
        $data['fileUrl']=url('/contact/uploadFile');
        return view('CRM.Contact.listContact')->with('data', $data);
    }


    public function create()
    {
        return view('CRM.Contact.createContact');
    }

    // public function createContactAccount($accountID)
    // {
    //     $client = new Client();
    //     $res = $client->request('GET', $this->AccountURL.'/'.$accountID);
    //     $accountJson=$res->getBody();
    //     $account = json_decode($accountJson, true);
    //     // $accountData['dataArray']=$account;
    //     $data['account']=$account;
    //     // return $data;
    //     return view('CRM.Contact.createContactAccount',compact('data'));
    // }


    public function indexContactAccount($accountID)
    {
        return 'fd0';
        $client = new Client();
        $res = $client->request('GET', $this->AccountURL.'/'.$accountID);
        $accountJson=$res->getBody();
        $account = json_decode($accountJson, true);
        // $accountData['dataArray']=$account;
        $data['account']=$account;
        // return $data;
        return view('CRM.Contact.createContactAccount',compact('data'));
    }


    public function store(Request $request)
    {  
      $client = new Client();
      $response = $client->request('POST', $this->URL, [
      'form_params' => [
      'contact_type' => $request->contactType,
      'contact_name' => $request->Name,
      'contact_mobileNo' => $request->MobileNo,
      'contact_landlineNo' => $request->LandlineNo,
      'contact_companyID' => $request->CompanyID,
      'contact_companyName' => $request->companyName,
      'contact_designation' => $request->designation
          ]
      ]);
      return redirect('/contact');
    }
     
     public function show($id)

     {
 
        $client = new Client();
        $res = $client->request('GET', $this->URL.'/'.$id);
        $contactJson=$res->getBody();
        $contact = json_decode($contactJson, true);
        $data['contact']=$contact;
        return view('CRM.Contact.showContact',['data'=>$data]);
         
     }


      public function edit($id)

    {

        $client = new Client();
        $res = $client->request('GET', $this->URL.'/'.$id);
        $contactJson=$res->getBody();
        $contact = json_decode($contactJson, true);
        $data['contact']=$contact;
        return view('CRM.Contact.editContact',['data'=>$data]);
    }



     public function update(Request $request, $id)

     {  
         $client = new Client();
        $response = $client->request('PUT', $this->URL.'/'.$id, [
                    'form_params' => [
                    'contact_type' => $request->contactType,
                    'contact_name' => $request->Name,
                    'contact_email' => $request->emailId,
                    'contact_mobileNo' => $request->MobileNo,
                    'contact_landlineNo' => $request->LandlineNo,
                    'contact_companyID' => $request->CompanyID,
                    'contact_companyName' => $request->companyName,
                    'contact_designation' => $request->designation
                    ]
    ]);
        // return response()->json(['success'=>'200']);
         return redirect('/contact');
       
     }


    public function destroy($id)
    {
        $client = new Client();
        $res = $client->request('DELETE', $this->URL.'/'.$id);
        return redirect('/contact');
    }

    public function importCsv(Request $request)
    {  
        // return $request->platform;
        // $dataMapperArray=dataMapper->where('')
        if($request->hasFile('file')){
            // $filePath Is the Path in storage where stored file is stored
            $filePath='/public/csv-upload/crm/contact';
            $storedFilePath=Helper::fileUpload($request,$filePath);

            $file= storage_path('app/'.$storedFilePath);
            return Helper::csvToArray($file);
            $dataArr = Helper::csvToArray($file);
            $client = new Client();
            foreach ($dataArr as $data) {
                $response = $client->request('POST', $this->URL, [
                       'form_params' => $data
                   ]);
            }
            return redirect('/contact');
        }
        else
        {
            return 'empty File';
        }
    }
}
