<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AffectationEnseignant extends Model
{
    //use HasFactory;
    protected $table = 'affectation_enseignant';
    protected $fillable = ['cours_id', 'enseignant_id'];
    use SoftDeletes;
}
