<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' => 'welcome', function () {
    return view('welcome');
}]);

// Route::get permet de créer une route en GET
// Le premier paramètre, c'est l'URI (url interne)
// le second paramètre est une fonction anonyme
Route::get('/about-us', ['as' => 'about', function () {
    // Derière l'URI on retourne une vue
    return view('about');
}]);

Route::get('/contact', ['as' => 'contact', function () {
    // Derière l'URI on retourne une vue
    return view('contact');
}]);

Route::get('/faq', ['as' => 'faq', function () {
    // Derière l'URI on retourne une vue
    return view('faq');
}]);

Route::get('/concept', ['as' => 'concept', function () {
    // Derière l'URI on retourne une vue
    return view('concept');
}]);

Route::get('/ils-parlent-de-nous', ['as' => 'presse',  function () {
    // Derière l'URI on retourne une vue
    return view('presse');
}]);

// ========================================================================
//                                GROUP MOVIE
// ========================================================================

// Je créer un groupe de route derrière le préfixe movies en URI
  Route::group(['prefix' => 'movies'], function() {

    // A LIRE IMPORTNT
    // // Route en GET -- CONCEPTION POUR PAGE STATIQUE
    // Route::get('/index', ['as' => 'movies.index', function() {
    //   // view (dossier/vue)
    //   return view('movies/index');
    // }]);

    // Route en GET
    Route::get('/index', [
      'as' => 'movies.index',
      'uses' => 'MoviesController@index'
    ]);

    Route::get('/creer', [
      'as' => 'movies.creer',
      'uses' => 'MoviesController@creer'
    ]);

    Route::get('/editer', [
      'as' => 'movies.editer',
      'uses' => 'MoviesController@editer'
    ]);

    Route::get('/voir', [
      'as' => 'movies.voir',
      'uses' => 'MoviesController@voir'
    ]);

});
  // ========================================================================
  //                                GROUP CATEGORIE
  // ========================================================================
  Route::group(['prefix' => 'categories'], function () {

    Route::get('/index', [
      'as' => 'categories.index',
      'uses' => 'CategoriesController@index'
    ]);
    Route::get('/creer', [
      'as' => 'categories.creer',
      'uses' => 'CategoriesController@creer'
    ]);
    Route::get('/editer', [
      'as' => 'categories.editer',
      'uses' => 'CategoriesController@editer'
    ]);
    Route::get('/voir', [
      'as' => 'categories.voir',
      'uses' => 'CategoriesController@voir'
    ]);

  });

  // ========================================================================
  //                                GROUP ACTEUR
  // ========================================================================
  Route::group(['prefix' => 'actors'], function () {

    Route::get('/index', [
      'as' => 'actors.index',
      'uses' => 'ActorsController@index'
    ]);
    Route::get('/creer', [
      'as' => 'actors.creer',
      'uses' => 'ActorsController@creer'
    ]);
    Route::get('/editer', [
      'as' => 'actors.editer',
      'uses' => 'ActorsController@editer'
    ]);
    Route::get('/voir', [
      'as' => 'actors.voir',
      'uses' => 'ActorsController@voir'
    ]);

  });

  // ========================================================================
  //                                GROUP REALISTEUR
  // ========================================================================
  Route::group(['prefix' => 'directors'], function () {

    Route::get('/index', [
      'as' => 'directors.index',
      'uses' => 'DirectorsController@index'
    ]);
    Route::get('/creer', [
      'as' => 'directors.creer',
      'uses' => 'DirectorsController@creer'
    ]);
    Route::get('/editer', [
      'as' => 'directors.editer',
      'uses' => 'DirectorsController@editer'
    ]);
    Route::get('/voir', [
      'as' => 'directors.voir',
      'uses' => 'DirectorsController@voir'
    ]);
  });

  // ========================================================================
  //
  // ========================================================================