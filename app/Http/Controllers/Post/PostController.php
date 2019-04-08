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
use View;



class PostController extends Controller
{

    private $ENV_URL;
    private $URL;
    private $StarredURL;
    private $client;


    public function __construct()
    {
        $this->ENV_URL = config('customServices.services.social');
        
        $this->URL=$this->ENV_URL.'post'; 
        $this->StarredURL=$this->ENV_URL.'post/starred/'; 

        $token=ServiceAuthorization::select('authorizations_token')->where('authorizations_client','socialapi')->first()->authorizations_token;
        $this->client = new Client(['headers' => ['Authorization' => 'Bearer '.$token]]); 
    }

  

    public function index(Request $request)
    {
        if($request->ajax())
        {
            // $res = $this->client->request('GET', $this->StarredURL.$request->user()->id);
            $res = $this->client->request('GET', $this->URL.'/starred/'.$request->user()->id);
            $posts=$res->getBody();
            $postData = json_decode($posts, true);
            $data['post']=$postData;
              // Get star post id to show star status
            $res = $this->client->request('GET', $this->URL.'/star-id/'.$request->user()->id);
            $posts=$res->getBody();
            $starStatus = json_decode($posts, true);
            // ./Get star post id to show star status
            // Adding star post Status to post data to render on post
            $count=count($data['post']['data']);
            for ($i=0; $i < $count ; $i++) { 
                if(in_array($data['post']['data'][$i]['postID'], $starStatus))
                    $data['post']['data'][$i]['starStatus']=1;
                else
                    $data['post']['data'][$i]['starStatus']=0;

            }
            $reaction=App::call('App\Http\Controllers\Reaction\ReactionController@index');
            $data['notReactionData']=$reaction->getData();
            $view = view("include.socialPost.postBody",compact('data'));
            return $view;
        }
        $res = $this->client->request('GET', $this->URL);
        $posts=$res->getBody();
        $postData = json_decode($posts, true);
        $data['post']=$postData;
        // Get star post id to show star status
            $res = $this->client->request('GET', $this->URL.'/star-id/'.$request->user()->id);
            $posts=$res->getBody();
            $starStatus = json_decode($posts, true);
        // ./Get star post id to show star status
        // Adding star post Status to post data to render on post
        $count=count($data['post']['data']);
        for ($i=0; $i < $count ; $i++) { 
            if(in_array($data['post']['data'][$i]['postID'], $starStatus))
                $data['post']['data'][$i]['starStatus']=1;
            else
                $data['post']['data'][$i]['starStatus']=0;

        }
        $reaction=App::call('App\Http\Controllers\Reaction\ReactionController@index');
        $data['notReactionData']=$reaction->getData();
        return view('social/socialDashboard',compact('data'));
    }


    public function create()
    {
        //
    }


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

    
    public function show( $id)
    {
        $post=Post::where('post_id',$id);
        return response()->json(['new_body' => $post->body], 200);
    }

    public function edit(Post $post)
    {
        //
    }

    
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

    // public function destroy(Post $post)
    public function destroy($id)
    {
        $res = $this->client->request('DELETE', $this->URL.'/'.$id);
        return redirect('/social');
    }

    public function addStar($post_id,Request $request)
    {
        $res = $this->client->request('GET', $this->URL.'/add-star/'.$post_id.'/'.$request->user()->id);
        return response()->json([
                "status"=> "success",
                "code"=> 200,
                "message"=> "Favorite added",]
            );

    }

    public function removeStar($post_id,Request $request)
    {
        $res = $this->client->request('GET', $this->URL.'/remove-star/'.$post_id.'/'.$request->user()->id);
        return response()->json([
                "status"=> "success",
                "code"=> 200,
                "message"=> "Favorite removed",]
            );
    }
}
