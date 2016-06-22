<?php

namespace App\Http\Controllers;

use App\Http\Models\Directors;
use App\Http\Controllers\Controller;

/**
 * Classe MoviesController
 */
class DirectorsController extends Controller
{
  /**
   * Pages liste de nos réalisateurs
   * @retun vue list
   */
  public function index()
  {
    // Intéroge ma bdd avec le model
    // return view('directors/index');

    $directors = Directors::allDirectors();
    return view('directors/index', ['directors' => $directors]);

  }

  /**
   * Pages ajout d'un nouvel réalisateur
   * @retun vue créer
   */
  public function creer()
  {
    // Intéroge ma bdd avec le model
    return view('directors/creer');
  }

  /**
   * Pages edition d'un réalisateur
   * @retun vue editer
   */
  public function editer()
  {
    // Intéroge ma bdd avec le model
    return view('directors/editer');
  }

  /**
   * Pages pour voir un réalisateur
   * @retun vue voir
   */
  public function voir()
  {
    // Intéroge ma bdd avec le model
    return view('directors/voir');
  }
}



?>
