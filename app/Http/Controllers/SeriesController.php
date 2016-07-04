<?php

namespace App\Http\Controllers;

use App\Http\Models\Series;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Classe SeriesController
 */
class SeriesController extends Controller
{
  /**
   * Pages liste de nos film
   * @retun vue list
   */
  public function index()
  {
    // Je récupère la liste de mes films depuis le modèle Movies
    $series = Series::allSeries();
    // J'appel ma vue en lui transférant tous mes films
    return view('series/index', ['series' => $series]);
  }

  /**
   * Pages ajout d'un nouveau film
   * @retun vue créer
   */
  public function creer()
  {
    // Intéroge ma bdd avec le model
    return view('series/creer');
  }

  /**
   * Enregistre mes données depuis mon formulaire d'ajout de film
   * réception des données de mon formulaire une fois envoyé
   * [store]
   * @return [type] [description]
   */
  public function store(Request $request){

    // Appel de mon modele Movies de sa méthode store
    Series::storeData($request);

    // redirection vers la page index
    return redirect()->route('series.index');

  }

  /**
   * Pages edition d'un film
   * @retun vue editer
   */
  public function editer()
  {
    // Intéroge ma bdd avec le model
    return view('series/editer');
  }

  /**
   * Pages pour voir un film
   * @retun vue voir
   */
  public function voir()
  {
    // Intéroge ma bdd avec le model
    return view('series/voir');
  }
}



?>
