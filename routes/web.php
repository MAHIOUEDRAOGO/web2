<?php

use App\Http\Controllers\acceuil_controller;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use Gloudemans\Shoppingcart\Facades\Cart;

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
    return view('welcome');
});
// route::get('/','acceuil_controller@acceuil');

route::get('/acceuil',[acceuil_controller::class,'acceuil'])->name('acceuil');
route::get('/accessoire',[acceuil_controller::class,'access'])->name('accessoire');
route::get('/ordinateur',[acceuil_controller::class,'ordina'])->name('ordinateur');
route::get('/smartphone',[acceuil_controller::class,'phone'])->name('phone');
route::get('/propos',[acceuil_controller::class,'propos'])->name('propos');
route::get('/contact',[acceuil_controller::class,'contact'])->name('contact');
route::get('/compte',[acceuil_controller::class,'compte'])->name('compte');
route::get('/connexion',[acceuil_controller::class,'connexion'])->name('connexion');
route::get('/acceuil/{slug}',[acceuil_controller::class,'show'])->name('show');


route::get('/essai',[acceuil_controller::class,'essai']);
route::post('/ajouter',[CartController::class,'store'])->name('cart.store');
// une vue pour notre panier
Route::get('/panier',[CartController::class,'index'])->name('cart.index');
//une route pour la suppression d'un produits.
Route::get('/panier/{rowId}',[CartController::class,'destroy'])->name('cart.destroy');

// Pour vider notre pannier
Route::get('/videpanier',function(){
    Cart::destroy();
});
