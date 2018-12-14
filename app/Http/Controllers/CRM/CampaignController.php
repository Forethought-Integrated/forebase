<?php

namespace App\Http\Controllers\CRM;
// use App\Campaign;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CampaignResources;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client;

class CampaignController extends Controller
{
    
        public function index()

    { 

        $client = new Client();
        $res = $client->request('GET', 'http://localhost:8002/api/v1/campaigns');
        $campaignJson=$res->getBody();
        $campaign = json_decode($campaignJson, true);
        $campaignData['dataArray']=$campaign;
        return view('CRM.Campaign.listCampaign')->with('campaigndata', $campaignData);

    }


      public function create()
    {
        
        return view('CRM.Campaign.createCampaign');

     }

     public function store(Request $request)

     {
                    $client = new Client();
                    $response = $client->request('POST', 'http://localhost:8002/api/v1/campaigns', [
                    'form_params' => [
                    'campaign_name' => $request->campaign_name,
                    'campaign_type' => $request->campaign_type,
                    'campaign_description '=> $request->campaign_description,
                    'campaign_startDate' => $request->campaign_startDate,
                    'campaign_endDate' => $request->campaign_endDate,
                    'campaign_description' => $request->campaign_description,
                    'campaign_budgetCost' => $request->campaign_budgetCost,
                    'utm_website_url' => $request->utm_website_url,
                    'utm_campaign_source' => $request->utm_campaign_source,
                    'utm_Campaign_Medium' => $request->utm_Campaign_Medium,
                    'utm_campaign_name' => $request->utm_campaign_name,
                    'utm_campaign_term' => $request->utm_campaign_term,
                    'utm_campaign_term' => $request->utm_campaign_term,
                    'utm_campaign_content' => $request->utm_campaign_content
                    ]
                ]);
                return redirect('/campaign');
     }

     public function show($id)

     {
         $campaign = Campaign::find($id);
         return response()->json($campaign, 200);

     }



     public function edit(Campaign $campaign)


    {
        //
    }

     public function update(Request $request, $id)

     {  
        $client = new Client();
        $response = $client->request('PUT', "http://localhost:8002/api/v1/campaigns".$id, [
                    'form_params' => [
                    'campaign_name' => $request->campaign_name,
                    'campaign_type' => $request->campaign_type,
                    'campaign_description '=> $request->campaign_description,
                    'campaign_startDate' => $request->campaign_startDate,
                    'campaign_endDate' => $request->campaign_endDate,
                    'campaign_description' => $request->campaign_description,
                    'campaign_budgetCost' => $request->campaign_budgetCost,
                    'utm_website_url' => $request->utm_website_url,
                    'utm_campaign_source' => $request->utm_campaign_source,
                    'utm_Campaign_Medium' => $request->utm_Campaign_Medium,
                    'utm_campaign_name' => $request->utm_campaign_name,
                    'utm_campaign_term' => $request->utm_campaign_term,
                    'utm_campaign_term' => $request->utm_campaign_term,
                    'utm_campaign_content' => $request->utm_campaign_content
                    ]
    ]);
        return response()->json(['success'=>'200']);        
     }


         public function destroy($id)

    {
        $client = new Client();
        $res = $client->request('DELETE', 'http://localhost:8002/api/v1/campaigns'.$id);
        return redirect('/campaign');
    }


}
