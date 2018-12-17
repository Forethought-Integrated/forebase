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

     public function store(Request $request)

     { 
                     $client = new Client();
                    $response = $client->request('POST', 'http://localhost:8002/api/v1/opportunities', [
                    'form_params' => [
                    'opportunities_deal_owner' => $request->opportunities_deal_owner,
                    'opportunities_account_name' => $request->opportunities_account_name,
                    'opportunities_type'=> $request->opportunities_type,
                    'opportunities_lead_id' => $request->opportunities_lead_id,
                    'opportunities_campaign_id' => $request->opportunities_campaign_id,
                    'opportunities_contact_id' => $request->opportunities_contact_id,
                    'opportunities_amount' => $request->opportunities_amount,
                    'opportunities_closing_date' => $request->opportunities_closing_date,
                    'opportunities_stage' => $request->opportunities_stage,
                    'opportunities_probability' => $request->opportunities_probability,
                    'opportunities_expected_revenue' => $request->opportunities_expected_revenue,
                    'opportunities_description' => $request->opportunities_description
                    ]
                ]);
                    return redirect('/opportunity');

     }


     public function show($id)

     {
         $opportunity = Opportunity::find($id);
         return response()->json($opportunity);
     }

     public function edit(Lead $lead)


    {
        //
    }

        public function update(Request $request, $id)

     {  
        $client = new Client();
        $response = $client->request('PUT', "http://localhost:8002/api/v1/opportunities".$id, [
                    'form_params' => [
                    'opportunities_deal_owner' => $request->opportunities_deal_owner,
                    'opportunities_account_name' => $request->opportunities_account_name,
                    'opportunities_type'=> $request->opportunities_type,
                    'opportunities_lead_id' => $request->opportunities_lead_id,
                    'opportunities_campaign_id' => $request->opportunities_campaign_id,
                    'opportunities_contact_id' => $request->opportunities_contact_id,
                    'opportunities_amount' => $request->opportunities_amount,
                    'opportunities_closing_date' => $request->opportunities_closing_date,
                    'opportunities_stage' => $request->opportunities_stage,
                    'opportunities_probability' => $request->opportunities_probability,
                    'opportunities_expected_revenue' => $request->opportunities_expected_revenue,
                    'opportunities_description' => $request->opportunities_description
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
