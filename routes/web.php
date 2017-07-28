<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'QuestionsController@index');
//github webhook 通知
Route::any('/deploy','DeployController@deploy');
Route::any('test','TestController@test');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('email/verify/{token}',['as'=>'email.verify','uses'=>'EmailActiveController@verify']);

Route::resource('questions','QuestionsController',['names'=>[
    'create'=>'question.create',
    'show'=>'question.show'
]]);

Route::post('questions/{question}/answer','AnswersController@store');

Route::get('questions/{question}/follow','QuestionFollowController@follow');

//专题
Route::get('shabantang','SpecialtopicsController@index');


//flowmedia 测试
Route::get('flow','TestController@media');
//oauth 练习
Route::get('oauth','OauthController@goTanguoServer');
Route::get('getCode','OauthController@receiveCode');
Route::get('yar','TestController@yar');
Route::get('yar/handle','YarController@handle');
