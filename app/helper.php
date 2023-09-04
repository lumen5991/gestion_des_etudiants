<?php

use App\Models\Etudiant;

if(!function_exists("idsBD")){
    function idsBD(){
        $id = Etudiant::pluck("id");
        return $id;
    }
}