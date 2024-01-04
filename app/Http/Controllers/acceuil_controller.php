<?php

namespace App\Http\Controllers;

use App\Models\Produits;
use Illuminate\Http\Request;

class acceuil_controller extends Controller
{
    public function acceuil(){
        $Produit = Produits::inRandomOrder()->take(4)->get(); // afficher 4 produits aleatoire dans notre vue 
       
        return view('index')->with('Produit',$Produit);
    }
    public function access(){
        return view('accessoire');
    }
    public function ordina(){
        return view('ordinateur');
    }
    public function phone(){
        return view('smartphone');
    }
    public function propos(){
        return view('propos');
    }
    public function contact(){
        return view('contact');
    }
    public function compte(){
        return view('compte');
    }
    public function connexion(){
        return view('connexion');
    } 
    
    public function show($slug){
        $Produits = Produits::where('slug',$slug)->first();
        return view('show')->with('Produits',$Produits);
    }
    public function essai(){
        return view('essai');
    }
}
