<?php

namespace App\Http\Controllers\Reaction;

// use App\Http\Requests\PostReactionRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Model\ServiceAuthorization;




class ReactionController extends Controller
{

    private $ENV_URL;

    private $URL;

    private $client;

    public function __construct()
    {
        $this->ENV_URL = config('customServices.services.social');
         
        $this->URL=$this->ENV_URL.'reaction';    
        $token=ServiceAuthorization::select('authorizations_token')->where('authorizations_client','crmapi')->first()->authorizations_token;
        $this->client = new Client(['headers' => ['Authorization' => 'Bearer '.$token]]);
    }




    public function index()
    {
        $res = $this->client->request('GET', $this->URL);
        $reaction=$res->getBody();
        $reactionDecode = json_decode($reaction, true);

        $reactionData=$reactionDecode;
        // $reactionData=$reaction;
        // return $reactionData;

        // return response()->json($reactionData);
        return response()->json($reactionData);
    }

    public function store(Request $request)
    {
        return $request->all();

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

        $response = $this->client->request('POST', $this->URL.'/'.$id, [
                    'form_params' => [
                    'postID' => $request->postID,
                    'userID' => $request->user()->id,
                    'reactionID' => $request->reactionID
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
