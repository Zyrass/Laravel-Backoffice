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
  public static function storeData(Request $request){

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
        'image' => $request->image
      ]
    );

  }


}

?>
