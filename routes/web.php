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

Route::get('/', [
    'uses' => 'HomePageController@index',
    'as' => 'homepage'
]);

Route::get('/changePassword','HomeController@showChangePasswordForm')->name('showChangePasswordForm');
Route::post('/changePassword','HomeController@changePassword')->name('changePassword');

Route::get('/category/{id}', [
    'uses' => 'HomePageController@single_category',
    'as' => 'single_category'
]);
Route::get('/news/{id}', [
    'uses' => 'HomePageController@singlenews',
    'as' => 'singlenews'
]);

Route::post('/news/search', [
    'uses' => 'HomePageController@search',
    'as' => 'search'
]);




Auth::routes();

Route::get('/blog', [
    'uses' => 'CategoriesController@show',
    'as' => 'blog'
]);
Route::post('/vote/answer/store', [
        'uses' => 'VoteController@answer_store',
        'as'   => 'answer.store'
    ]);
    Route::get('/poll/reslult', [
        'uses' => 'VoteController@poll_result',
        'as'   => 'poll_result'
    ]);



Route::group(['prefix' =>'admin', 'middleware' => 'auth'], function() {

    Route::get('/home', [
        'uses' => 'HomeController@index',
        'as'   => 'home'
    ]);

    Route::get('/posts/create', [
        'uses' => 'PostsController@create',
        'as'   => 'post.create'
    ]);

    Route::get('/votes', [
        'uses' => 'VoteController@index',
        'as'   => 'votes'
    ]);
    Route::get('/vote/create', [
        'uses' => 'VoteController@create',
        'as'   => 'vote.create'
    ]);
    Route::post('/vote/store', [
        'uses' => 'VoteController@store',
        'as'   => 'vote.store'
    ]);
    Route::get('/vote/edit/{id}', [
        'uses' => 'VoteController@edit',
        'as'   => 'vote.edit'
    ]);
    Route::post('/vote/update/{id}', [
        'uses' => 'VoteController@update',
        'as'   => 'vote.update'
    ]);
    Route::get('/vote/delete/{id}', [
        'uses' => 'VoteController@destroy',
        'as'   => 'vote.delete'
    ]);
    

    Route::post('/post/store', [
        'uses' =>'PostsController@store',
        'as'   => 'post.store'
    ]);
    Route::get('/posts', [
        'uses' => 'PostsController@index',
        'as' =>'posts'
    ]);


    Route::get('/post/delete/{id}', [

        'uses' => 'PostsController@destroy',
        'as' => 'post.delete'

    ]);


    Route::get('/posts/trashed', [
        'uses' => 'PostsController@trashed',
        'as' =>'posts.trashed'
    ]);

    Route::get('/posts/kill/{id}', [
        'uses' => 'PostsController@kill',
        'as' =>'posts.kill'
    ]);

    Route::get('/posts/restore/{id}', [
        'uses' => 'PostsController@restore',
        'as' =>'posts.restore'
    ]);

    Route::get('/posts/edit/{id}', [
        'uses' => 'PostsController@edit',
        'as' =>'post.edit'
    ]);


    Route::post('/posts/update/{id}', [

        'uses' => 'PostsController@update',
        'as' =>'post.update'
    ]);


    Route::get('/categories', [
        'uses' =>'CategoriesController@index',
        'as' => 'categories'
    ]);

    Route::get('/category/create', [
        'uses' =>'CategoriesController@create',
        'as' => 'category.create'
    ]);

    Route::post('/category/store', [
        'uses' => 'CategoriesController@store',
        'as' => 'category.store'
    ]);

    Route::get('/category/edit/{id}', [
        'uses' => 'CategoriesController@edit',
        'as' => 'category.edit'
    ]);

    Route::get('/category/delete/{id}', [
       'uses' => 'CategoriesCOntroller@destroy',
       'as' => 'category.delete'
    ]);

    Route::post('category/update/{id}', [
        'uses' => 'CategoriesController@update',
        'as' => 'category.update'
    ]);

    Route::get('/stylecategories', [
        'uses' => 'StyleController@index',
        'as' => 'stylecategories'
    ]);
    Route::get('/stylecategory/create', [
        'uses' => 'StyleController@create',
        'as' => 'stylecategory.create'
    ]);
    Route::post('/stylecategory/store', [
        'uses' => 'StyleController@store',
        'as' => 'stylecategory.store'
    ]);


    Route::get('/tags', [
        'uses' =>'CategoriesController@index',
        'as' => 'categories'
    ]);

    Route::get('/newuser', [
        'uses' => 'UsersController@index',
        'as' => 'user.index'
    ]);

    Route::get('/newuser/create', [
        'uses' => 'UsersController@create',
        'as' => 'user.create'
    ]);

    Route::post('/newuser/store', [
        'uses' => 'UsersController@store',
        'as' => 'user.store'
    ]);

    Route::get('/newuser/edit/{id}', [
        'uses' => 'UsersController@edit',
        'as' => 'user.edit'
    ]);

    Route::post('/newuser/edit/{id}', [
        'uses' => 'UsersController@update',
        'as' => 'user.update'
    ]);

    Route::get('/newuser/delete/{id}', [
        'uses' => 'UsersController@destroy',
        'as' => 'user.delete'
    ]);




});


