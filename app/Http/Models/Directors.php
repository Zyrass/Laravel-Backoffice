<?php
namespace App\Http\Models;

use illuminate\Database\Eloquent\Model;
use illuminate\Http\Request;
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


  /**
   * Methode qui enregistre en BDD mon nouveau Réalisateur
   * @return [type] [description]
   */
   public static function storeData(Request $request){

     // Insert permet d'insérer un table
     DB::table('directors')->insert(
       [
         'firstname' => $request->firstname,
         'lastname' => $request->lastname,
         'sex' => $request->sex,
         'dob' => $request->dob,
         'image' => $request->image,
         'nationality' => $request->nationality,
         'biography' => $request->biography,
         'note' => $request->notePresse
       ]
     );

   }



}

?>
