<?php

namespace App\Http\Controllers\CRM;

// use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ContactResources;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client;


class ContactController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()

    {
     
        $client = new Client();
        $res = $client->request('GET', 'http://localhost:8002/api/v1/contact');
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
                    $response = $client->request('POST', 'http://localhost:8002/api/v1/contact', [
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
        $res = $client->request('GET', 'http://localhost:8002/api/v1/contact/'.$id);
        $contactJson=$res->getBody();
        $contact = json_decode($contactJson, true);
        $data['contact']=$contact;
        return view('CRM.Contact.showContact',['data'=>$data]);
         
     }


      public function edit($id)

    {

        $client = new Client();
        $res = $client->request('GET', 'http://localhost:8002/api/v1/contact/'.$id);
        $contactJson=$res->getBody();
        $contact = json_decode($contactJson, true);
        $data['contact']=$contact;
        return view('CRM.Contact.editContact',['data'=>$data]);
    }



     public function update(Request $request, $id)

     {  
         $client = new Client();
        $response = $client->request('PUT', "http://localhost:8002/api/v1/contact/".$id, [
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
        $res = $client->request('DELETE', 'http://localhost:8002/api/v1/contact/'.$id);
        return redirect('/contact');
    }

   
    }
