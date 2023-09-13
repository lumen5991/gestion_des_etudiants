<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    //use HasFactory;
    protected $table = 'liste';
    protected $fillable = ['nom', 'prenoms', 'date_de_naissance', 'hobbies', 'specialite', 'bio', 'photo'];

    public function user(){
        return $this->belongsTo(User::class,"user_id","id")->withDefault([
           "first_name"=>"Coeur d'ange",
           "last_name"=>"lulu"
  
        ]);
     }

     public function see_affectationEtudiant(){
      return $this->hasMany(AffectationEtudiant::class, 'etudiant_id');
     }
}
