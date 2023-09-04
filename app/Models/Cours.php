<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cours extends Model
{
   // use HasFactory;

    protected $table = 'cours';
    protected $fillable = ['nom_cours', 'max_horaire', 'coef', 'addBy', 'deleted_at', 'categorie_id'];
    use SoftDeletes;


    public function categorie(){
        return $this->belongsTo(Categorie::class, "categorie_id", "id");
     }

}
