<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
   // use HasFactory;

   protected $table = 'categorie_cours';
   protected $fillable = ["name"];



   public function courses(){
      return $this->hasMany(Cours::class, "categorie_id", "id");
   }
}
