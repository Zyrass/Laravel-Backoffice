<?php
namespace App\Http\Models;

use illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;

/**
 * Model Series
 */
class Series extends Model
{
  /**
   * Connexion avec la table series
   * @var string
   */
  protected $table = 'series';

  /**
   * [allMovies description]
   * @return [type] [description]
   */
  public static function allSeries()
  {
    $result = DB::table('series')->get();

    return $result;
  }

  /**
   * Methode qui enregistre en BDD ma série
   * @return [type] [description]
   */
  public static function storeData(Request $request){

    // Insert permet d'insérer un table série
    DB::table('series')->insert(
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
