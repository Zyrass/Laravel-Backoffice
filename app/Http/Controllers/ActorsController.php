<?php

namespace App\Http\Controllers;

use App\Http\Models\Actors;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

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

    $validator = Validator::make($request->all(), [
      'firstname' => 'required|min:10|max:255',
      'lastname' => 'required|min:10|max:255',
      'image' => 'required|image',//|regex:^http(s)?:\/\/.+(.jpg|.jpeg|.png)$',
      'nationality' => 'required|in:ALG,ALL,ENG,ARG,AUS,BE,BRE,CHN,ESP,USA,FR,JAP,QAT,TUR,',
      'sex' => 'required|in:m,f',
      'biographie' => 'required|min:10',
      'dob' => 'required|date_format:d/m/Y', //|after:now',
      'note' => 'required|in:0,1,2,3,4,5',
    ],
    [
      'firstname.required' => "Désolé ce champ est requis",
      'firstname.min' => "Désolé vous n'avez pas saisis assez de caractères",
      'firstname.max' => "Désolé vous venez de saisir plus de 255 caractères",

      'lastname.required' => "Désolé ce champ est requis",
      'lastname.min' => "Désolé vous n'avez pas saisis assez de caractères",
      'lastname.max' => "Désolé vous venez de saisir plus de 255 caractères",

      'image.required' => "Désolé ce champ est obligatoire",
      'image.image' => "Vous devez sélectionner une image valide",
      //'image.regex' => "Vous ne respectez pas le format requis. Format accepté : .jpg ; .jpeg ; .png",

      'biographie.required' => 'Désolé ce champ est requis',
      'biographie.min' => 'Vous devez saisir un minimum de 10 caractères...',

      'sex.required' => 'Désolé ce champ est requis',
      'sex.in' => 'Vous avez strictement le choix entre : m ou f',

      'nationality.required' => "Désolé ce champ est requis",
      'nationality.in' => "Désolé vous avez le choix entre uniquement : ALG,ALL,ENG,ARG,AUS,BE,BRE,CHN,ESP,USA,FR,JAP,QAT ou TUR",

      'dob.required' => 'Désolé, ce champ est requis',
      'dob.date_format' => 'La date ne respecte pas le format standard : d/m/Y',

      'note.required' => 'Désolé ce champ est requis',
      'note.in' => 'Désolé, vous devez saisir une durée du film compris entre 1 et 5',

    ]
  );

      // Si le validator échoue
      if ($validator->fails()) {
        // redirection
        return redirect()->route('actors.creer')
                         ->withErrors($validator) // message d'erreur
                         ->withInput(); // remplissage de nos champs formulaire
      }

      $filename = ''; // fichier vide
        if ($request->hasfile('image')) {
          // si dans ma requete il y a un fichier dont le name dans l'input est "image"
          $file = $request->file('image');
          // je recupere le fichier image

          $filename = $file->getClientOriginalName();
          // récupère le nom original du fichier

          // public path == chemin public
          $destinationPath = public_path().'/uploads/actors'; // Indique ou stocker l'image

          $file->move($destinationPath, $filename);
          // Déplace le fichier vers ma destination choisi

        }

    // Appel de mon modele Actors de sa méthode store
    Actors::storeData($request, $filename);

    // redirection vers la page jeux
    return redirect()
      ->route('actors.index')
      ->with('success', 'Votre acteur a belle et bien été ajouté');

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

  public function delete($id)
  {
    Actors::deleteSetActorsId($id);

    return redirect()
      ->route('actors.index')
      ->with('success', "Votre acteur à bien été effacé de la base de donnée");
  }


}




?>
