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
        $res = $client->request('GET', 'http://localhost:8002/api/v1/campaign');
        $campaignJson=$res->getBody();
        $campaign = json_decode($campaignJson, true);
        // $campaignData['dataArray']=$campaign;
        $data['campaign']=$campaign;
        return view('CRM.Campaign.listCampaign')->with('data', $data);

    }



      public function create()
    {
        
        return view('CRM.Campaign.createCampaign');

     }

     public function store(Request $request)

     {
                    $client = new Client();
                    $response = $client->request('POST', 'http://localhost:8002/api/v1/campaign', [
                    'form_params' => [
                    'campaign_name' => $request->Name,
                    'campaign_type' => $request->Type,
                    'campaign_description '=> $request->description,
                    'campaign_startDate' => $request->startDate,
                    'campaign_endDate' => $request->endDate,
                    'campaign_budgetCost' => $request->budgetCost,
                    'utm_website_url' => $request->utmWebsiteUrl,
                    'utm_campaign_source' => $request->utmCampaignSource,
                    'utm_Campaign_Medium' => $request->utmCampaignMedium,
                    'utm_campaign_name' => $request->utmCampaignName,
                    'utm_campaign_term' => $request->utmCampaignTerm,
                    'utm_campaign_content' => $request->utmCampaignContent
                    ]
                ]);
                return redirect('/campaign');
     }


     public function show($id)

     {

        $client = new Client();
        $res = $client->request('GET', 'http://localhost:8002/api/v1/campaign/'.$id);
        $campaignJson=$res->getBody();
        $campaign = json_decode($campaignJson, true);
        
         $data['campaign']=$campaign;

        return view('CRM.Campaign.showCampaign',['data'=>$data]);

     }




     public function edit($id)

    {
        $client = new Client();
        $res = $client->request('GET', 'http://localhost:8002/api/v1/campaign/'.$id);
        $campaignJson=$res->getBody();
        $campaign = json_decode($campaignJson, true);
        
         $data['campaign']=$campaign;

        return view('CRM.Campaign.editCampaign',['data'=>$data]);
    }


     public function update(Request $request, $id)

     {  
        $client = new Client();
        $response = $client->request('PUT', "http://localhost:8002/api/v1/campaign/".$id, [
                    'form_params' => [
                    'campaign_name' => $request->campaignName,
                    'campaign_type' => $request->campaignType,
                    'campaign_description '=> $request->description,
                    'campaign_startDate' => $request->startDate,
                    'campaign_endDate' => $request->endDate,
                    'campaign_budgetCost' => $request->budgetCost,
                    'utm_website_url' => $request->utmWebsiteUrl,
                    'utm_campaign_source' => $request->utmCampaignSource,
                    'utm_Campaign_Medium' => $request->utmCampaignMedium,
                    'utm_campaign_name' => $request->utmCampaignName,
                    'utm_campaign_term' => $request->utmCampaignTerm,
                    'utm_campaign_content' => $request->utmCampaignContent
                    ]
    ]);
        // return response()->json(['success'=>'200']); 
        return redirect('/campaign');       
     }


         public function destroy($id)

    {
        $client = new Client();
        $res = $client->request('DELETE', 'http://localhost:8002/api/v1/campaign/'.$id);
        return redirect('/campaign');
    }


}
