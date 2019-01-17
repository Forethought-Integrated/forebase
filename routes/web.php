<?php
// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
use GuzzleHttp\Client;
use App\Model\Task;
// Route::middleware('auth')->group(function () {
Route::group(['middleware' => ['auth']], function () {
   
    // Route::get('/', function () {

    //     // $taskData=Task::where('task_assignedto',Auth::user()->id)->get()->pluck('task_subject','task_percentage');
    //     $taskData=Task::where('task_assignedto',Auth::user()->id)->get();
    //     $taskCount= $taskData->count();
    //     // return $taskCount;
    //     Session::put('taskData',$taskData);
    //     Session::put('taskCount',$taskCount);
    //     // return $taskData;
    // return view('/dashboard/dashboard');
    // });

    Route::get('/crm', function () {
    return view('/CRM/crmDashboard');
    });

    Route::get('/under-construction', function () {
    return view('underConstruction');
    });

    // Administration-----------------------------------------------------------------------
    Route::get('/administration', function () {
        return view('administration.administrationDashboard');
    });
    Route::resource('datamapper', 'DataMapper\DataMapperController');
    //--File Upload & Import TO CSV
    Route::post('/datamapper/uploadFile', 'DataMapper\DataMapperController@importCsv');
    //--./File Upload & Import TO CSV

    // ./Administration----------------------------------------------------------------------------

    // Notification
    Route::get('/notification', 'Notification\NotificationController@index');
    Route::post('/notification-mark-read', 'Notification\NotificationController@markAsRead');
    Route::get('/notification-mark-read-icon/{id}', 'Notification\NotificationController@markAsReadIcon');
    Route::get('/notification-mark-unread-icon/{id}', 'Notification\NotificationController@markAsUnReadIcon');
    Route::get('/notification-mark-read-all', 'Notification\NotificationController@markAsReadAll');
    // ./Notofication

    // CRM---------------------------------------------------------------------------------------
    Route::resource('account', 'CRM\AccountController');
    Route::resource('contact', 'CRM\ContactController');
    Route::resource('lead', 'CRM\LeadController');
    Route::resource('campaign', 'CRM\CampaignController');
    Route::resource('opportunity', 'CRM\OpportunityController');
    Route::resource('customer', 'CRM\AccountController');
    
    //--File Upload & Import TO CSV
    Route::post('/contact/uploadFile', 'CRM\ContactController@importCsv');
    Route::post('/account/uploadFile', 'CRM\AccountController@importCsv');
    //--./File Upload & Import TO CSV

    // Route::get('/crm/task/{id}', function () {
    //     return 'hehe';
    // });

    Route::resource('/crm/task/', 'Task\TaskController');
    Route::get('/crm/task/{id}', 'Task\TaskController@show');
    Route::get('/crm/task/{id}/edit', 'Task\TaskController@edit');
    Route::put('/crm/task/{id}/', 'Task\TaskController@update');
    Route::delete('/crm/task/{id}/', 'Task\TaskController@destroy');
    //  ./CRM--------------------------------------------------------------------------------------------  

    // Marketing
    Route::get('/marketing', function () {
        return view('/marketing/marketingDashboard');
    });
    // ./Marketing

    // Social Blade
    Route::get('/socialdel/{post_id}', 'Post\PostController@destroy');
    Route::post('/social/reaction/{id}', 'Post\PostController@reaction');
    Route::resource('/social', 'Post\PostController');
    // --Comment Blade
    Route::put('/comment/{id}', 'Comment\CommentController@update')->name('editComment');
    Route::delete('/comment/{id}', 'Comment\CommentController@destroy')->name('deleteComment');
    Route::resource('/comment', 'Comment\CommentController');
    Route::resource('/postreaction', 'PostReaction\PostReactionController');
    Route::resource('/reaction', 'Reaction\ReactionController');
    // ./Social Blade

    // User Profile
    Route::resource('/user-profile', 'UserProfile\UserProfileController');
    // //Route::resource('/userUpload', 'UserController@uploadImage');
    // Route::resource('/userUpload', 'UploadFileController');
    // ./User Profile

    //   for Brand
    Route::resource('brands','Brand\BrandController');

      ///for Menu
    Route::resource('menus','Menu\MenuController');

       ///for menudetails

    Route::resource('menudetails','Menudetail\MenudetailController');

       ///for colorpaletts

    Route::resource('colorpalettes','ColorPalette\ColorPaletteController');

       ///for logos

    Route::resource('logos','Logo\LogoController');

       ///for company

    Route::resource('companies','Company\CompanyController');
    Route::get('/send/email', 'Home\HomeController@mail');

});

Route::get('/', 'Home\HomeController@index');

Route::get('/knowledge', function () {
    return view('/knowledge/knowledge');
});






//  HelpDesk
route::resource('boards','Helpdesk\BoardController');
route::resource('cards','Helpdesk\CardController');
route::resource('lists','Helpdesk\ListController');
Route::get('/helpdesk', function () {
    return view('/helpdesk/helpdeskDashboard');
});
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

// testing

Route::get('/socialjson', function () {

	$client = new Client();
    // $res = $client->request('GET', 'http://localhost:8003/boards/'.'1'.'/'.'1'.'/'.'list');
    $res = $client->request('GET', 'http://localhost:8003/boards/'.'1'.'/'.'1'.'/'.'list'.'/'.'1'.'/'.'card');
     $cardJson=$res->getBody();
        $card = json_decode($cardJson, true);
        if(is_null($card))
        {
            $data['card']='null';
        }
        else
        {
            $data['card']=$card;
            
            // $data['card']=null;
        }
        $data['boardID']='1';
        $data['listID']='1';
    return view('social.socialjson',['data' => $data]);

});



// testing

use Illuminate\Support\Facades\App; 


Route::get('/socialjsond', function () {

   $client = new Client();
        $res = $client->request('GET', 'http://localhost:8001/api/post');
        $posts=$res->getBody();
        $postData = json_decode($posts, true);
        // $data = json_decode($posts, true);

        // $postData['post']=$data;
        $data['post']=$postData;


        $reaction=App::call('App\Http\Controllers\Reaction\ReactionController@index');

        
        // $data['reactionData']=App::call('App\Http\Controllers\Reaction\ReactionController@index');
         $data['notReactionData']=$reaction->getData();
        // return view('social/socialDashboard')->with('data', $data);


    return view('social.socialjson',compact('data'));

});
// ./testing