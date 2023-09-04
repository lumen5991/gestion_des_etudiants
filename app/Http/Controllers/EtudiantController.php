<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;
use App\Models\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class EtudiantController extends Controller
{

    public  function index()
    {   
        
        $tableEtu = Etudiant::all();
        return view('liste', compact('tableEtu'));
    }

    //Voir plus
     
    public function details($id = null)
    {
        $tableEtu = Etudiant::all();
        return view('details', compact('id', 'tableEtu'));
    }

    //

    public function showform()
    {
        return view('details');
    }

    //ajout des etudiants dans la base de données

    public function formulaire(Request $request)
    {
        $data = $request->all();

        $validation = $request->validate([
            "nom" => 'required',
            "prenoms" => 'required',
            "date_de_naissance" => 'required',
            "hobbies" => 'required',
            "specialite" => 'required',
            "bio" => 'required',
            "photo" => 'required'
        ]);


        if ($data['photo']) {
            $photo = $data['photo'];
            $path = $photo->store('stockageI');
        };


        $save = Etudiant::create([
            'nom' => $data['nom'],
            'prenoms' => $data['prenoms'],
            'date_de_naissance' => $data['date_de_naissance'],
            'hobbies' => $data['hobbies'],
            'specialite' => $data['specialite'],
            'bio' => $data['bio'],
            'photo' => $path,
            'user_id'=>Auth::user()->id
        ]);

        return redirect()->route('index')->with('message', 'Enregistrer avec succès');


        //Possibilité 1
        // $storage = Storage::disk("local");
        // $s=$storage->put($name, file_get_contents($file));


        //dd($file->extension());

        // dd($file->getClientOriginalName());


        //Possibilités 2
        //$s=$file->store('images');


        //Possibilités 3
        // $s=$file->move(storage_path('app'), $name);

        //Possibilités 4

        /*    $storage = Storage::disk("users");
        $s=$storage->put($name, file_get_contents($file));

        dd("success"); */
    }


    //suppression des étudiants de la base de données


    public function deleteEtu($id)
    {
        $etudiant = Etudiant::find($id);
        if ($etudiant) {
            $etudiant->delete();
            return redirect()->route('index')->with('message', 'Étudiant supprimé avec succès.');
        } else {
            return redirect()->route('index')->with('message', 'Étudiant non trouvé.');
        }
    }

    //modifier les informations des étudiants et mettre à jour

 /*    public function editEtu($id)
    {
        $etudiant = Etudiant::find($id);
        if (!$etudiant) {
            return redirect()->route('index')->with('message', 'Étudiant non trouvé.');
        }

        return view('newform', compact('etudiant', 'id'));
    }
 */
    //formulaire de modification

    public function newform($id)
    {
        $etudiant = Etudiant::find($id)->first();
        return view('newform', compact('id', 'etudiant'));
    }

    //Mise à jour de l'etudiant (enregistrement de la modification)
    public function updateEtu(Request $request, $id)
    {
        $data = $request->all();
        $etudiant = Etudiant::find($id);
 
        $validation = $request->validate([
            "nom" => 'required',
            "prenoms" => 'required',
            "date_de_naissance" => 'required',
            "hobbies" => 'required',
            "specialite" => 'required',
            "bio" => 'required',
            "photo" => 'required'
        ]);


        if ($data['photo']) {
            $photo = $data['photo'];
            $path = $photo->store('stockageI');
        };

        $etudiant->update([
            'nom' => $validation['nom'],
            'prenoms' => $validation['prenoms'],
            'date_de_naissance' => $validation['date_de_naissance'],
            'hobbies' => $validation['hobbies'],
            'specialite' => $validation['specialite'],
            'bio' => $validation['bio'],
            'photo' => $path,
            'user_id'=>Auth::user()->id
        ]);

        return redirect()->route('index')->with('message', 'Étudiant mis à jour avec succès.');
    }


    //Activation bouton activé et désactivé

    public function activate($id){
        $etudiant = Etudiant::find($id);
        if ($etudiant) {
            if ($etudiant->status) {
                $etudiant->status = false;
            }
            else {
                $etudiant->status = true;
            }
            $etudiant->save();
        }
        return redirect()->route('index');  
    }
}
