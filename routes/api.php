<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::resource('posts','Api\PostController')
->names([
    'index'     =>'api.posts.index',
    //'store'     =>'api.posts.store',
    //'update'    =>'api.posts.update',
    //'show'      =>'api.posts.show',
    //'destroy'   =>'api.posts.destroy',

])->only('index');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
