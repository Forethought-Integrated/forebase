<?php

namespace App\Http\Controllers\PostReaction;

// use App\Http\Requests\PostReactionRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;



class PostReactionController extends Controller
{

    private $ENV_URL;

    private $URL;


    public function __construct()
    {
        $this->ENV_URL = config('customServices.services.social');
        $this->URL=$this->ENV_URL.'postreaction';    
                // $this->middleware('auth');
    }




    public function index()
    {
        $client = new Client();
        $res = $client->request('GET', $this->URL);
        $reaction=$res->getBody();
        $reactionDecode = json_decode($reaction, true);

        $reactionData['reaction']=$reactionDecode;

        return response()->json($reactionData);
    }

    public function store(Request $request)
    {

        $client = new Client();
        $response = $client->request('POST', $this->URL, [
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
        $client = new Client();
        $response = $client->request('PUT', $this->URL.'/'.$id, [
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
        $client = new Client();
        $res = $client->request('DELETE', $this->URL.'/'.$id);
        return redirect('/social');

        // return response()->json(null, 204);
    }
}
