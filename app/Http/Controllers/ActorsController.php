<?php

namespace App\Http\Controllers;

use App\Http\Models\Actors;
use App\Http\Controllers\Controller;

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
