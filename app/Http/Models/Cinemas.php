<?php
namespace App\Http\Models;

use illuminate\Database\Eloquent\Model;
use illuminate\Http\Request;
use DB;

/**
 * Model Cinemas
 */
class Cinemas extends Model
{
  /**
   * Connexion avec la table cinema
   * @var string
   */
  protected $table = "cinema";

  /**
   * [allCinemas description]
   * @return [type] [description]
   */
  public static function allCinemas()
  {
    $result = DB::table('cinema')->get();

    return $result;
  }

  /**
   * Methode qui enregistre en BDD mon nouveau Cinéma
   * @return [type] [description]
   */
   public static function storeData(Request $request){

     // Insert permet d'insérer un table
     DB::table('cinema')->insert(
       [
         'title' => $request->title,
         'ville' => $request->ville,
         'numero' => $request->numero,
         'adress' => $request->adress,
         'cp' => $request->cp,
         'logo' => $request->logo
       ]
     );

   }

}

 ?>
