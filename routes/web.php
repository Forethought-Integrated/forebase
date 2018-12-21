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

Route::get('/knowledge', function () {
    return view('/knowledge/knowledge');
});

// Social Blade
Route::get('/socialdel/{post_id}', 'Post\PostController@destroy');
Route::post('/social/reaction/{id}', 'Post\PostController@reaction');
Route::resource('/social', 'Post\PostController');
// Route::resource('/comment', 'Comment\CommentController');
// --Comment Blade
Route::put('/comment/{id}', 'Comment\CommentController@update')->name('editComment');
Route::delete('/comment/{id}', 'Comment\CommentController@destroy')->name('deleteComment');
Route::resource('/comment', 'Comment\CommentController');
Route::resource('/reaction', 'PostReaction\PostReactionController');
// ./Social Blade

// User Profile
Route::resource('/user-profile', 'UserProfile\UserProfileController');
// //Route::resource('/userUpload', 'UserController@uploadImage');
// Route::resource('/userUpload', 'UploadFileController');
// ./User Profile

// CRM---------------------------------------------------------------------------------------
Route::resource('account', 'CRM\AccountController');
Route::resource('contact', 'CRM\ContactController');
Route::resource('lead', 'CRM\LeadController');
Route::resource('campaign', 'CRM\CampaignController');
Route::resource('opportunity', 'CRM\OpportunityController');
Route::resource('customer', 'CRM\AccountController');
//  ./CRM----------------------------------------------------------------------------------------------  
// Route::get('/social', function () {

//  HelpDesk

Route::resource('helpdesk', 'Helpdesk\BoardController');

// ./ HelpDesk


// Permission Module
Route::get('/logo/{id}', 'Logo\LogoController@show');

Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');

Route::resource('posts', 'PostController');

Route::get('/admin', function () {


    return view('admin/admin');
});
// ./Permission Module


Route::get('/socialjson', function () {

	$client = new Client();
    // http://localhost:8002/api/v1/account
        // $res = $client->request('GET', 'http://localhost:8002/api/v1/account/');
        // // $res = $client->request('GET', 'http://localhost:8001/api/post');

        // // return $res->getStatusCode();
        // // return $res->getBody();
        // $posts=$res->getBody();

        //  $area = json_decode($posts, true);
        //  $postData['posts']=$area;

        // return view('social.socialjson',['posts' => $postData]);



     $res = $client->request('GET', 'http://localhost:8002/api/v1/account');
        $accountJson=$res->getBody();
        $account = json_decode($accountJson, true);
        // $accountData['dataArray']=$account;
        // return view('CRM.Account.listAccount')->with('accountdata', $accountData);
        $data['account']=$account;
        return view('social.socialjson',['data' => $data]);

});