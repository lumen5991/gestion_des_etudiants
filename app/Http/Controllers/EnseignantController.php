<?php

namespace App\Http\Controllers;

use App\Models\Enseignant;
use Illuminate\Http\Request;

class EnseignantController extends Controller
{
    //
    public  function enseignant()
    {
      $enseignants = Enseignant::all();
       return view('enseignant.enseignant', compact('enseignants'));
    }


   public  function addenseignant()
    {
 
       return view('enseignant.addenseignant');
    } 

    public function newenseignant(Request $request)
    {
       $data = $request->all();
 
       $validation = $request->validate([
          'first_name' => 'required',
          'last_name' => 'required',
          'tel' => 'required',
          'address' => 'required'
       ]);
 
       $save = Enseignant::create([
          'first_name' => $data['first_name'],
          'last_name' => $data['last_name'],
          'tel' => $data['tel'],
          'address' => $data['address']
       ]);
 
       return redirect()->route('enseignant')->with('success', 'Cours ajouté avec succès.');
    }


    
    public  function affectationEns()
    {
 
       return view('enseignant.affectationEns');
    } 
}
