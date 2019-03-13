<?php

namespace App\Http\Controllers\CRM;

// use App\Campaign;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CampaignResources;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client;
use App\Model\ServiceAuthorization;

class CampaignController extends Controller
{


    private $ENV_URL;

    private $URL;

    private $client;



    public function __construct()
    {
        $this->ENV_URL = config('customServices.services.crm');
        $this->URL=$this->ENV_URL.'campaign'; 
        $token=ServiceAuthorization::select('authorizations_token')->where('authorizations_client','crmapi')->first()->authorizations_token;
        $this->client = new Client(['headers' => ['Authorization' => 'Bearer '.$token]]);   

     
    }
    

    public function index()

    { 
        $res=$this->client->request('GET', $this->URL);
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
                    $response = $client->request('POST', $this->URL, [
                    'form_params' => [
                    'campaign_name' => $request->Name,
                    'campaign_type' => $request->Type,
                    'campaign_description' => $request->description,
                    'campaign_startDate' => $request->startDate,
                    'campaign_endDate' => $request->endDate,
                    'campaign_budgetCost' => $request->budgetCost,
                    'utm_website_url' => $request->utmWebsiteUrl,
                    'utm_campaign_source' => $request->utmCampaignSource,
                    'utm_Campaign_Medium' => $request->utmCampaignMedium,
                    'utm_campaign_name' => $request->utmCampaignName,
                    'utm_campaign_term' => $request->utmCampaignTerm,
                    'utm_campaign_content' => $request->utmCampaignContent,
                    'utm_campaign_url' => $request->utmCampaignUrl,
                    ]
                ]);
                return redirect('/campaign');
     }


     public function show($id)

     {

        $client = new Client();
        $res = $client->request('GET', $this->URL.'/'.$id);
        $campaignJson=$res->getBody();
        $campaign = json_decode($campaignJson, true);
        
         $data['campaign']=$campaign;

        return view('CRM.Campaign.showCampaign',['data'=>$data]);

     }




     public function edit($id)

    {
        $client = new Client();
        $res = $client->request('GET', $this->URL.'/'.$id);
        $campaignJson=$res->getBody();
        $campaign = json_decode($campaignJson, true);
        
         $data['campaign']=$campaign;

        return view('CRM.Campaign.editCampaign',['data'=>$data]);
    }


     public function update(Request $request, $id)

     {  
        $client = new Client();
        $response = $client->request('PUT', $this->URL.'/'.$id, [
                    'form_params' => [
                    'campaign_name' => $request->campaignName,
                    'campaign_type' => $request->campaignType,
                    'campaign_description' => $request->description,
                    'campaign_startDate' => $request->startDate,
                    'campaign_endDate' => $request->endDate,
                    'campaign_budgetCost' => $request->budgetCost,
                    'utm_website_url' => $request->utmWebsiteUrl,
                    'utm_campaign_source' => $request->utmCampaignSource,
                    'utm_Campaign_Medium' => $request->utmCampaignMedium,
                    'utm_campaign_name' => $request->utmCampaignName,
                    'utm_campaign_term' => $request->utmCampaignTerm,
                    'utm_campaign_content' => $request->utmCampaignContent,
                    'utm_campaign_url' => $request->utmCampaignUrl,
                    ]
    ]);
        // return response()->json(['success'=>'200']); 
        return redirect('/campaign');       
     }


         public function destroy($id)

    {
        $client = new Client();
        $res = $client->request('DELETE', $this->URL.'/'.$id);
        return redirect('/campaign');
    }


}
