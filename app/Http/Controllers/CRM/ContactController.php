<?php

namespace App\Http\Controllers\CRM;

// use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ContactResources;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client;
use Helper;


class ContactController extends Controller
{

    private $ENV_URL;

    private $URL;


    public function __construct()
    {
        $this->ENV_URL = env('API_CRMURL');
        $this->URL=$this->ENV_URL.'contact';    
    }
    

 
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()

    {
     
        $client = new Client();
        $res = $client->request('GET', $this->URL);
        $contactJson=$res->getBody();
        $contact = json_decode($contactJson, true);
        $data['contact']=$contact;
        return view('CRM.Contact.listContact')->with('data', $data);

    }


       public function create()
    {
        
        return view('CRM.Contact.createContact');

     }


     public function store(Request $request)
     {  

                    $client = new Client();
                    $response = $client->request('POST', $this->URL, [
                    'form_params' => [
                    'contact_type' => $request->contactType,
                    'contact_name' => $request->Name,
                    'contact_email '=> $request->emailId,
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
                    'contact_email '=> $request->emailId,
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
        if($request->hasFile('file')){
            // $filePath Is the Path in storage where stored file is stored
            $filePath='/public/vikram';
            $storedFilePath=Helper::fileUpload($request,$filePath);

            $file= storage_path('app/'.$storedFilePath);
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
