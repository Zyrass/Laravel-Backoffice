<?php

namespace App\Http\Controllers;

use App\Http\Models\Categories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

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

    $validator = Validator::make($request->all(), [
      'title' => 'required|min:10|max:255|unique:categories,title',
      'slug' => 'required|min:5|max:60|unique:categories,slug',
      'description' => 'required|min:10|max:255',
    ],
    [
      'title.required' => "Désolé ce champ est requis",
      'title.min' => "Désolé vous n'avez pas saisis assez de caractères",
      'title.max' => "Désolé vous venez de saisir plus de 255 caractères",
      'title.unique' => "Arf, ce film existe déjà...",

      'slug.required' => "Désolé ce champ est requis",
      'slug.min' => "Désolé vous n'avez pas saisis assez de caractères",
      'slug.max' => "Désolé vous venez de saisir plus de 60 caractères",
      'slug.unique' => "Arf, cette catégories existe déjà...",

      'description.required' => 'Désolé ce champ est requis',
      'description.min' => 'Vous devez saisir un minimum de 10 caractères...',
      'description.max' => 'Arf, vous avez saisis trop de caractères...',
    ]
  );

    if ($validator->fails()) {

      // redirection vers la page
      return redirect()->route('categories.creer')
                       ->withErrors($validator) // Le message d'erreur
                       ->withInput(); // Remplissage de nos champs formulaire
    }

    // Appel de mon modele Categories de sa methode store
    Categories::storeData($request);

    return redirect()->route('categories.index')
                     ->with('success', 'Votre catégorie a belle et bien été ajouté');

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

  public function delete($id)
  {
    Categories::deleteSetCategoriesId($id);

    return redirect()
      ->route('categories.index')
      ->with('danger', "Votre catégorie à bien été effacer de la base de donnée");
 }
}



?>
