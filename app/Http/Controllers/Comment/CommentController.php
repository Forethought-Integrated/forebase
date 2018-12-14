<?php

namespace App\Http\Controllers\Comment;

// use App\Http\Requests\CommentsRequest;
// use App\Model\Comments;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;


class CommentController extends Controller
{
    public function index()
    {
        $comments = Comments::latest()->get();

        return response()->json($comments);
    }

    public function store(Request $request)
    {

        $client = new Client();
        $response = $client->request('POST', 'http://localhost:8001/api/comment', [
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
        return 'hi';
         $client = new Client();
        $response = $client->request('PUT', "http://localhost:8001/api/comment/".$id, [
                    'form_params' => [
                    // 'body' => [
                    'body' => $request->commentView,
                    ]
    ]);
        return response()->json(['success'=>'200']);
        
        // $comments = Comments::findOrFail($id);
        // $comments->update($request->all());

        // return response()->json($comments, 200);
    }

    public function destroy($id)
    {
        // return 'delete';
        $client = new Client();
        $res = $client->request('DELETE', 'http://localhost:8001/api/comment/'.$id);
        return redirect('/social');

        // return response()->json(null, 204);
    }
}
