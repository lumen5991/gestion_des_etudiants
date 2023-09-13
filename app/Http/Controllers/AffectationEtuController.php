<?php

namespace App\Http\Controllers;

use App\Models\AffectationEtudiant;
use App\Models\Cours;
use App\Models\Etudiant;
use Illuminate\Http\Request;
use League\CommonMark\Extension\Attributes\Node\Attributes;

class AffectationEtuController extends Controller
{
    public function get_etudiant(){
        $student = Etudiant::all();
        $cours = Cours::all();
        $affect = AffectationEtudiant::all();
        $student_list = Etudiant::with('see_affectationEtudiant')->has('see_affectationEtudiant')->get();
        return view('cours.affectcours', compact('student', 'cours', 'student_list','affect'));
    }

    public function get_attribute(Request $request){
        $data = $request->all();
        $request->validate([
            "cours_id" => "required",
            "etudiant_id" => "required"
        ]);

        foreach($data['cours_id'] as $item){
            $save = AffectationEtudiant::updateorcreate([
                "cours_id" => $item,
                "etudiant_id" => $data['etudiant_id'],
            ]);
        };
        return redirect()->back()->with('success', 'Nouvel affectation effectuée avec succès !');
    }
}
