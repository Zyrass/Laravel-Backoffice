<?php

namespace App\Http\Controllers;

use App\Http\Models\Movies;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Session;

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

    $validator = Validator::make($request->all(), [
      'title' => 'required|min:10|max:255|unique:movies,title',
      'image' => 'required|image',//|regex:^http(s)?:\/\/.+(.jpg|.jpeg|.png)$',
      'description' => 'required|min:10|max:255',
      'bo' => 'required|in:VF,VO,VOSTFR,VOST,JAP',
      'languages' => 'required|in:FR,EN,JAP,CHN',
      'synopsis' => 'required|min:10',
      'dateRelease' => 'required|date_format:d/m/Y', //|after:now',
      'budget' => 'required|integer|between:10000,10000000000',
      'duree' => 'required|integer|between:1,5',
    ],
    [
      'title.required' => "Désolé ce champ est requis",
      'title.min' => "Désolé vous n'avez pas saisis assez de caractères",
      'title.max' => "Désolé vous venez de saisir plus de 255 caractères",
      'title.unique' => "Arf, ce film existe déjà...",

      'image.required' => "Désolé ce champ est obligatoire",
      'image.image' => "Vous devez sélectionner une image valide",
      //'image.regex' => "Vous ne respectez pas le format requis. Format accepté : .jpg ; .jpeg ; .png",

      'description.required' => 'Désolé ce champ est requis',
      'description.min' => 'Vous devez saisir un minimum de 10 caractères...',
      'description.max' => 'Arf, vous avez saisis trop de caractères...',

      'bo.required' => 'Désolé ce champ est requis',
      'bo.in' => 'Vous avez strictement le choix entre : VF ou VO ou VOSTFR ou VOST et JAP',

      'languages.required' => "Désolé ce champ est requis",
      'languages.in' => "Désolé vous avez le choix entre uniquement : FR ou EN ou JAP ou CHN",

      'synopsis.required' => 'Désolé ce champ est requis',
      'synopsis.min' => 'Vous devez saisir un minimum de 10 caractères...',
      'synopsis.max' => 'Arf, vous avez saisis trop de caractères...',

      'dateRelease.required' => 'Désolé, ce champ est requis',
      'dateRelease.date_format' => 'La date ne respecte pas le format standard : d/m/Y',
      'dateRelease.after' => '... Pourquoi saisir une date antérieur à maintenant..',

      'budget.required' => 'Désolé, ce champ est requis',
      'budget.integer' => "Désolé, ce champ n'accepte que le format numérique",
      'budget.between' => 'Désolé, vous devez saisir un capital compris entre : 10000 et 10000000000',

      'duree.required' => 'Désolé ce champ est requis',
      'duree.integer' => "Désolé, ce champ n'accepte que le format numérique",
      'duree.between' => 'Désolé, vous devez saisir une durée du film compris entre 1 et 5',


    ]
  );

      // Si le validator échoue
      if ($validator->fails()) {
        // redirection
        return redirect()->route('movies.creer')
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
          $destinationPath = public_path().'/uploads/movies'; // Indique ou stocker l'image

          $file->move($destinationPath, $filename);
          // Déplace le fichier vers ma destination choisi

        }




    // Appel de mon modele Movies de sa méthode store je suis lui envoi mon objet $request et mon objet $filename
    Movies::storeData($request, $filename);

    // redirection vers la page jeux
    return redirect()
      ->route('movies.index')
      ->with('success', 'Votre film a belle et bien été ajouté');
      // with() permet d'écrire un message flash validant l'envoie

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

  public function like($id, $action)
  {

    // Retrouver un film par son id
    $movies = Movies::find($id);
    // Le tableau des likes sera vide par defaut si il n'y a aucun like en session []
    //
    // session('nom de ma clef', 'valeur par defaut si null')
    $likes = session('likes', []);

    // si l'action est 'like'
    if ($action == 'like') {
      // J'ajoute mon movie dans le tableau des likes en session
      $likes[$id] = $movies->id;
      $message = "Le film {$movies->title} à bien été liké";
    } else {  // Sinon je dislike
      // Je supprime le like dans mon tableaux des likes
      // unset() supprime un element dans un tableau en PHP
      unset($likes[$id]);
      $message = "Le film {$movies->title} à bien été disliké";
    }
    // J'enregistre en session mon nouveau tableaux des likes
    Session::put('likes', $likes);
    // une redirecrtionavec message flash
    return redirect()->route('movies.index')
                     ->with('success', $message);

    // dump($movies->title);
    // exit();

    // dump($movies);
    // exit();

    // dump($id, $action);
    // exit();
  }

  public function visible($id, $visibilite)
  {
    // appel du modele Movies et de sa methode updateSetVisible
    Movies::updateSetVisible($id, $visibilite);

    return redirect()
      ->route('movies.index')
      ->with('success', 'Le film a bien été modifier sur sa visibilité');

  }

  public function cover($id, $mettreEnAvant)
  {
    Movies::updateSetCover($id, $mettreEnAvant);

    return redirect()
      ->route('movies.index')
      ->with('success', "Le film a belle et bien été modifié dans la colonne cover");
  }

  public function delete($id)
  {
    Movies::deleteSetId($id);

    return redirect()
      ->route('movies.index')
      ->with('danger', "Votre film à bien été effacé de la base de donnée");
  }

  public function search(Request $request){

    // search est le name de mon dump
    // dump($request->search);
    // exit();


    // Je transmet au modele le mot clef rechercher
    $moviessearch = Movies::search($request->search);

    return view('movies/search',
    ['movies' => $moviessearch]); // Le transporteur permet de transporter des données du controller à la vue
    // La clef du transporteur c'est le nom de la variable

  }

  // public function modifier($id, $editer)
  // {
  //   Movies::updateSetMovie($id, $editer);
  //
  //   return redirect()
  //     ->route('movies.index');
  // }


}



?>
