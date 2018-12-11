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
        // $comments = Comments::create($request->all());
        // $comments=new Comments();    
        // $comments->comment_body=$request['commentBody'];
        // $comments->user_id=$request['userID'];
        // $comments->post_id=$request['postID'];
        // $comments->save(); 
        // return $request->postID;
        // return response()->json($comments, 201);
       return redirect('/social');
    }

    public function show($id)
    {
        $comments = Comments::findOrFail($id);

        return response()->json($comments);
    }

    public function update(Request $request, $id)
    {
        $comments = Comments::findOrFail($id);
        $comments->update($request->all());

        return response()->json($comments, 200);
    }

    public function destroy($id)
    {
        Comments::destroy($id);

        return response()->json(null, 204);
    }
}
