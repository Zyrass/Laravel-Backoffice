<?php
namespace App\Http\Models;

use illuminate\Database\Eloquent\Model;
use DB;

/**
 * Model Categories
 */
class Categories extends Model
{
  /**
   * Connexion avec la table categories
   * @var string
   */
  protected $table = "categories";

  /**
   * [allCategories description]
   * @return [type] [description]
   */
  public static function allCategories()
  {
    $result = DB::table('categories')->get();

    return $result;
  }

}

 ?>
