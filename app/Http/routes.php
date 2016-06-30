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


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {

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

Route::get('/cinema', ['as' => 'cinema', function () {
    return view('cinema');
}]);

Route::get('/serie', ['as' => 'serie', function () {
    return view('series');
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

    // ======================================================== CREER / STORE MOVIE

    Route::get('/creer', [
      'as' => 'movies.creer',
      'uses' => 'MoviesController@creer'
    ]);

    Route::post('/store', [
      'as' => 'movies.store',
      'uses' => 'MoviesController@store'
    ]);

    // ======================================================== FIN CREER / STORE MOVIE

    Route::get('/editer}', [
      'as' => 'movies.editer',
      'uses' => 'MoviesController@editer'
    ]);



    Route::get('/voir', [
      'as' => 'movies.voir',
      'uses' => 'MoviesController@voir'
    ]);

    /**
     * Action Like
     * Envoie de 2 arguments en URL
     * id : id du film envoyer en URL
     * action: like ou dislike
     * Ex en PHP : ?id=123
     * Ex sur laravel /123
     * Resultat: /like/6/aime
     */
    Route::get('/aimer-film/{id}/{action}', [
      'as' => 'movies.aimer',
      'uses' => 'MoviesController@like'
    ]);

    Route::get('/visible-ou-pas/{id}/{visibilite}', [
      'as' => 'movies.visible',
      'uses' => 'MoviesController@visible'
    ]);

    Route::get('/mettre-en-avant/{id}/{mettreEnAvant}', [
      'as' => 'movies.cover',
      'uses' => 'MoviesController@cover'
    ]);

    Route::get('/suppression/{id}', [
      'as' => 'movies.delete',
      'uses' => 'MoviesController@delete'
    ]);

    Route::get('/search', [
      'as' => 'movies.search',
      'uses' => 'MoviesController@search'
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

    // ======================================================== CREER / STORE CATEGORIES

    Route::get('/creer', [
      'as' => 'categories.creer',
      'uses' => 'CategoriesController@creer'
    ]);

    Route::post('/store', [
      'as' => 'categories.store',
      'uses' => 'CategoriesController@store'
    ]);
    // ======================================================== FIN CREER / STORE CATEGORIES

    Route::get('/editer', [
      'as' => 'categories.editer',
      'uses' => 'CategoriesController@editer'
    ]);
    Route::get('/voir', [
      'as' => 'categories.voir',
      'uses' => 'CategoriesController@voir'
    ]);

    Route::get('/suppression/{id}', [
      'as' => 'categories.delete',
      'uses' => 'CategoriesController@delete'
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

    // ======================================================== CREER / STORE ACTORS

    Route::get('/creer', [
      'as' => 'actors.creer',
      'uses' => 'ActorsController@creer'
    ]);

    Route::post('/store', [
      'as' => 'actors.store',
      'uses' => 'ActorsController@store'
    ]);

    // ======================================================== FIN CREER / STORE ACTORS

    Route::get('/editer', [
      'as' => 'actors.editer',
      'uses' => 'ActorsController@editer'
    ]);
    Route::get('/voir', [
      'as' => 'actors.voir',
      'uses' => 'ActorsController@voir'
    ]);

    Route::get('/suppression/{id}', [
      'as' => 'actors.delete',
      'uses' => 'ActorsController@delete' // METHODE DU CONTROLLER ICI
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

    // ======================================================== CREER / STORE REALISATEUR

    Route::get('/creer', [
      'as' => 'directors.creer',
      'uses' => 'DirectorsController@creer'
    ]);

    Route::post('/store', [
      'as' => 'directors.store',
      'uses' => 'DirectorsController@store'
    ]);

    // ======================================================== FIN CREER / STORE REALISATEUR

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
  //                                GROUP CINEMA
  // ========================================================================
  Route::group(['prefix' => 'cinemas'], function () {

    Route::get('/index', [
      'as' => 'cinemas.index',
      'uses' => 'CinemasController@index'
    ]);

    // ======================================================== CREER / STORE CINEMA

    Route::get('/creer', [
      'as' => 'cinemas.creer',
      'uses' => 'CinemasController@creer'
    ]);

    Route::post('/store', [
      'as' => 'cinemas.store',
      'uses' => 'CinemasController@store'
    ]);

    // ======================================================== FIN CREER / STORE CINEMA

    Route::get('/editer', [
      'as' => 'cinemas.editer',
      'uses' => 'CinemasController@editer'
    ]);
    Route::get('/voir', [
      'as' => 'cinemas.voir',
      'uses' => 'CinemasController@voir'
    ]);
  });

  // ========================================================================
  //                                GROUP SERIE
  // ========================================================================
  Route::group(['prefix' => 'series'], function () {

    Route::get('/index', [
      'as' => 'series.index',
      'uses' => 'SeriesController@index'
    ]);

    // ======================================================== CREER / STORE CINEMA

    Route::get('/creer', [
      'as' => 'series.creer',
      'uses' => 'SeriesController@creer'
    ]);

    Route::post('/store', [
      'as' => 'series.store',
      'uses' => 'SeriesController@store'
    ]);

    // ======================================================== FIN CREER / STORE CINEMA

    Route::get('/editer', [
      'as' => 'series.editer',
      'uses' => 'SeriesController@editer'
    ]);
    Route::get('/voir', [
      'as' => 'series.voir',
      'uses' => 'SeriesController@voir'
    ]);
  });

});
Route::auth();

Route::get('/home', 'HomeController@index');
