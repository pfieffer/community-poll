<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::GET('polls', 'PollsController@index');
Route::GET('polls/{id}', 'PollsController@show');
Route::POST('polls', 'PollsController@store');
Route::PUT('polls/{poll}', 'PollsController@update');
Route::DELETE('polls/{poll}', 'PollsController@delete');
Route::ANY('errors', 'PollsController@errors');

