<?php
namespace App\Http\Models;

use illuminate\Database\Eloquent\Model;
use illuminate\Http\Request;
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

  /**
   * Methode qui enregistre en BDD mon nouveau Réalisateur
   * @return [type] [description]
   */
   public static function storeData(Request $request){

     // Insert permet d'insérer un table
     DB::table('categories')->insert(
       [
         'title' => $request->title,
         'description' => $request->description,
         'slug' => $request->slug,
       ]
     );

   }

   public static function deleteSetCategoriesId($id) {
     return DB::table('categories')
      ->where('id', $id)
      ->delete(['id' => $id]);
   }

}

 ?>
