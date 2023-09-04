<?php
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\EtudiantController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
    
    Route::get('verify_email//{email}', "verify")->name("verifyEmail");


});


Route::controller(CoursController::class)->group(function () {
    
    Route::get('/cours','accesscours')->name('accesscours');

    Route::get('/addcours', 'addcours')->name('addcours');
    
    /* Route::get('/newcategorie', 'newcategorie')->name('newcategorie'); */

    Route::post('/newcours', 'newcours')->name('newcours');


});

Route::controller(CategoryController::class)->group(function () {
    Route::post('/newcategorie', 'newcategorie')->name('newcategorie');
    Route::get('/addcategories', 'addcategories')->name('addcategories');
    
});

Route::controller(EnseignantController::class)->group(function () {
    Route::get('/enseignant', 'enseignant')->name('enseignant');
    Route::get('/addenseignant', 'addenseignant')->name('addenseignant');
    Route::get('/affectationEns', 'affectationEns')->name('affectationEns');

    Route::post('/newenseignant', 'newenseignant')->name('newenseignant');

    Route::post('/newenseignant', 'newenseignant')->name('newenseignant');
    
});
