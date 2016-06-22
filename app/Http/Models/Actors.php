<?php
namespace App\Http\Models;

use illuminate\Database\Eloquent\Model;
use DB;

/**
 *
 */
class Actors extends Model
{
  /**
   * Connexion avec la table actors
   * @var string
   */
  protected $table = 'actors';

  /**
   * [allActors description]
   * @return [type] [description]
   */
  public static function allActors()
  {
    $result = DB::table('actors')->get();

    return $result;
  }
}

?>
