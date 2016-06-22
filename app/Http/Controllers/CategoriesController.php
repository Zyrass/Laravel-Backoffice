<?php

namespace App\Http\Controllers;

use App\Http\Models\Categories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Classe MoviesController
 */
class CategoriesController extends Controller
{
  /**
   * Pages liste de nos catégories
   * @retun vue list
   */
  public function index()
  {
    // Intéroge ma bdd avec le model
    // return view('categories/index');
    $categories = Categories::allCategories();
    return view('categories/index', ['categories' => $categories ]);
  }

  /**
   * Pages ajout d'une nouvelle catégorie
   * @retun vue créer
   */
  public function creer()
  {
    // Intéroge ma bdd avec le model
    return view('categories/creer');
  }

  /**
   * Enregistre mes données depuis mon formulaire d'ajout d'une catégorie
   * réception des données de mon formulaire une fois envoyé
   * [store]
   * @return [type] [description]
   */
  public function store(Request $request){

    // Appel de mon modele Directors de sa méthode store
    Categories::storeData($request);

    // redirection vers la page jeux
    return redirect()->route('categories.index');

  }

  /**
   * Pages edition d'une catégorie
   * @retun vue editer
   */
  public function editer()
  {
    // Intéroge ma bdd avec le model
    return view('categories/editer');
  }

  /**
   * Pages pour voir une catégorie
   * @retun vue voir
   */
  public function voir()
  {
    // Intéroge ma bdd avec le model
    return view('categories/voir');
  }
}



?>
