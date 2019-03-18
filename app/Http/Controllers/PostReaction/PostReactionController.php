<?php

namespace App\Http\Controllers\PostReaction;

// use App\Http\Requests\PostReactionRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Model\ServiceAuthorization;




class PostReactionController extends Controller
{

    private $ENV_URL;

    private $URL;

    private $client;


    public function __construct()
    {
        $this->ENV_URL = config('customServices.services.social');
        $this->URL=$this->ENV_URL.'postreaction'; 

        $token=ServiceAuthorization::select('authorizations_token')->where('authorizations_client','socialapi')->first()->authorizations_token;
        $this->client = new Client(['headers' => ['Authorization' => 'Bearer '.$token]]);   
    }




    public function index()
    {
        $res = $this->client->request('GET', $this->URL);
        $reaction=$res->getBody();
        $reactionDecode = json_decode($reaction, true);

        $reactionData['reaction']=$reactionDecode;

        return response()->json($reactionData);
    }

    public function store(Request $request)
    {

        $response = $this->client->request('POST', $this->URL, [
                    'form_params' => [
                    'postID' => $request->postID,
                    'userID' => $request->user()->id,
                    'reactionID' => $request->reaction
                    ]
    ]);
       return redirect('/social');
        // $postreaction = PostReaction::create($request->all());
        // $postreaction=new PostReaction();    
        // $postreaction->reaction_name=$request['reaction'];
        // $postreaction->save(); 

        // return response()->json($postreaction, 201);
    }

    public function show($id)
    {
        $postreaction = PostReaction::findOrFail($id);

        return response()->json($postreaction);
    }

    public function update(Request $request, $id)
    {
        $response = $this->client->request('PUT', $this->URL.'/'.$id, [
                    'form_params' => [
                    // 'postID' => $request->postID,
                    // 'userID' => $request->user()->id,
                    'reactionID' => $request->reaction
                    ]
    ]);
       return redirect('/social');
        // return response()->json($postreaction, 200);
    }

    public function destroy($id)
    {
        // return 'hi delete';
        // PostReaction::destroy($id);
        $res = $this->client->request('DELETE', $this->URL.'/'.$id);
        return redirect('/social');

        // return response()->json(null, 204);
    }
}
