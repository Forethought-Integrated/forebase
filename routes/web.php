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

	$client = new Client();;
        $res = $client->request('GET', 'http://localhost:8001/api/post');

        // return $res->getStatusCode();
        // return $res->getBody();
        $posts=$res->getBody();

         $area = json_decode($posts, true);

        return view('social.socialjson',['posts' => $area]);
});



Route::get('/', 'PostController@index')->name('home');

Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');

Route::resource('posts', 'PostController');
