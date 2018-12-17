<?php

namespace App\Http\Controllers\CRM;
// use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ContactResources;
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
        $res = $client->request('GET', 'http://localhost:8002/api/v1/contacts');
        $contactJson=$res->getBody();
        $contact = json_decode($contactJson, true);
        $contactData['dataArray']=$contact;
        return view('CRM.Contact.listContact')->with('contactdata', $contactData);

    }



       public function create()
    {
        
        return view('CRM.Contact.createContact');

     }


     public function store(Request $request)

     {  

                    $client = new Client();
                    $response = $client->request('POST', 'http://localhost:8002/api/v1/contacts', [
                    'form_params' => [
                    'contact_type' => $request->contact_type,
                    'contact_name' => $request->contact_name,
                    'contact_email '=> $request->contact_email,
                    'contact_mobileNo' => $request->contact_mobileNo,
                    'contact_landlineNo' => $request->contact_landlineNo,
                    'contact_companyID' => $request->contact_companyID,
                    'contact_companyName' => $request->contact_companyName,
                    'contact_designation' => $request->contact_designation
                    ]
                ]);
                return redirect('/contact');
                
        // $contact = new Contact;
        // $contact->contact_type = $request->contact_type;
        // $contact->contact_name = $request->contact_name;
        // $contact->contact_email = $request->contact_email;
        // $contact->contact_mobileNo = $request->contact_mobileNo;
        // $contact->contact_landlineNo = $request->contact_landlineNo;
        // $contact->contact_companyID = $request->contact_companyID;
        // $contact->contact_companyName = $request->contact_companyName;
        // $contact->contact_designation = $request->contact_designation;
        // $contact->save();
        // return response()->json($contact);
 
     }
     
     public function show($id)

     {
         $contact = Contact::find($id);
         return response()->json($contact);
         
     }


      public function edit(Contact $contact)

    {
         return view('CRM.Contact.editContact');
    }

     public function update(Request $request, $id)

     {  
         $client = new Client();
        $response = $client->request('PUT', "http://localhost:8002/api/v1/contacts".$id, [
                    'form_params' => [
                    'contact_type' => $request->contact_type,
                    'contact_name' => $request->contact_name,
                    'contact_email '=> $request->contact_email,
                    'contact_mobileNo' => $request->contact_mobileNo,
                    'contact_landlineNo' => $request->contact_landlineNo,
                    'contact_companyID' => $request->contact_companyID,
                    'contact_companyName' => $request->contact_companyName,
                    'contact_designation' => $request->contact_designation
                    ]
    ]);
        return response()->json(['success'=>'200']);
       
     }


   public function destroy($id)

    {
        $client = new Client();
        $res = $client->request('DELETE', 'http://localhost:8002/api/v1/contacts'.$id);
        return redirect('/contact');
    }



     
    }
