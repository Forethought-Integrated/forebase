<?php

namespace App\Http\Controllers\PostReaction;

// use App\Http\Requests\PostReactionRequest;
use App\Model\PostReaction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class PostReactionController extends Controller
{
    public function index()
    {
        $postreactions = PostReaction::latest()->get();

        return response()->json($postreactions);
    }

    public function store(Request $request)
    {
        // $postreaction = PostReaction::create($request->all());
        $postreaction=new PostReaction();    
        $postreaction->reaction_name=$request['reaction'];
        $postreaction->save(); 

        return response()->json($postreaction, 201);
    }

    public function show($id)
    {
        $postreaction = PostReaction::findOrFail($id);

        return response()->json($postreaction);
    }

    public function update(Request $request, $id)
    {
        $postsreaction = PostReaction::findOrFail($id);
        $postsreaction->update(['reaction_name' => $request->reaction]);
        // $postreaction->update($request->all());

        return response()->json($postreaction, 200);
    }

    public function destroy($id)
    {
        PostReaction::destroy($id);

        return response()->json(null, 204);
    }
}
