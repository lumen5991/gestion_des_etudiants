<?php

namespace App\Http\Controllers;

use App\Models\AffectationEnseignant;
use Illuminate\Http\Request;
use App\Models\Enseignant;
use App\Models\Cours;

class AffectationEnsController extends Controller

{

    public function affectationEns($id=null)
    {  
       $enseignant = Enseignant::find($id);

       $affEn=$enseignant->affectEns;

       $cours = Cours::all();
       
       $affectations = AffectationEnseignant::where('enseignant_id')->get(); 

            return view('enseignant.affectationEns' , compact('id', 'cours','affEn', 'enseignant', 'affectations'));
    }

    public function saveAffectation(Request $request,$enseignant_id)
    {
        $data = $request->all();

        $validation = $request->validate([
            'cours_id' => 'required',
        ]);
        
        $coursId = $request->input('cours_id');

        // Vérification des affectations existent déjà pour éviter les doublons
        foreach($coursId as $coursIds) {
            AffectationEnseignant::updateOrcreate([
                'enseignant_id' =>$enseignant_id ,
                'cours_id'=>$coursIds,
            ]);
        }
        return redirect()->back()->with('success', 'Affectation enregistrée avec succès.');
    }
}
