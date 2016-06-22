<?php

namespace App\Http\Controllers;

use App\Http\Models\Directors;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
   * Enregistre mes données depuis mon formulaire d'ajout d'un réalisateur
   * réception des données de mon formulaire une fois envoyé
   * [store]
   * @return [type] [description]
   */
  public function store(Request $request){

    // Appel de mon modele Movies de sa méthode store
    Directors::storeData($request);

    // redirection vers la page jeux
    return redirect()->route('directors.index');

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
