<?php

namespace App\Http\Controllers\Comment;

// use App\Http\Requests\CommentsRequest;
// use App\Model\Comments;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Model\ServiceAuthorization;



class CommentController extends Controller
{
    private $ENV_URL;

    private $URL;

    private $client;


    public function __construct()
    {
        $this->ENV_URL = env('API_SOCIAL');
        $this->URL=$this->ENV_URL.'comment';    
                // $this->middleware('auth');
         $token=ServiceAuthorization::select('authorizations_token')->where('authorizations_client','socialapi')->first()->authorizations_token;
        $this->client = new Client(['headers' => ['Authorization' => 'Bearer '.$token]]); 
    }



 
    public function index()
    {
        $comments = Comments::latest()->get();


        $res = $this->client->request('GET', $this->URL);
        $commentJson=$res->getBody();
        $comment = json_decode($commentJson, true);
        $data['comment']=$comment;

        return response()->json($comment);
    }

    public function store(Request $request)
    {

        $response = $this->client->request('POST', $this->URL, [
                    'form_params' => [
                    'commentBody' => $request->body,
                    'userID' => $request->user()->id,
                    'postID' => $request->postID
                    ]
    ]);
        
        // return response()->json($comments, 201);
       return redirect('/social');
    }

    public function show($id)
    {
        // $comments = Comments::findOrFail($id);

        // return response()->json($comments);
    }

    public function update(Request $request, $id)
    {
        
        $response = $this->client->request('PUT', $this->URL.'/'.$id, [
                    'form_params' => [
                    // 'body' => [
                    'body' => $request->commentView,
                    ]
    ]);
        // return response()->json(['success'=>'200']);
        
        // $comments = Comments::findOrFail($id);
        // $comments->update($request->all());

        // return response()->json($comments, 200);
       return redirect('/social');

    }

    public function destroy($id)
    {
        // return 'delete';
        $res = $this->client->request('DELETE', $this->URL.'/'.$id);
        return redirect('/social');

        // return response()->json(null, 204);
    }
}
