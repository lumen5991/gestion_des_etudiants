<?php

use App\Http\Controllers\AffectationEnsController;
use App\Http\Controllers\AffectationEtuController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\NotesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\AffectationEtudiant;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */




//Route::put('/update/{id}', [EtudiantController::class, 'updateEtu'])->name('updateEtu');


/* Route::get('/', function () {
    return view('liste');
});
 */
/* 
Route::get('/formulaire', function () {
    return view('formulaire');
})->name("formulaire");  */

Route::controller(EtudiantController::class)->middleware('auth')->group(function () {

    Route::get('/', "index")->name("index");

    //voir plus

    Route::get('/details/{id}', "details")->name('details');

    //ajout des étudiants

    Route::post('/formulaire', "formulaire")->name("formulaire");

    Route::get('/addEtu', "showform")->name("addEtu");

    //suppresssion des etudiants

    Route::get('/delete/{id}', "deleteEtu")->name('deleteEtu');

    //Mise à jour des étudiants (modifier)

    Route::get('/newform{id}', "newform")->name('newform');

    Route::post('/update/{id}', 'updateEtu')->name('updateEtu');

    //status

    Route::post('/activate/{id}', 'activate')->name('activate');
});


Route::controller(UserController::class)->prefix('user')->group(function () {

    Route::get('/login',  "login")->name("login");
    
    Route::get('/register', "register")->name("register");

    Route::post('/authentification', "authentification")->name("authentification");

    Route::get('/logout',  "logout")->name("logout");
    
    Route::post('/store/register', "store")->name("storeUser");
    
    Route::get('verify_email/{email}', "verify")->name("verifyEmail");


});

Route::controller(CoursController::class)->middleware('auth')->group(function () {
    
    Route::get('/cours','accesscours')->name('accesscours');

    Route::get('/addcours', 'addcours')->name('addcours');

    Route::post('/newcours', 'newcours')->name('newcours');

}); 

Route::controller(CategoryController::class)->middleware('auth')->group(function () {

    Route::post('/newcategorie', 'newcategorie')->name('newcategorie');

    Route::get('/addcategories', 'addcategories')->name('addcategories');
    
});

Route::controller(EnseignantController::class)->middleware('auth')->group(function () {
    
    Route::get('/enseignant', 'enseignant')->name('enseignant');

    Route::get('/addenseignant', 'addenseignant')->name('addenseignant');

    Route::post('/newenseignant', 'newenseignant')->name('newenseignant');
    
});

Route::controller(AffectationEnsController::class)->middleware('auth')->group(function () {


    Route::get('/affectationEns/{id}', 'affectationEns')->name('affectationEns');

    Route::post('/saveAffectation/{enseignant_id}', 'saveAffectation')->name('saveAffectation');
    
});


Route::controller(AffectationEtuController::class)->prefix('affectationetu')->group(function (){

    Route::get('/affectationcours', 'get_etudiant')->name('get_etudiant');

    Route::post('/get_attribute/affectationcours', 'get_attribute')->name('get_attribute');
});

Route::controller(NotesController::class)->prefix('affectationetu')->group(function (){

    Route::get('/note', 'note')->name('note');

});