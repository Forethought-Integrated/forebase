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
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  

    public function index()

    {
     
        $client = new Client();
        $res = $client->request('GET', 'http://localhost:8002/api/v1/opportunity');
        $opportunityJson=$res->getBody();
        $opportunity = json_decode($opportunityJson, true);
        $data['opportunity']=$opportunity;
        return view('CRM.Opportunity.listOpportunity')->with('data', $data);

    }

    
   public function create()
    {
        
        return view('CRM.Opportunity.createOpportunity');

     }


     public function store(Request $request)

     { 
                    $client = new Client();
                    $response = $client->request('POST', 'http://localhost:8002/api/v1/opportunity', [
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
        $res = $client->request('GET', 'http://localhost:8002/api/v1/opportunity/' .$id);
        $opportunityJson=$res->getBody();
        $opportunity = json_decode($opportunityJson, true);
        $data['opportunity']=$opportunity;
        return view('CRM.Opportunity.showOpportunity',['data'=>$data]);
     }


     public function edit($id)


    {
        $client = new Client();
        $res = $client->request('GET', 'http://localhost:8002/api/v1/opportunity/' .$id);
        $opportunityJson=$res->getBody();
        $opportunity = json_decode($opportunityJson, true);
        $data['opportunity']=$opportunity;
        return view('CRM.Opportunity.editOpportunity',['data'=>$data]);
         
    }

        public function update(Request $request, $id)

     {  
        $client = new Client();
        $response = $client->request('PUT', "http://localhost:8002/api/v1/opportunity/".$id, [
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
        $res = $client->request('DELETE', 'http://localhost:8002/api/v1/opportunity/'.$id);
        return redirect('/opportunity');
     }


   
}
