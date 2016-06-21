<?php
namespace App\Http\Models;

use illuminate\Database\Eloquent\Model;
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
}

?>
