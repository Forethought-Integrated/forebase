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


Route::get('/board/{userID}','Helpdesk\BoardController@index');
Route::get('/board/{userID}/create','Helpdesk\BoardController@create');
Route::get('/board/{boardID}/{userID}','Helpdesk\BoardController@show');
Route::post('/board/{userID}','Helpdesk\BoardController@store');
Route::put('/board/{boardID}/{userID}','Helpdesk\BoardController@update');
Route::delete('/board/{boardID}/{userID}','Helpdesk\BoardController@destroy');



Route::get('/board/{boardID}/{userID}/list/','Helpdesk\ListController@index');
Route::get('/board/{boardID}/{userID}/list/create/','Helpdesk\ListController@create');
// Route::get('/board/{userID}/list/create/',function () {
//     return 'hehe';
// });
Route::post('/board/{boardID}/{userID}/list','Helpdesk\ListController@store');
Route::get('/board/{boardID}/{userID}/list/{listID}','Helpdesk\ListController@show');
Route::put('/board/{boardID}/list/{listID}','Helpdesk\ListController@update');
Route::delete('/board/{boardID}/{userID}/list/{listID}','Helpdesk\ListController@destroy');



Route::get('/board/{boardID}/{userID}/list/{listID}/card','Helpdesk\CardController@index');
Route::get('/board/{boardID}/{userID}/list/{listID}/create/','Helpdesk\CardController@create');

Route::post('/board/{boardID}/{userID}/list/{listID}/card','Helpdesk\CardController@store');
Route::get('/board/{boardID}/{userID}/list/{listID}/card/{cardID}','Helpdesk\CardController@show');
Route::put('/board/{boardID}/{userID}/list/{listID}/card/{cardID}','Helpdesk\CardController@update');
Route::delete('/board/{boardID}/{userID}/list/{listID}/card/{cardID}','Helpdesk\CardController@destroy');



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
    // $res = $client->request('GET', 'http://localhost:8003/boards/'.'1'.'/'.'1'.'/'.'list');
    $res = $client->request('GET', 'http://localhost:8003/boards/'.'1'.'/'.'1'.'/'.'list'.'/'.'1'.'/'.'card');
     $cardJson=$res->getBody();
        $card = json_decode($cardJson, true);
        $data['card']=$card;
        $data['boardID']='1';

    return view('social.socialjson',['data' => $data]);

});