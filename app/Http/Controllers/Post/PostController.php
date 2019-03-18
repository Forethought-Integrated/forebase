<?php

namespace App\Http\Controllers\Post;

// use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Auth;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\App; 
use App\Model\ServiceAuthorization;



class PostController extends Controller
{

    private $ENV_URL;

    private $URL;

    private $client;


    public function __construct()
    {
        $this->ENV_URL = config('customServices.services.social');
        
        $this->URL=$this->ENV_URL.'post'; 

        $token=ServiceAuthorization::select('authorizations_token')->where('authorizations_client','socialapi')->first()->authorizations_token;
        $this->client = new Client(['headers' => ['Authorization' => 'Bearer '.$token]]); 
    }

  

    public function index()
    {
        $res = $this->client->request('GET', $this->URL);
        $posts=$res->getBody();
        $postData = json_decode($posts, true);
        // $data = json_decode($posts, true);

        // $postData['post']=$data;
        $data['post']=$postData;


        $reaction=App::call('App\Http\Controllers\Reaction\ReactionController@index');

        
        // $data['reactionData']=App::call('App\Http\Controllers\Reaction\ReactionController@index');
         $data['notReactionData']=$reaction->getData();
         // $data['notReactionData']=unserialize($reaction);
        // return view('social/socialDashboard')->with('data', $data);
        return view('social/socialDashboard',compact('data'));
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
        $response = $this->client->request('POST', $this->URL, [
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
        $response = $this->client->request('PUT', $this->URL.'/'.$id, [
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


        $res = $this->client->request('DELETE', $this->URL.'/'.$id);
        return redirect('/social');
    }
}
