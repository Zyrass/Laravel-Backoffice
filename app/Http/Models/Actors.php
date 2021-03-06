<?php
namespace App\Http\Models;

use illuminate\Database\Eloquent\Model;
use illuminate\Http\Request;
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

  /**
   * Methode qui enregistre en BDD mon film
   * @return [type] [description]
   */
  public static function storeData(Request $request, $filename){

    // Insert permet d'insérer un table
    DB::table('actors')->insert(
      [
        'firstname' => $request->firstname,
        'lastname' => $request->lastname,
        'sex' => $request->sex,
        'dob' => $request->dob,
        'image' => asset('uploads/actors/'.$filename),
        'nationality' => $request->nationality,
        'biography' => $request->biography,
        'recompenses' => $request->note
      ]
    );

  }

  public static function deleteSetActorsId($id) {
    return DB::table('actors')
      ->where('id', $id)
      ->delete();
  }



}

?>
