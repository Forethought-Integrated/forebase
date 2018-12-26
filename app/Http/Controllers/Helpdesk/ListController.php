<?php

namespace App\Http\Controllers\Helpdesk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class ListController extends Controller
{
    private $ENV_URL;

    private $URL;


    public function __construct()
    {
        $this->ENV_URL = env('API_HELPDESKURL');
        $this->URL=$this->ENV_URL.'boards/';    
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index($boardID,$userID)

    {   

        $client = new Client();
        $res = $client->request('GET', $this->URL.$boardID.'/'.$userID.'/'.'list/'  );
        $listJson=$res->getBody();
        $list = json_decode($listJson, true);
        $data['list']=$list;
        return view('helpdesk.list.listList')->with('data', $data);

    }


      public function create($boardID,$userID)
    {

        return view('helpdesk.list.createList')->with('data',$boardID);

     }

     public function store(Request $request,$boardID,$userID)

     { 
                    $client = new Client();
                    $response = $client->request('POST', $this->URL.$boardID.'/'.$userID.'/'.'list/', [
                    'form_params' => [
                    'listName' => $request->listName,
                    'boardID' => $boardID,
                    ]
                ]);
                    return redirect('/board/'.$boardID.'/'.$userID.'/'.'list/');
     }

     public function show($id)

     {


        $client = new Client();
        $res = $client->request('GET', 'http://localhost:8002/api/v1/list/'.$id);
        $listJson=$res->getBody();
        $list = json_decode($listJson, true);
        // $listData['dataArray']=$list;
        $data['list']=$list;


        // return view('social.socialjson',['posts' => $listData]);
        
        // return view('helpdesk.list.listlist')->with('listdata', $listData);


        // $list = list::where('id',$id);
        // return response()->json($list, 200);

        return view('helpdesk.list.showlist',['data'=>$data]);
     }


     public function edit($id)
    {     
        $client = new Client();
        $res = $client->request('GET', 'http://localhost:8002/api/v1/list/'.$id);
        $listJson=$res->getBody();
        $list = json_decode($listJson, true);
        // $listData['dataArray']=$list;
        $data['list']=$list;

        // $list = list::find($id);
        return view('helpdesk.list.editlist',['data'=>$data]);
    }



     public function update(Request $request, $id)

     {  
        $client = new Client();
        $response = $client->request('PUT', "http://localhost:8002/api/v1/list/".$id, [
                    'form_params' => [
                    'list_name' => $request->listName,
                    'list_email' => $request->listEmail,
                    'list_mobileNo '=> $request->listMobileNo,
                    'list_landlineNo' => $request->listLandlineNo,
                    'list_address' => $request->listAddress,
                    'list_website' => $request->listWebsite,
                    'list_city' => $request->listCity,
                    'list_state' => $request->listState,
                    'list_country' => $request->listCountry,
                    'list_pincode' => $request->listPincode,
                    'list_panNo' => $request->listPanNo,
                    'list_GSTNo' => $request->listGSTNo
                    ]
        ]);

        // return response()->json(['success'=>'200']); 
         return redirect('/list');       
     }

      public function destroy($id)

    {
        $client = new Client();
        $res = $client->request('DELETE', 'http://localhost:8002/api/v1/list/'.$id);
        return redirect('/list');
    }


}