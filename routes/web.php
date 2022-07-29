<?php

use Illuminate\Support\Facades\Route;

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


Route::get('articles/{articles}/{id}', function($articles,$id){
    // return "get by article  $articles and $id";
    return view('index',[
        'articles'=>$articles,
        'id'=>$id,
        'listuser'=>[
            'hosein' => '001528',
            'ali'=>'001563'
        ]
    ]);
});

Route::prefix('/admin')->group(function() {
    Route::get('/',function() {
       return view('welcome');
    });
    Route::get('/step1',function() {
        return "step1";
    });
    Route::get('/step2',function() {
        return "step2";
    });
    Route::get('/step3',function() {
        return "step3";
    });
});
