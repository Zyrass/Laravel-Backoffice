<?php
namespace App\Http\Models;

use illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;

/**
 * Model Movies
 */
class Movies extends Model
{
  /**
   * Connexion avec la table movies
   * @var string
   */
  protected $table = 'movies';

  /**
   * [allMovies description]
   * @return [type] [description]
   */
  public static function allMovies()
  {
    $result = DB::table('movies')->get();

    return $result;
  }

  /**
   * Methode qui enregistre en BDD mon film
   * @return [type] [description]
   */
  public static function storeData(Request $request, $filename){

    // Insert permet d'insérer un table
    DB::table('movies')->insert(
      [
        'title' => $request->title,
        'synopsis' => $request->synopsis,
        'description' => $request->description,
        'date_release' => $request->dateRelease,
        'languages' => $request->languages,
        'budget' => $request->budget,
        'bo' => $request->bo,
        'image' => asset('uploads/movies/'.$filename), // asset() permet de générer une url a partir du dossier public
      ]
    );
  }

  public static function updateSetVisible($id, $visible){

    // Insert permet d'insérer dans une table
    return DB::table('movies')
      ->where('id', $id)
      ->update(['visible' => $visible]);
  }

  public static function updateSetCover($id, $cover) {

    return DB::table('movies')
      ->where('id', $id)
      ->update(['cover' => $cover]);
  }

  public static function deleteSetId($id) {

    return DB::table('movies')
      ->where('id', $id)
      ->delete(['id' => $id]);
  }

  public static function search($word = ""){

    $resultat = DB::table('movies')
              ->where('title', 'like', '%'.$word.'%')
              ->orwhere('synopsis', 'like', '%'.$word.'%')
              ->orwhere('languages', 'like', '%'.$word.'%')
              ->orwhere('visible', 'like', '%'.$word.'%')
              ->orwhere('budget', 'like', '%'.$word.'%')
              ->orwhere('note_presse', 'like', '%'.$word.'%')
              ->get();

              return $resultat;

  }


  // public static function updateSetMovie($id, $editer) {
  //
  //   return DB::table('movies')
  //     ->where('id', $id)
  //     ->update(['id' => $editer]);
  // }

}

?>
