<?php

namespace App\Http\Controllers\Post;

// use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Auth;
use GuzzleHttp\Client;


class PostController extends Controller
{

    private $ENV_URL;

    private $URL;


    public function __construct()
    {
        $this->ENV_URL = env('API_SOCIAL');
        $this->URL=$this->ENV_URL.'post/';    
                // $this->middleware('auth');
    }

    public function index()
    {
        $client = new Client();
        $res = $client->request('GET', $this->URL);
        // return $res->getStatusCode();
        // return $res->getBody();
        $posts=$res->getBody();
        $area = json_decode($posts, true);
        // return view('socialapp')->with('post', $posts);
        // if(Auth::user()->id==)

        $postData['post']=$area;
        // $postData['updateView']=$;

        // return view('socialapp')->with('posts', $area);
        return view('social/socialDashboard')->with('posts', $postData);
        // return view('Post.postDashboard',['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new Client();
        $response = $client->request('POST', $this->URL, [
                    'form_params' => [
                    'body' => $request->body,
                    'user_id' => $request->user()->id,
                    'user_name' => $request->user()->name
                    ]
    ]);
       return redirect('/social');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        //
        $post=Post::where('post_id',$id);
        return response()->json(['new_body' => $post->body], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $client = new Client();
        $response = $client->request('PUT', $this->URL.$id, [
                    'form_params' => [
                    // 'body' => [
                    'body' => $request->postBodyData,
                    ]
    ]);
        return response()->json(['success'=>'200']);
        
        // return response()->json(['success'=>'200','vikram'=>$id,'body'=>$request->postBodyData]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Post $post)
    public function destroy($id)
    {


        $client = new Client();
        $res = $client->request('DELETE', $this->URL.$id);
        return redirect('/social');
    }
}
