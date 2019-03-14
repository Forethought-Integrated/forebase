<?php

namespace App\Http\Controllers\newhelp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use App\Model\ServiceAuthorization;


class ListController extends Controller
{
    private $ENV_URL;
    private $URL;
    private $client;


    public function __construct()
    {
        $this->ENV_URL = config('customServices.services.helpdesk');
        $this->URL=$this->ENV_URL.'lists';   
        $token=ServiceAuthorization::select('authorizations_token')->where('authorizations_client','helpdesk')->first()->authorizations_token;
        $this->client = new Client(['headers' => ['Authorization' => 'Bearer '.$token]]);   

    }

    public function index()
    { 
        $res = $this->client->request('GET',  $this->URL);
        $listJson=$res->getBody(); 
        $list = json_decode($listJson, true);
        $data['lists']=$list;
        return view('bcl.list.listList')->with('data',$data);

    }

    public function create($boardname,$boardid)
    {
        $data['boardid']=$boardid;
        $data['boardname']=$boardname;
        
        return view('bcl.list.createList')->with('data',$data);


     }

    public function store(request $request)
    { 
        $response = $this->client->request('POST', $this->URL, [
            'form_params' => [
            'board_id' => $request->board_id,
            'list_name' => $request->list_name,                    
            'list_order' => $request->list_order,                    
            'list_archieved' => $request->archieved,
            ]
        ]);
        
        return redirect("/board-detail/$request->board_id");
     }

     public function show($id)
     {      
        $res = $this->client->request('GET',$this->URL.'/'.$id);
        $listJson=$res->getBody();
        $list=json_decode($listJson, true);        
        $data['lists']=$list;         
        return view('bcl.list.showList',['data'=>$data]);
     }


    public function edit($id)
    {     
        $res = $this->client->request('GET', $this->URL.'/'.$id);
        $listJson=$res->getBody();
        $list = json_decode($listJson, true);
        $data['lists']=$list;

        return view('bcl.list.editList',['data'=>$data]);
    }


    public function update(Request $request, $id)
    {  
        $response = $this->client->request('PUT', $this->URL.'/'.$id, [
                    'form_params' => [
                    'board_id' => $request->board_id,
                    'name' => $request->name,                     
                    'order' => $request->order,                     
                    'archieved' => $request->archieved,                  
                    ]
        ]);

        return redirect('/lists');       
    }

    public function destroy($id)
    {
        $res = $this->client->request('DELETE', $this->URL.'/'.$id);
        return redirect('/lists');
    }


}


