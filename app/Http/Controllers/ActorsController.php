<?php

namespace App\Http\Controllers;

use App\Http\Models\Actors;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Classe MoviesController
 */
class ActorsController extends Controller
{
  /**
   * Pages liste de nos acteurs
   * @retun vue list
   */
  public function index()
  {
    // Intéroge ma bdd avec le model
    // return view('actors/index');
    $actors = Actors::allActors();
    return view('actors/index', ['actors' => $actors ]);
  }

  /**
   * Pages ajout d'un nouvel acteur
   * @retun vue créer
   */
  public function creer()
  {
    // Intéroge ma bdd avec le model
    return view('actors/creer');
  }

  /**
   * Enregistre mes données depuis mon formulaire d'ajout de film
   * réception des données de mon formulaire une fois envoyé
   * [store]
   * @return [type] [description]
   */
  public function store(Request $request){

    // Appel de mon modele Actors de sa méthode store
    Actors::storeData($request);

    // redirection vers la page jeux
    return redirect()->route('actors.index');

  }

  /**
   * Pages edition d'un acteur
   * @retun vue editer
   */
  public function editer()
  {
    // Intéroge ma bdd avec le model
    return view('actors/editer');
  }

  /**
   * Pages pour voir un acteur
   * @retun vue voir
   */
  public function voir()
  {
    // Intéroge ma bdd avec le model
    return view('actors/voir');
  }
}



?>
