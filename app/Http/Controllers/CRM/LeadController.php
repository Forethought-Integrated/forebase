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
    private $ENV_URL;
    private $URL;
    private $ENV_AccountURL;
    private $AccountURL;
    private $ENV_ContactURL;
    private $ContactURL;

    public function __construct()
    {
        $this->ENV_URL = env('API_CRMURL');
        $this->URL=$this->ENV_URL.'lead';  
        $this->ENV_AccountURL = env('API_CRMURL');
        $this->AccountURL=$this->ENV_AccountURL.'account';
        $this->ENV_ContactURL = env('API_CRMURL');
        $this->ContactURL=$this->ENV_ContactURL.'contact';  

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
        $leadJson=$res->getBody();
        $lead = json_decode($leadJson, true);
        $data['lead']=$lead;
        return view('CRM.Lead.listLead')->with('data', $data);

    }

    public function create()
    {
        
        return view('CRM.Lead.createLead');

    }

    public function createLeadContactAccount($contactid,$accountid)
    {
        // return 'hi0';
       $client = new Client();
        $res = $client->request('GET', $this->ContactURL.'/'.$contactid);
        $contactJson=$res->getBody();
        $contact = json_decode($contactJson, true);
        $data['contact']=$contact;
        $res = $client->request('GET', $this->AccountURL.'/'.$accountid);
        $accountJson=$res->getBody();
        $account = json_decode($accountJson, true);
        $data['account']=$account;
        // return $data;
        return view('CRM.Lead.createLeadContactAccount',compact('data'));

    }

    public function indexLeadContactAccount($contactid,$accountid)
    {
        // return 'hi0';
        $client = new Client();
        $res = $client->request('GET',$this->URL.'/'.$contactid.'/'.$accountid);
        $leadJson=$res->getBody();
        $lead = json_decode($leadJson, true);
        $data['lead']=$lead;
        // return view('CRM.Lead.listLead')->with('data', $data);
        return view('CRM.Lead.listLeadContactAccount',compact('data'));

    }


     public function store(Request $request)

     { 

        $client = new Client();
        $response = $client->request('POST', $this->URL, [
            'form_params' => [
            'lead_service_code' => $request->serviceCode,
            'lead_name' => $request->Name,
            'lead_designation' => $request->designation,
            'lead_companyName' => $request->companyName,
            'lead_email' => $request->Email,
            'lead_mobileNo' => $request->mobileNo,
            'lead_landlineNo' => $request->landLineNo,
            'lead_address' => $request->Address,
            'lead_city' => $request->City,
            'lead_state' => $request->State,
            'lead_country' => $request->Country,
            'lead_pincode' => $request->PinCode,
            'lead_utm_website_url' => $request->UTMWebsiteURL,
            'lead_utm_campaign_source' => $request->UTMCampaignSource,
            'lead_utm_campaign_medium' => $request->UTMCampaignMedium,
            'lead_utm_campaign_name' => $request->UTMCampaignName,
            'lead_utm_campaign_term' => $request->UTMCampaignTerm,
            'lead_utm_campaign_content' => $request->UTMCampaignContent,
            'lead_activity' => $request->Activity,
            'lead_Status' => $request->LeadStatus,
            'lead_Status_Inormation' => $request->StatusInformation,
            'lead_Source' => $request->Source,
            'lead_Source_Inormation' => $request->SourceInformation,
            'lead_Created_By_Code' => $request->CreatedByCode,
            'lead_Amount_Currrency' => $request->amountCurrency,
            'lead_total' => $request->Total,
            'lead_Currency' => $request->Currency,
            'lead_Location' => $request->Location,
            'lead_contact_id' => $request->contactID,
            'lead_account_id' => $request->accountID,
            ]
        ]);
        return redirect('/lead');

     }

     public function show($id)

     {
        $client = new Client();
        $res = $client->request('GET', $this->URL.'/'.$id);
        $leadJson=$res->getBody();
        $lead = json_decode($leadJson, true);
        $data['lead']=$lead;
        return view('CRM.Lead.showLead',['data'=>$data]);

    
     }

     public function edit($id)


    {
        $client = new Client();
        $res = $client->request('GET', $this->URL.'/'.$id);
        $leadJson=$res->getBody();
        $lead = json_decode($leadJson, true);
        $data['lead']=$lead;
        return view('CRM.Lead.editLead',['data'=>$data]);
    }


        public function update(Request $request, $id)

     {  
        $client = new Client();
        $response = $client->request('PUT', $this->URL.'/'.$id, [
                    'form_params' => [
                    'lead_service_code' => $request->serviceCode,
                    'lead_name' => $request->Name,
                    'lead_designation' => $request->designation,
                    'lead_companyName' => $request->companyName,
                    'lead_email' => $request->Email,
                    'lead_mobileNo' => $request->mobileNo,
                    'lead_landlineNo' => $request->landLineNo,
                    'lead_address' => $request->Address,
                    'lead_city' => $request->City,
                    'lead_state' => $request->State,
                    'lead_country' => $request->Country,
                    'lead_pincode' => $request->PinCode,
                    'lead_utm_website_url' => $request->UTMWebsiteURL,
                    'lead_utm_campaign_source' => $request->UTMCampaignSource,
                    'lead_utm_campaign_medium' => $request->UTMCampaignMedium,
                    'lead_utm_campaign_name' => $request->UTMCampaignName,
                    'lead_utm_campaign_term' => $request->UTMCampaignTerm,
                    'lead_utm_campaign_content' => $request->UTMCampaignContent,
                    'lead_activity' => $request->Activity,
                    'lead_Status' => $request->LeadStatus,
                    'lead_Status_Inormation' => $request->StatusInformation,
                    'lead_Source' => $request->Source,
                    'lead_Source_Inormation' => $request->SourceInformation,
                    'lead_Created_By_Code' => $request->CreatedByCode,
                    'lead_Amount_Currrency' => $request->amountCurrency,
                    'lead_total' => $request->Total,
                    'lead_Currency' => $request->Currency,
                    'lead_Location' => $request->Location
                    ]
    ]);
        // return response()->json(['success'=>'200']);  
        return redirect('/lead');        
     }

     

     public function destroy($id)

     {  
        $client = new Client();
        $res = $client->request('DELETE', $this->URL.'/'.$id);
        return redirect('/lead');
     }

}
