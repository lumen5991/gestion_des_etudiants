<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AffectationEtudiant extends Model
{
   // use HasFactory;
   protected $table = 'affectation_etudiant';
   protected $fillable = ['cours_id', 'etudiant_id'];

}