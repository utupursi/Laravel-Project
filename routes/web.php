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

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', function () {
    $tasks=[
'add task',
'find task',
'review task'
    ];
    return view('hello',[
        'tasks' =>$tasks
    ]);
});
Route::get('/tasks','TasksController@index');
Route::get('/tasks/{task}','TasksController@show');

    Route::get('/userdetail','UserdetailController@detail');


Route::group(['middleware' => 'auth'], function(){
    Route::get('/blog','BlogController@writeblog');

});

Route::post('/blog','BlogController@insert');
Route::get('/','BlogController@blogs');

Route::post('/','EditblogController@insertblog');
Route::get('/editblog/{id}','EditblogController@blogs');

Route::get('/deleteblog/{id}','DeleteblogController@deleteblog');

Route::get('/blogdetails/{id}','BlogdetailsController@blogdetails');

Route::get('/edituser','EdituserController@edituser');
Route::post('/edituser','EdituserController@updateuser');

Route::get('/viewblogs','ViewblogsController@selectUserBlogs');
Route::get('/deleteblog{$id}','DeleteblogController@deleteblog');
Route::get('/international/{category}','CategoryController@selectInternational');
Route::get('/CookingTips/{category}','CategoryController@selectCookingTips');
Route::get('/ToursAndTravels/{category}','CategoryController@selectToursAndTravels');

Route::get('/userprofile/{id}','UserprofileController@userprofile');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
