<?php

namespace App\Http\Controllers;

use App\Http\Models\Movies;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Classe MoviesController
 */
class MoviesController extends Controller
{
  /**
   * Pages liste de nos film
   * @retun vue list
   */
  public function index()
  {
    // Je récupère la liste de mes films depuis le modèle Movies
    $movies = Movies::allMovies();
    // J'appel ma vue en lui transférant tous mes films
    return view('movies/index', ['movies' => $movies]);
  }

  /**
   * Pages ajout d'un nouveau film
   * @retun vue créer
   */
  public function creer()
  {
    // Intéroge ma bdd avec le model
    return view('movies/creer');
  }

  /**
   * Enregistre mes données depuis mon formulaire d'ajout de film
   * réception des données de mon formulaire une fois envoyé
   * [store]
   * @return [type] [description]
   */
  public function store(Request $request){

    // Appel de mon modele Movies de sa méthode store
    Movies::storeData($request);

    // redirection vers la page jeux
    return redirect()->route('movies.index');

    // dump($request->title,
    //     $request->synopsis); // debogue toutes mes données envoyé en POST
    // exit(); // arrete le script
  }

  /**
   * Pages edition d'un film
   * @retun vue editer
   */
  public function editer()
  {
    // Intéroge ma bdd avec le model
    return view('movies/editer');
  }

  /**
   * Pages pour voir un film
   * @retun vue voir
   */
  public function voir()
  {
    // Intéroge ma bdd avec le model
    return view('movies/voir');
  }
}



?>
