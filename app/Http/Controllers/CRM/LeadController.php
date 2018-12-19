<?php

namespace App\Http\Controllers\CRM;

// use App\Lead;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\LeadResources;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client;

class LeadController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()

    {
        $client = new Client();
        $res = $client->request('GET', 'http://localhost:8002/api/v1/leads');
        $leadJson=$res->getBody();
        $lead = json_decode($leadJson, true);
        $leadData['dataArray']=$lead;
        return view('CRM.Lead.listLead')->with('leaddata', $leadData);

    }


      public function create()
    {
        
        return view('CRM.Lead.createLead');

     }


     public function store(Request $request)

     { 

                    $client = new Client();
                    $response = $client->request('POST', 'http://localhost:8002/api/v1/lead', [
                    'form_params' => [
                    'lead_service_code' => $request->lead_service_code,
                    'lead_name' => $request->lead_name,
                    'lead_designation' => $request->lead_designation,
                    'lead_companyName' => $request->lead_companyName,
                    'lead_email' => $request->lead_email,
                    'lead_mobileNo' => $request->lead_mobileNo,
                    'lead_landlineNo' => $request->lead_landlineNo,
                    'lead_address '=> $request->lead_address,
                    'lead_city' => $request->lead_city,
                    'lead_state' => $request->lead_state,
                    'lead_country' => $request->lead_country,
                    'lead_pincode' => $request->lead_pincode,
                    'lead_utm_website_url' => $request->lead_utm_website_url,
                    'lead_utm_campaign_source' => $request->lead_utm_campaign_source,
                    'lead_utm_campaign_medium' => $request->lead_utm_campaign_medium,
                    'lead_utm_campaign_name' => $request->lead_utm_campaign_name,
                    'lead_utm_campaign_term' => $request->lead_utm_campaign_term,
                    'lead_utm_campaign_content' => $request->lead_utm_campaign_content,
                    'lead_activity' => $request->lead_activity,
                    'lead_Status' => $request->lead_Status,
                    'lead_Status_Inormation' => $request->lead_Status_Inormation,
                    'lead_Source' => $request->lead_Source,
                    'lead_Source_Inormation' => $request->lead_Source_Inormation,
                    'lead_Created_By_Code' => $request->lead_Created_By_Code,
                    'lead_Amount_Currrency' => $request->lead_Amount_Currrency,
                    'lead_total' => $request->lead_total,
                    'lead_Currency' => $request->lead_Currency,
                    'lead_Location' => $request->lead_Location
                    ]
                ]);
                return redirect('/lead');

     }

     public function show($id)

     {
         $lead = Lead::find($id);
         return response()->json($lead, 200);

    
     }

     public function edit(Lead $lead)


    {
       return view('CRM.Lead.editLead');
    }



        public function update(Request $request, $id)

     {  
        $client = new Client();
        $response = $client->request('PUT', "http://localhost:8002/api/v1/lead/{id}".$id, [
                    'form_params' => [
                    'lead_service_code' => $request->lead_service_code,
                    'lead_name' => $request->lead_name,
                    'lead_designation' => $request->lead_designation,
                    'lead_companyName' => $request->lead_companyNam,
                    'lead_email' => $request->lead_email,
                    'lead_mobileNo' => $request->lead_mobileNo,
                    'lead_landlineNo' => $request->lead_landlineNo,
                    'lead_address '=> $request->lead_address,
                    'lead_city' => $request->lead_city,
                    'lead_state' => $request->lead_state,
                    'lead_country' => $request->lead_country,
                    'lead_pincode' => $request->lead_pincode,
                    'lead_utm_website_url' => $request->lead_utm_website_url,
                    'lead_utm_campaign_source' => $request->lead_utm_campaign_source,
                    'lead_utm_campaign_medium' => $request->lead_utm_campaign_medium,
                    'lead_utm_campaign_name' => $request->lead_utm_campaign_name,
                    'lead_utm_campaign_term' => $request->lead_utm_campaign_term,
                    'lead_utm_campaign_content' => $request->lead_utm_campaign_content,
                    'lead_activity' => $request->lead_activity,
                    'lead_Status' => $request->lead_Status,
                    'lead_Status_Inormation' => $request->lead_Status_Inormation,
                    'lead_Source' => $request->lead_Source,
                    'lead_Source_Inormation' => $request->lead_Source_Inormation,
                    'lead_Created_By_Code' => $request->lead_Created_By_Code,
                    'lead_Amount_Currrency' => $request->lead_Amount_Currrency,
                    'lead_total' => $request->lead_total,
                    'lead_Currency' => $request->lead_Currency,
                    'lead_Location' => $request->lead_Location
                    ]
    ]);
        return response()->json(['success'=>'200']);        
     }

     

     public function destroy($id)

     {  
        $client = new Client();
        $res = $client->request('DELETE', 'http://localhost:8002/api/v1/lead/{id}'.$id);
        return redirect('/lead');
     }

}
