<?php
// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes(['verify' => 'true']);
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
    Route::resource('account','CRM\AccountController');
    Route::get('account/delete/{id}', 'CRM\AccountController@destroy');
    Route::get('account/contact/create/{accountID}','CRM\AccountController@createContactAccount');
    Route::get('account/contact/{accountID}', 'CRM\AccountController@indexAccountContact');
    Route::resource('contact', 'CRM\ContactController');
    Route::get('contact/delete/{id}', 'CRM\ContactController@destroy');
    // Route::get('account/contact/{accountID}', 'CRM\AccountController@indexAccountContact');
    Route::resource('lead', 'CRM\LeadController');
    Route::get('lead/delete/{id}', 'CRM\LeadController@destroy');
    Route::get('lead/{contactid}/{accountid}/create', 'CRM\LeadController@createLeadContactAccount');
    Route::get('lead/{contactid}/{accountid}', 'CRM\LeadController@indexLeadContactAccount');
    Route::resource('campaign', 'CRM\CampaignController');
    Route::resource('opportunity', 'CRM\OpportunityController');
    Route::get('/opportunity/create/{leadid}', 'CRM\OpportunityController@createOpportunityLead');
    Route::get('/opportunity/delete/{id}', 'CRM\OpportunityController@destroy');
    Route::resource('customer', 'CRM\AccountController');
    
    //--File Upload & Import TO CSV
    Route::post('/contact/uploadFile', 'CRM\ContactController@importCsv');
    Route::post('/account/uploadFile', 'CRM\AccountController@importCsv');
    //--./File Upload & Import TO CSV

    // Route::get('/crm/task/{id}', function () {
    //     return 'hehe';
    // });
    Route::resource('templates','Template\TemplateController');
    Route::get('templatesgrid','Template\TemplateController@indexGrid');
    Route::get('templatesgrid/{templateid}',"Template\TemplateController@editGrid");
    // Route::get('/crm/templates/{id}','Template\TemplateController@show');
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
    Route::group(['middleware' => ['permission:Files']], function () {

        Route::get('/socialdel/{post_id}', 'Post\PostController@destroy');
        Route::post('/social/reaction/{id}', 'Post\PostController@reaction');
        Route::resource('/social', 'Post\PostController');
        // --Comment Blade
        Route::put('/comment/{id}', 'Comment\CommentController@update')->name('editComment');
        Route::delete('/comment/{id}', 'Comment\CommentController@destroy')->name('deleteComment');
        Route::resource('/comment', 'Comment\CommentController');
        Route::resource('/postreaction', 'PostReaction\PostReactionController');
        Route::resource('/reaction', 'Reaction\ReactionController');

    });
    
    // ./Social Blade

    // User Profile
    Route::resource('/user-profile', 'UserProfile\UserProfileController');
    // //Route::resource('/userUpload', 'UserController@uploadImage');
    // Route::resource('/userUpload', 'UploadFileController');
    // ./User Profile

    //   for Brand
    Route::resource('brands','Brand\BrandController');
   Route::get('/brands-view/{id}','Brand\BrandController@view');

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

    // Route::group(['middleware' => ['role:Admin']], function () {
    Route::group(['middleware' => ['permission:Files']], function () {
    //
        Route::get('/knowledge', function () {
            return view('/knowledge/knowledge');
        });
    });
    


route::resource('boards','newhelp\BoardController');
route::get('board-detail/{id}','newhelp\BoardController@boardIndex');
// route::delete('cards/{id}',function(){
//     return 'dfdfg';
// });
route::resource('cards','newhelp\CardController');
// route::delete('cards','newhelp\CardController');
// route::delete('cards/{id}',function(){
//     return 'dfdfg';
// });
// route::get('card-create/{listid}','newhelp\CardController@CardCreate');
route::get('card/{listid}/create','newhelp\CardController@CardCreate');
route::get('board-card-detail/{id}/{listid}','newhelp\BoardController@boardListCardIndex');
route::resource('lists','newhelp\ListController');
route::get('lists/{boardname}/{boardid}/create','newhelp\ListController@create');




//  HelpDesk
// route::resource('boards','Helpdesk\BoardController');
// route::resource('cards','Helpdesk\CardController');
// route::resource('lists','Helpdesk\ListController');
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

  
    // ./Permission Module


});

Route::get('/', 'Home\HomeController@index');



Route::get('/admin', function () {


    return view('admin/admin');
});





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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
