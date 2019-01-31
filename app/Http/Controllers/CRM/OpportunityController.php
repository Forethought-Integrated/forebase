<?php

namespace App\Http\Controllers\CRM;

// use App\Opportunity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\OpportunityResources;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client;

class OpportunityController extends Controller
{
    private $ENV_URL;
    private $URL;
    private $ENV_leadURL;
    private $leadURL;


    public function __construct()
    {
        $this->ENV_URL = env('API_CRMURL');
        $this->URL=$this->ENV_URL.'opportunity';
        $this->ENV_leadURL = env('API_CRMURL');
        $this->leadURL=$this->ENV_URL.'lead';    

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
        $opportunityJson=$res->getBody();
        $opportunity = json_decode($opportunityJson, true);
        $data['opportunity']=$opportunity;
        return view('CRM.Opportunity.listOpportunity')->with('data', $data);

    }

    
    public function create()
    {
        return view('CRM.Opportunity.createOpportunity');
    }
    
    
    public function createOpportunityLead($leadid)
    {
        // return 'hi';
        $client = new Client();
        $res = $client->request('GET', $this->leadURL.'/'.$leadid);
        $leadJson=$res->getBody();
        $lead = json_decode($leadJson, true);
        $data['lead']=$lead;

        return view('CRM.Opportunity.createOpportunityLead',compact('data'));
    }

     public function store(Request $request)

     { 
                    $client = new Client();
                    $response = $client->request('POST', $this->URL, [
                    'form_params' => [
                    'opportunity_deal_owner' => $request->dealOwner,
                    'opportunity_deal_name' => $request->dealName,
                    'opportunity_account_name' => $request->AccountName,
                    'opportunity_type'=> $request->Type,
                    'opportunity_lead_id' => $request->leadID,
                    'opportunity_campaign_id' => $request->campaignID,
                    'opportunity_contact_id' => $request->contactID,
                    'opportunity_amount' => $request->amount,
                    'opportunity_closing_date' => $request->closingDate,
                    'opportunity_stage' => $request->Satge,
                    'opportunity_probability' => $request->Probability,
                    'opportunity_expected_revenue' => $request->expectedRevenue,
                    'opportunity_description' => $request->expectedRevenue
                    ]
                ]);
                    return redirect('/opportunity');

     }

     public function show($id)

     {
        $client = new Client();
        $res = $client->request('GET', $this->URL.'/'.$id);
        $opportunityJson=$res->getBody();
        $opportunity = json_decode($opportunityJson, true);
        $data['opportunity']=$opportunity;
        return view('CRM.Opportunity.showOpportunity',['data'=>$data]);
     }


     public function edit($id)


    {
        $client = new Client();
        $res = $client->request('GET', $this->URL.'/'.$id);
        $opportunityJson=$res->getBody();
        $opportunity = json_decode($opportunityJson, true);
        $data['opportunity']=$opportunity;
        return view('CRM.Opportunity.editOpportunity',['data'=>$data]);
         
    }

        public function update(Request $request, $id)

     {  
        $client = new Client();
        $response = $client->request('PUT', $this->URL.'/'.$id, [
                    'form_params' => [
                    'opportunity_deal_owner' => $request->dealOwner,
                    'opportunity_deal_name' => $request->dealName,
                    'opportunity_account_name' => $request->AccountName,
                    'opportunity_type'=> $request->Type,
                    'opportunity_lead_id' => $request->leadID,
                    'opportunity_campaign_id' => $request->campaignID,
                    'opportunity_contact_id' => $request->contactID,
                    'opportunity_amount' => $request->amount,
                    'opportunity_closing_date' => $request->closingDate,
                    'opportunity_stage' => $request->Satge,
                    'opportunity_probability' => $request->Probability,
                    'opportunity_expected_revenue' => $request->expectedRevenue,
                    'opportunity_description' => $request->expectedRevenue
                    ]
    ]);
        // return response()->json(['success'=>'200']);   
        return redirect('/opportunity');     
     }

     public function destroy($id)

     {  

        $client = new Client();
        $res = $client->request('DELETE', $this->URL.'/'.$id);
        return redirect('/opportunity');
     }


   
}
