<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Cours;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //

    public  function addcategories()
    {

        return view('cours.addcategories');
    }

    public function newcategorie(Request $request)
    {   
        //envoie des données dans la base
        $data = $request->all();

        $validation = $request->validate([
            "name" => 'required|unique:categorie_cours'
        ]);

        // Vérification de l'existence du nom dans la base de données
        $existingCategorie = Categorie::where('name', $data['name'])->first();

        if ($existingCategorie) {
            return back()->with('error', 'Le nom existe déjà dans la base de données.');
        }
        
        //sauvegarde
        $save = Categorie::create([
            'name' => $data['name'],
        ]);

        return view('cours.cours');
    }


}
