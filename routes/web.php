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

Auth::routes();

Route::get('dashboards', ['uses' => 'DashboardController@index', 'as' => 'dashboards.index']);
Route::get('dashboards/create', ['uses' => 'DashboardController@create', 'as' => 'dashboards.create']);
Route::get('dashboards/{id}', ['uses' => 'DashboardController@show', 'as' => 'dashboards.show']);
Route::post('dashboards/{user_id}', ['uses' => 'DashboardController@store', 'as' => 'dashboards.store']);
Route::put('dashboards/{id}', ['uses' => 'DashboardController@update', 'as' => 'dashboards.update']);
Route::get('dashboards/{id}/edit', ['uses' => 'DashboardController@edit', 'as' => 'dashboards.edit']);
Route::get('dashboards/{id}/delete', ['uses' => 'DashboardController@destroy', 'as' => 'dashboards.destroy']);
Route::get('links', ['uses' => 'DashboardController@links', 'as' => 'dashboards.links']);
Route::get('photo', ['uses' => 'DashboardController@photo', 'as' => 'dashboards.photo']);
Route::get('dash-photos', ['uses' => 'DashboardController@dashphotos', 'as' => 'dashboards.dashphotos']);
Route::get('upload', ['uses' => 'DashboardController@uploads', 'as' => 'dashboards.uploads']);
/*Route::get('calendar', ['uses' => 'DashboardController@calendar', 'as' => 'dashboards.calendar']);*/

Route::get('pictures', ['uses' => 'PictureController@index', 'as' => 'pictures.index']);
Route::get('pictures/create', ['uses' => 'PictureController@create', 'as' => 'pictures.create']);
Route::post('pictures/{user_id}', ['uses' => 'PictureController@store', 'as' => 'pictures.store']);
Route::put('pictures/{id}', ['uses' => 'PictureController@update', 'as' => 'pictures.update']);
Route::get('pictures/{id}/edit', ['uses' => 'PictureController@edit', 'as' => 'pictures.edit']);
/*Route::get('pictures/{id}', ['uses' => 'PictureController@show', 'as' => 'pictures.show']);*/
Route::get('pictures/{id}/delete', ['uses' => 'PictureController@destroy', 'as' => 'pictures.destroy']);

Route::get('photos', ['uses' => 'PhotoController@index', 'as' => 'photos.index']);
Route::get('photos/create', ['uses' => 'PhotoController@create', 'as' => 'photos.create']);
Route::post('photos/{user_id}', ['uses' => 'PhotoController@store', 'as' => 'photos.store']);
Route::put('photos/{id}', ['uses' => 'PhotoController@update', 'as' => 'photos.update']);
Route::get('photos/{id}/edit', ['uses' => 'PhotoController@edit', 'as' => 'photos.edit']);
Route::get('photos/{id}', ['uses' => 'PhotoController@show', 'as' => 'photos.show']);
Route::get('photos/{id}/delete', ['uses' => 'PhotoController@destroy', 'as' => 'photos.destroy']);

Route::get('videos', ['uses' => 'VideoController@index', 'as' => 'videos.index']);
Route::get('videos/create', ['uses' => 'VideoController@create', 'as' => 'videos.create']);
Route::post('videos/{user_id}', ['uses' => 'VideoController@store', 'as' => 'videos.store']);
Route::get('videos/{id}', ['uses' => 'VideoController@show', 'as' => 'videos.show']);
Route::get('videos/{id}/delete', ['uses' => 'VideoController@destroy', 'as' => 'videos.destroy']);

// Users / Follow
Route::get('/users', 'FollowController@index');
Route::post('/follow', 'FollowController@store');
Route::delete('/follow/{follow}', 'FollowController@destroy');

// Tasks
Route::get('/tasks', 'TaskController@index');
Route::post('/task', 'TaskController@store');
Route::delete('/task/{task}', 'TaskController@destroy');

// News Feed
Route::get('/feed', 'NewsFeedController@index');

Route::group(['prefix' => 'messages'], function () {
    Route::get('/', ['as' => 'messages', 'uses' => 'MessagesController@index']);
    Route::get('create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);
    Route::post('/', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);
    Route::get('{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);
    Route::put('{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);
});

Route::get('teams', ['uses' => 'TeamController@index', 'as' => 'teams.index']);
Route::get('teams/create', ['uses' => 'TeamController@create', 'as' => 'teams.create']);
Route::post('teams/{user_id}', ['uses' => 'TeamController@store', 'as' => 'teams.store']);
Route::put('teams/{id}', ['uses' => 'TeamController@update', 'as' => 'teams.update']);
Route::get('teams/{id}/edit', ['uses' => 'TeamController@edit', 'as' => 'teams.edit']);
Route::get('teams/{id}', ['uses' => 'TeamController@show', 'as' => 'teams.show']);
Route::get('teams/{id}/delete', ['uses' => 'TeamController@destroy', 'as' => 'teams.destroy']);

Route::get('joins/country', ['uses' => 'JoinController@country', 'as' => 'joins.country']);
Route::get('joins/display', ['uses' => 'JoinController@display', 'as' => 'joins.display']);
Route::get('joins/state', ['uses' => 'JoinController@state', 'as' => 'joins.state']);
Route::get('joins/local', ['uses' => 'JoinController@local', 'as' => 'joins.local']);
Route::get('joins', ['uses' => 'JoinController@index', 'as' => 'joins.index']);
Route::get('joins/create', ['uses' => 'JoinController@create', 'as' => 'joins.create']);
Route::post('joins/{user_id}', ['uses' => 'JoinController@store', 'as' => 'joins.store']);
Route::put('joins/{id}', ['uses' => 'JoinController@update', 'as' => 'joins.update']);
Route::get('joins/{id}/edit', ['uses' => 'JoinController@edit', 'as' => 'joins.edit']);
Route::get('joins/{id}', ['uses' => 'JoinController@show', 'as' => 'joins.show']);
Route::get('joins/{id}/delete', ['uses' => 'JoinController@destroy', 'as' => 'joins.destroy']);

Route::get('profile/{username}', 'ProfileController@board')->name('profile.board');

Route::get('country', function() {
	return view('joins.country');
});

Route::get('example', function() {
	return view('example');
});

Route::get('info', function() {
	return view('info');
});

Route::get('/home', 'HomeController@index')->name('home');

