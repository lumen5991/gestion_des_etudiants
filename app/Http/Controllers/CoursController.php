<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CoursController extends Controller
{
   //



   public  function accesscours()
   {
      $cours = Cours::all();
      $categories = Categorie::all();
      return view('cours.cours', compact('cours', 'categories'));
   }


   public  function addcours(Request $request)
   {
      $cours = Cours::all();
      $categories = Categorie::all();
      return view('cours.addcours', compact('categories', 'cours'));
   }

   public function newcours(Request $request)
   {
      $data = $request->all();

      $validation = $request->validate([
         'nom_cours' => 'required|string|max:255',
         'max_horaire' => 'required|string|max:255',
         'coef' => 'required|integer'
      ]);

      $save = Cours::create([
         'nom_cours' => $data['nom_cours'],
         'max_horaire' => $data['max_horaire'],
         'coef' => $data['coef'],
         'addBy' => Auth::user()->id,
         'categorie_id' => $data['categorie_id']
      ]);

      return redirect()->route('accesscours')->with('success', 'Cours ajouté avec succès.');
   }
}
