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
     
      // $opportunities =Opportunity::all();
      // // return response()->json($opportunities);
      // return OpportunityResources::collection(Opportunity::paginate('2'));


        $client = new Client();
        $res = $client->request('GET', 'http://localhost:8002/api/v1/opportunities');
        $opportunityJson=$res->getBody();
        $opportunity = json_decode($opportunityJson, true);
        $opportunityData['dataArray']=$opportunity;
        return view('CRM.Opportunity.listOpportunity')->with('opportunitydata', $opportunityData);

    }





    
   public function create()
    {
        
        return view('CRM.Opportunity.createOpportunity');

     }


     public function store(Request $request)

     { 
                     $client = new Client();
                    $response = $client->request('POST', 'http://localhost:8002/api/v1/opportunities', [
                    'form_params' => [
                    'opportunity_deal_owner' => $request->opportunity_deal_owner,
                    'opportunity_deal_namer' => $request->opportunity_deal_name,
                    'opportunity_account_name' => $request->opportunity_account_name,
                    'opportunity_type'=> $request->opportunity_type,
                    'opportunity_lead_id' => $request->opportunity_lead_id,
                    'opportunity_campaign_id' => $request->opportunity_campaign_id,
                    'opportunity_contact_id' => $request->opportunity_contact_id,
                    'opportunity_amount' => $request->opportunity_amount,
                    'opportunity_closing_date' => $request->opportunity_closing_date,
                    'opportunity_stage' => $request->opportunity_stage,
                    'opportunity_probability' => $request->opportunity_probability,
                    'opportunity_expected_revenue' => $request->opportunity_expected_revenue,
                    'opportunity_description' => $request->opportunity_description
                    ]
                ]);
                    return redirect('/opportunity');

     }

     public function show($id)

     {
         $opportunity = Opportunity::find($id);
         return response()->json($opportunity);
     }

     public function edit(Opportunity $opportunity)


    {
        //
    }

        public function update(Request $request, $id)

     {  
        $client = new Client();
        $response = $client->request('PUT', "http://localhost:8002/api/v1/opportunities".$id, [
                    'form_params' => [
                    'opportunity_deal_owner' => $request->opportunity_deal_owner,
                    'opportunity_deal_namer' => $request->opportunity_deal_name,
                    'opportunity_account_name' => $request->opportunity_account_name,
                    'opportunity_type'=> $request->opportunity_type,
                    'opportunity_lead_id' => $request->opportunity_lead_id,
                    'opportunity_campaign_id' => $request->opportunity_campaign_id,
                    'opportunity_contact_id' => $request->opportunity_contact_id,
                    'opportunity_amount' => $request->opportunity_amount,
                    'opportunity_closing_date' => $request->opportunity_closing_date,
                    'opportunity_stage' => $request->opportunity_stage,
                    'opportunity_probability' => $request->opportunity_probability,
                    'opportunity_expected_revenue' => $request->opportunity_expected_revenue,
                    'opportunity_description' => $request->opportunity_description
                    ]
    ]);
        return response()->json(['success'=>'200']);        
     }

     public function destroy($id)

     {  

        $client = new Client();
        $res = $client->request('DELETE', 'http://localhost:8002/api/v1/opportunities'.$id);
        return redirect('/opportunity');
     }


   
}
