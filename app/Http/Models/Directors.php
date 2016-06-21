<?php
namespace App\Http\Models;

use illuminate\Database\Eloquent\Model;
use DB;

/**
 * Model Directors
 */
class Directors extends Model
{
  /**
   * Connexion avec la table directors
   * @var string
   */
  protected $table = 'directors';

  /**
   * [allDirectors description]
   * @return [type] [description]
   */
  public static function allDirectors()
  {
    $result = DB::table('directors')->get();

    return $result;
  }
}

?>
