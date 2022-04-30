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

Route::get('/', "ArticlesController@showMainPage")->name('main');

Route::get('/about', function(){
    return view('about');
})->name('about');

/*Route::get('/articles', function(){
    return view('articles');
})->name('articles');*/

Route::get('/articles', 'ArticlesController@showAllArticles')->name('articles');

Route::get('/articles/create-new', function()
{
    return view('articlesCreateNew');
})->name('articles-create-new');

Route::post('/articles/create-new/submit', 'ArticlesController@submit');

Route::get('artilces/{id}', 'ArticlesController@showOneArticle')->name('articles-oneArticle');

Route::get('articles/{id}/update', 'ArticlesController@updateArticle')->name('articles-change');

Route::post('articles/{id}/update/submit', 'ArticlesController@updateArticleSubmit')->name('articles-change-submit');

Route::get('articles/{id}/delete', 'ArticlesController@deleteArticle')->name('articles-delete');