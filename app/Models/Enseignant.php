<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Enseignant extends Model
{
   // use HasFactory;

   protected $table = 'enseignants';
   protected $fillable = ['first_name', 'last_name', 'tel', 'address'];
   use SoftDeletes;

  /*  public function affectationEns() {
    return $this->hasManyThrough(Cours::class, affectationEnseignant::class, 'enseignant_id', 'id', 'id', 'cours_id');
   } */
   
}
