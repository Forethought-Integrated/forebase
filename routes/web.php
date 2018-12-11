<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();
use GuzzleHttp\Client;


Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();


Route::get('/knowledge', function () {
    return view('/knowledge/knowledge');
});

// Route::get('/socialjson/', 'Post\PostController@indexjson');
Route::get('/socialjson', function () {

	$client = new Client();
        $res = $client->request('GET', 'http://localhost:8001/api/post');

        // return $res->getStatusCode();
        // return $res->getBody();
        $posts=$res->getBody();

         $area = json_decode($posts, true);
         $postData['posts']=$area;

        return view('social.socialjson',['posts' => $postData]);
});


// Social Blade
Route::get('/socialdel/{post_id}', 'Post\PostController@destroy');
// Route::put('/social/{id}', 'Post\PostController@update');
Route::post('/social/reaction/{id}', 'Post\PostController@reaction');
// Route::post('/social/reaction/{id}', function(){
//  return response()->json("hello like request");
// });
Route::resource('/social', 'Post\PostController');
Route::resource('/comment', 'Comment\CommentController');

// ./Social Blade


// Route::get('/social', function () {


//     $client = new Client();
//         $res = $client->request('GET', 'http://localhost:8001/api/post');

//         // return $res->getStatusCode();
//         // return $res->getBody();
//         $posts=$res->getBody();

//          $area = json_decode($posts, true);
    
 
//    return view('socialapp')->with('post', $posts);
//     // return view('socialapp',['post',compact($area)]);
//     // return view('socialapp',compact($area));
// });

Route::get('/logo/{id}', 'Logo\LogoController@show');


Route::get('/', 'PostController@index')->name('home');

Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');

Route::resource('posts', 'PostController');

Route::get('/admin', function () {


    return view('admin/admin');
});


Route::get('/admin', function () {
    return view('admin/admin');
});
