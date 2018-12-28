<?php

namespace App\Http\Controllers\PostReaction;

// use App\Http\Requests\PostReactionRequest;
use App\Model\PostReaction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;



class PostReactionController extends Controller
{

    private $ENV_URL;

    private $URL;


    public function __construct()
    {
        $this->ENV_URL = env('API_SOCIAL');
        $this->URL=$this->ENV_URL.'reaction';    
                // $this->middleware('auth');
    }




    public function index()
    {
        $postreactions = PostReaction::latest()->get();

        return response()->json($postreactions);
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
        $response = $client->request('POST', $this->URL.'/'.$id, [
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
        // PostReaction::destroy($id);
        $client = new Client();
        $res = $client->request('DELETE', $this->URL.'/'.$id);
        return redirect('/social');

        // return response()->json(null, 204);
    }
}
