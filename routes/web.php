<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BladeController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\productsController;
use App\Http\Controllers\RechercheController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\TransiteController;
use App\Models\categorie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome')  ;
});


//Edit
Route::get('AdminEdit',[EditController::class, ('AdminEditVue')] );
Route::delete('AdminEdit/{id}', [EditController::class, 'destroyUser'])->name('destroyUser.store');
// Category
Route::get('category',[categoryController::class, 'type' ])->name('categotyVue');
Route::get('categoryListe',[categoryController::class, 'categoryVue' ])->name('categoryListe.store');
Route::post('category',[categoryController::class, 'categorie' ])->name('categorystore');



Route::delete('produits/{id}',[AdminController::class, 'destroy'])->name('destroy.store');
Route::get('produits/{id}/edit',[productsController::class, 'editProduct'])->name('editProduct.store');
Route::put('produits/{id}/edit',[productsController::class, 'updateProduct'])->name('updateProduct.store');

Route::get('adminRegister',[registerController::class, 'inscriptionAdmin']);
Route::get('modérateurRegister',[registerController::class, 'inscriptionModerateur']);
Route::post('adminRegister',[registerController::class, 'Adminregist'])->name('adminInscription.store');
Route::post('modérateurRegister',[registerController::class, 'Modérateurregist'])->name('moderateurInscription.store');


Route::get('moderateurListe',[AdminController::class, 'moderateurListe'])->name('moderateurListe.store');
Route::get('AdminListe',[AdminController::class, 'adminListe'])->name('adminListe.store');
Route::get('ModérateurDashord',[AdminController::class, 'dashbordmodérateur'])->name('Modéraeur.store');
Route::get('CompagnyDasbord',[AdminController::class, 'dashordCompagny'])->name('Admincompagny.store');
Route::get('Administrateur',[AdminController::class, 'dashbordAdmin'])->name('Admin.store');
Route::get('TransitaireDasbord',[AdminController::class, 'dashbordtransitaire'])->name('AdminTransitaire.store');


Route::get('recherche',[RechercheController::class,'rechercherProduits' ])->name('search.store');

Route::get('transitaire',[TransiteController::class,'Transit' ])->name('AddTransit');
Route::get('TransitaireListe',[TransiteController::class,'TransiListe' ])->name('Transitaire.store');;
Route::post('transitaire',[TransiteController::class,'registerTransitaire' ])->name('TransitPost');

Route::get('blog',[BladeController::class,'infos']);
Route::get('Acceuil',[BladeController::class,'acceuilVue'])->name('Acceuil.sotre');


Route:: get('Apropos',[BladeController::class,'nous'])->name('Qui-sommes-nous-?');

Route::get('show/{id}',[homeController::class, 'show'])->name('show');
Route::get('inscription',[registerController::class, 'envoyer'])->name('valider');
Route::post('register',[registerController::class, 'register'])->name('register');
Route::get('fournisseur',[registerController::class, 'fournisseurListe'])->name('fournisseurListe.store');

Route::group(['middleware' => ['web']], function () {
    Route::post('inscription',[loginController::class,  'login'])->name('put');
    Route::get('inscription',[loginController::class, 'connecter'])->name('inscription.store');
Route::post('Acceuil',[loginController::class, 'logout'])->name('logout.store');
});





Route::get('contact',[homeController::class, 'contact'])->name('contact.store');
Route::post('contact',[ContactController::class,'envoyerMessage'])->name('Message.store');
Route::get('Message',[ContactController::class, 'MessageListe' ]);






Route::get('product',[productsController::class, 'produit'])->name('Product.vue');
Route::post('product',[productsController::class, 'product'])->name('Product.store');
Route::post('Listeproduit',[productsController::class, 'listeproduit'])->name('Listeproduit.store');
Route::get('produitsEntreprise',[productsController::class, 'CompagnyProduct'])->name('EntrepriseProduits.store');

Route::get('compagny',[registerController::class, 'entreprise'])->name('entreprise.Vue');
Route::post('entrepriseenregist',[registerController::class,'registerCompagny'])->name('entrepriseenregist');


Route::get('ListeProduit',[BladeController::class, 'Liste'])->name('listes_des_produits');



