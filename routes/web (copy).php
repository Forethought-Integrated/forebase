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

Auth::routes();
use GuzzleHttp\Client;


// Route::middleware('auth')->group(function () {
 Route::group(['middleware' => ['auth']], function () {
   
    Route::get('/', function () {
    return view('/dashboard/dashboard');
});

    Route::get('/crm', function () {
    return view('/CRM/crmDashboard');
});

});


Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();


Route::get('/knowledge', function () {
    return view('/knowledge/knowledge');
});



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

// User Profile

Route::resource('/user-profile', 'UserProfile\UserProfileController');
// //Route::resource('/userUpload', 'UserController@uploadImage');
// Route::resource('/userUpload', 'UploadFileController');


// ./User Profile

// CRM---------------------------------------------------------------------------------------

// Account Modul********************

Route::resource('account', 'CRM\AccountController');
Route::get('crmjson',  function () {

    $client = new Client();
        $res = $client->request('GET', 'http://localhost:8002/api/v1/accounts');
        $accountJson=$res->getBody();
        $account = json_decode($accountJson, true);
        $accountData['dataArray']=$account;

        return view('social.socialjson',['posts' => $accountData]);
});

// ./Account Module*******************


//  Contact Module***************

Route::resource('contact', 'CRM\ContactController');
Route::get('crmjson',  function () {
    $client = new Client();
        $res = $client->request('GET', 'http://localhost:8002/api/v1/contacts');
        $contactJson=$res->getBody();
        $contact = json_decode($contactJson, true);
        $contactData['dataArray']=$contact;

        return view('social.socialjson',['posts' => $contactData]);
});

//  ./Contact Module******************

//  Lead Module***********************

Route::resource('lead', 'CRM\LeadController');
Route::get('leadcrmjson',  function () {
    $client = new Client();
        $res = $client->request('GET', 'http://localhost:8002/api/v1/leads');
        $leadJson=$res->getBody();
        $lead = json_decode($leadJson, true);
        $leadtData['dataArray']=$lead;

        return view('social.socialjson',['posts' => $leadtData]);
});

//  ./Lead Module********************

//  Campaign Module****************** 

Route::resource('campaign', 'CRM\CampaignController');
Route::get('crmjson',  function () {
    $client = new Client();
        $res = $client->request('GET', 'http://localhost:8002/api/v1/campaigns');
        $campaignJson=$res->getBody();
        $campaign = json_decode($campaignJson, true);
        $campaignData['dataArray']=$campaign;

        return view('social.socialjson',['posts' => $campaignData]);
});


//  ./Campaign Module****************

//  Opportunity******************

Route::resource('opportunity', 'CRM\OpportunityController');
Route::get('crmjson',  function () {
    $client = new Client();
        $res = $client->request('GET', 'http://localhost:8002/api/v1/opportunities');
        $opportunityJson=$res->getBody();
        $opportunity = json_decode($opportunityJson, true);
        $opportunityData['dataArray']=$opportunity;

        return view('social.socialjson',['posts' => $opportunityData]);
});





Route::resource('customer', 'CRM\AccountController');




//  ./CRM----------------------------------------------------------------------------------------------  








// Route::get('/social', function () {

// --Comment Blade
Route::put('/comment/{id}', 'Comment\CommentController@update')->name('editComment');
Route::delete('/comment/{id}', 'Comment\CommentController@destroy')->name('deleteComment');
Route::resource('/comment', 'Comment\CommentController');
Route::resource('/reaction', 'PostReaction\PostReactionController');

// ./Comment Blade


Route::get('/logo/{id}', 'Logo\LogoController@show');


// Route::get('/', 'PostController@index')->name('home');

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
