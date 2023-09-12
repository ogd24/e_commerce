<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BladeController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
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
Route::post('recherche',[RechercheController::class,'search' ])->name('search.store');
Route::get('transitaire',[TransiteController::class,'Transit' ]);
Route::get('TransitaireListe',[TransiteController::class,'TransiListe' ]);
Route::post('transitaire',[TransiteController::class,'registerTransitaire' ])->name('TransitPost');
Route::get('about',[BladeController::class,'nous']);
Route::get('blog',[BladeController::class,'infos']);
Route::get('Acceuil',[BladeController::class,'acceuilVue']);


Route:: get('Apropos',[BladeController::class,'about'])->name('Qui-sommes-nous-?');

Route::get('show/{id}',[homeController::class, 'show'])->name('show');
Route::get('inscription',[registerController::class, 'envoyer'])->name('valider');
Route::post('register',[registerController::class, 'register'])->name('register');

Route::get('inscription',[loginController::class, 'connecter']);
Route::post('inscription',[loginController::class,  'login'])->name('put');

Route::get('home',[homeController::class, 'afficher'])->name('acceuil');
Route::get('contact',[homeController::class, 'contact']);
Route::post('home',[loginController::class, 'logout'])->name('logout.store');


Route::get('category',[categoryController::class, 'type' ]);
Route::post('category',[categoryController::class, 'categorie' ])->name('categorystore');


Route::get('product',[productsController::class, 'produit'])->name('Product.vue');
Route::post('product',[productsController::class, 'product'])->name('Product.store');

Route::get('compagny',[registerController::class, 'entreprise'])->name('entreprise.Vue');
Route::post('entrepriseenregist',[registerController::class,'registerCompagny'])->name('entrepriseenregist');



